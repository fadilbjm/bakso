<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clanding extends Controller
{
    function index(){
        return view('home');
    }

    public function promo()
    {
        return view('promo');
    }

    public function menu(){
        return view('menu');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
