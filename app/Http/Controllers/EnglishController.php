<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnglishController extends Controller
{
    public function index()
    {
        $data = DB::table('blog')->get();
        return view('EnglishVersion.indexEN', compact('data'));
    }
}
