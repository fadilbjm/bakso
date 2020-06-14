<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clanding extends Controller
{
    function index(){
        return view('home');
    }
}
