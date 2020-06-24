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

    public function subs(Request $req)
    {
        \App\Msub::create($req->all());
        // echo "ber";
        return redirect('subscribeDone');
        
    }

    function subsdone()
    {
        echo "Terimakasih telah berlangganan mailing list kami, kami akan memberikan promo menarik dan tidak melakukan spam :)";
    }
}
