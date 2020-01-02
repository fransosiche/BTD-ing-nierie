<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class MailContact extends Form
{
    public function buildForm()
    {
        $this->formOptions =[
            'method' => 'POST',
            'url'=>route('send_contact')];
        $this
            ->add('Votre E-mail','email',[
                'rules'=> 'required'
            ])
            ->add('Objet', 'text')
            ->add('Sujet','textarea',[
                'rules'=> 'required|min:5'
            ])

            ->add('Envoyer', 'submit');
    }

}
