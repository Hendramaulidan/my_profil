<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajar extends Controller
{
    public function index($eror)
    {
        return view('profil' , ['eror' => $eror]);
    }
}
