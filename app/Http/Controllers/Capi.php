<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Capi extends Controller
{
    public function get()
    {
        $profiles = \App\Mapi::all();
        return response()->json($profiles);
    }

    public function post(Request $req)
    {
        $data = $req->all();
        \App\Mapi::create([
            'name' => $data['name'],
            'email' => $data['email']
        ]);

    }
}
