<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oteauxcontroller extends Controller
{
    public function index()
    {
        return view('WelcomeOteau');
    }
    public function Assainissement()
    {
        return view('OTEAUAssainissement');
    }
    public function BTP()
    {
        return view('BTP');
    }

    public function Climatisation()
    {
        return view('Climatisation');
    }

    public function Plomberie()
    {
        return view('Plomberie');
    }

    public function Electricité()
    {
        return view('Electricité');
    }

    public function Négociation()
    {
        return view('Négociation');
    }

    public function Transport()
    {
        return view('Transport');
    }
}
