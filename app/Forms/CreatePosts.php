<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CreatePosts extends Form
{
    public function buildForm()
    {
        $this->formOptions =[
            'method' => 'POST',
            'url'=>route('blog_create_form')];
        $this
            ->add('Nom du Post','text',[
                'rules'=> 'required'
            ])
            ->add('Description','textarea',[
                'rules'=> 'required'
            ])

            ->add('Lieu', 'text')

            ->add('Image 1', 'file')
            ->add('Image 2', 'file')
            ->add('Image 3', 'file')

            ->add('Sauvegarder', 'submit');
    }
}
