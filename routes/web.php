<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*BTD*/
Route::get('/', array('as' => 'indexBTD', 'uses' => 'BTDController@index'));
Route::get('/mentions', array('as' => 'mentions', 'uses' => 'BTDController@mentions'));

Route::get('/contact', array('as' => 'contactdisplay', 'uses' => 'BTDController@contactdisplay'));
Route::post('/contact', array('as' => 'send_contact', 'uses' => 'BTDController@SendMail'));

Route::get('/blogBTD', array('as' => 'blogdisplay', 'uses' => 'BTDController@blogalldisplay'));

Route::get('/blogBTD/create',array('as' => 'blog_create_form', 'uses' => 'BTDController@DisplayPostForm'));
Route::post('/blogBTD/create',array('as' => 'blog_post_form', 'uses' => 'BTDController@CreateForm'));

Route::get('/blogBTD/post/{ID}', array('as' => 'blog_item', 'uses' => 'BTDController@DisplayPostItems'));

Route::get('/blog/delete/{ID}', array('as' => 'blog_del', 'uses' => 'BTDController@DeletePost'));


Route::get('/blogBTD/edit/{id}', array('as' => 'blog_edit', 'uses' => 'BTDController@EditionPost'));
Route::post('/blogBTD/updatepost/{id}', array('as' => 'Blog_Update', 'uses' => 'BTDController@UpdatePost'));


/*Connection Utilisateurs*/
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


/*OTEAUX*/
Route::get('/OTEAUX', array('as' => 'indexOTEAU', 'uses' => 'oteauxcontroller@index'));
Route::get('/Assainissement', array('as' => 'Assainissement', 'uses' => 'oteauxcontroller@Assainissement'));
Route::get('/BTP', array('as' => 'BTP', 'uses' => 'oteauxcontroller@BTP'));
Route::get('/Climatisation', array('as' => 'Climatisation', 'uses' => 'oteauxcontroller@Climatisation'));
Route::get('/Plomberie', array('as' => 'Plomberie', 'uses' => 'oteauxcontroller@Plomberie'));
Route::get('/Electricité', array('as' => 'Electricité', 'uses' => 'oteauxcontroller@Electricité'));
Route::get('/Négociation', array('as' => 'Négociation', 'uses' => 'oteauxcontroller@Négociation'));
Route::get('/Transport', array('as' => 'Transport', 'uses' => 'oteauxcontroller@Transport'));


/*English*/
Route::get('/indexEN', array('as' => 'indexEN', 'uses' => 'EnglishController@index'));
