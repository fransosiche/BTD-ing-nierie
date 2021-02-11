<?php

namespace App\Http\Controllers;

use App\Forms\CreatePosts;
use App\Forms\MailContact;
use App\Mail\Reserved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Kris\LaravelFormBuilder\FormBuilder;

class BTDController extends Controller
{
    public function index()
    {
        $data = DB::table('blog')->get();
        return view('WelcomeBTD', compact('data'));
    }

    public
    function contactdisplay(FormBuilder $formBuilder)
    {
        $Itemform = $formBuilder->create(MailContact::class);
        if (auth()->guest()) {
            return redirect('login')->withErrors([
                'password' => 'Please Log In'
            ]);
        } else {
            return view('contactBTD', compact('Itemform'));
        }

        return view('contactBTD', compact('Itemform'));
    }

    public
    function SendMail()
    {
        try {
            $data= array('Email' => $_POST['Votre_E-mail'],'Objet'=>$_POST['Objet'], 'Sujet' => $_POST['Sujet']);
            Mail::to('pbiron.btdingenierie@gmail.com')->send(new Reserved($data));


            return redirect('/');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


    public function engagementdisplay()
    {
        return view('engagementBTD');
    }
    public function mentions()
    {
        return view('mentions');
    }
    public function blogalldisplay()
    {
        try {
            if (Auth::user() != null) {
                $permissions = Auth::user()->isadmin;
                $data = DB::table('blog')
                    ->get();
                return view('blogBTD', compact('data', 'permissions'));

            } else {
                $data = DB::table('blog')
                    ->get();
                return view('blogBTD', compact('data'));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public
    function DisplayPostForm(FormBuilder $formBuilder)
    {
        $Itemform = $formBuilder->create(CreatePosts::class);
        if (Auth::user() == null || Auth::user()->isadmin != 1) {
            return redirect('login')->withErrors([
                'password' => 'Erreur'
            ]);
        } else {
            return view('BTDBlogCreate', compact('Itemform'));
        }

        return view('BTDBlogCreate', compact('Itemform'));

    }

    public function DisplayPostItems($id)
    {
        try {
            if (Auth::user() != null) {
                $permissions = Auth::user()->permissions;
                $data = DB::table('blog')->where('ID', '=', $id)
                    ->get();
                return view('blogItems', compact('data', 'permissions'));

            } else {
                $data = DB::table('blog')->where('ID', '=', $id)
                    ->get();
                return view('blogItems', compact('data'));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public
    function EditionPost($id)
    {
        if (Auth::user() == null || Auth::user()->isadmin != 1) {
            return redirect('/');
        } else {
            $data = DB::table('blog')->where('ID', $id)->get();
            return view('blogBTDedit', compact('data'));
        }
    }


    public
    function UpdatePost(Request $request, $id)
    {

        if (Auth::user() == null || Auth::user()->isadmin != 1) {

            return redirect('/');
        } else {
            try {
                if((request()->validate(['image1' => 'image|mimes:jpeg,png,jpg,gif,svg']))!= null ) {
                    $image_tab1 = DB::table('blog')->where('ID', $id)->select('Image_1')->get();
                    if(file_exists(public_path('images' . '\\' . $image_tab1[0]->Image_1))){
                        unlink(public_path('images' . '\\' . $image_tab1[0]->Image_1));
                    }

                    $imageName1 = time() .'1'. '.' . request()->image1->getClientOriginalExtension();
                    request()->image1->move(public_path('images'), $imageName1);
                    DB::table('blog')->where('ID', $id)->update(array(
                        'Image_1' => $imageName1
                    ));
                }
                if((request()->validate(['image2' => 'image|mimes:jpeg,png,jpg,gif,svg']))!= null){
                    $image_tab2 = DB::table('blog')->where('ID', $id)->select('Image_2')->get();
                    if(file_exists(public_path('images' . '\\' . $image_tab2[0]->Image_2))){
                        unlink(public_path('images' . '\\' . $image_tab2[0]->Image_2));
                    }
                    $imageName2 = time() .'2'. '.' . request()->image2->getClientOriginalExtension();
                    request()->image2->move(public_path('images'), $imageName2);
                    DB::table('blog')->where('ID', $id)->update(array(
                        'Image_2' => $imageName2
                    ));
                }
                if((request()->validate(['image3' => 'image|mimes:jpeg,png,jpg,gif,svg']))!= null){
                    $image_tab3 = DB::table('blog')->where('ID', $id)->select('Image_3')->get();
                    if(file_exists(public_path('images' . '\\' . $image_tab3[0]->Image_3))){
                        unlink(public_path('images' . '\\' . $image_tab3[0]->Image_3));
                    }

                    $imageName3 = time() .'3'. '.' . request()->image3->getClientOriginalExtension();
                    request()->image3->move(public_path('images'), $imageName3);
                    DB::table('blog')->where('id', $id)->update(array(
                        'Image_3' => $imageName3
                    ));
                }
                DB::table('blog')->where('ID', $id)
                    ->update(['Name' => $request->name, 'Description' => $request->description, 'Lieu' => $request->Lieu]);

                return redirect('/blogBTD');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
    public
    function DeletePost($id)
    {
        if (Auth::user() == null || Auth::user()->isadmin != 1) {

            return redirect('/');
        } else {
            try {
                $image1 = DB::table('blog')->where('ID', $id)->select('Image_1')->get();
                $image2 = DB::table('blog')->where('ID', $id)->select('Image_2')->get();
                $image3 = DB::table('blog')->where('ID', $id)->select('Image_3')->get();

                if(file_exists(public_path('images' . '\\' . $image1[0]->Image_1))){
                    unlink(public_path('images' . '\\' . $image1[0]->Image_1));
                }
                if(file_exists(public_path('images' . '\\' . $image2[0]->Image_2))){
                    unlink(public_path('images' . '\\' . $image2[0]->Image_2));
                }
                if(file_exists(public_path('images' . '\\' . $image3[0]->Image_3))){
                    unlink(public_path('images' . '\\' . $image3[0]->Image_3));
                }


                DB::table('blog')->where('ID', $id)->delete();

            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }

        return redirect('/blogBTD');

    }

    public
    function CreateForm()
    {
        if (Auth::user() == null || Auth::user()->isadmin != 1) {
            return redirect('/');
        } else {
            if (!empty($_POST)) {
                try {
                    request()->validate([
                        'Image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    ]);
                    $imageName1 = time() . '1' . '.' . request()->Image_1->getClientOriginalExtension();
                    request()->Image_1->move(public_path('images'), $imageName1);

                    request()->validate([
                        'Image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    ]);

                    $imageName2 = time() . '2' . '.' . request()->Image_2->getClientOriginalExtension();
                    request()->Image_2->move(public_path('images'), $imageName2);


                    request()->validate([
                        'Image_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    ]);

                    $imageName3 = time() . '3' . '.' . request()->Image_3->getClientOriginalExtension();
                    request()->Image_3->move(public_path('images'), $imageName3);

                    DB::table('blog')->insert(array('Name' => $_POST['Nom_du_Post'], 'Description' => $_POST['Description'], 'Lieu' => $_POST['Lieu'], 'Image_1' => $imageName1,
                        'Image_2' => $imageName2,
                        'Image_3' => $imageName3,
                        ));


                } catch (Exception $e) {
                    echo $e->getMessage();
                }

            } else {
                return redirect('/');
            }
            return redirect('/');

        }

    }

}
