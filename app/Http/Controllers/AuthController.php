<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(Request $request){
        $namaDepan = $request['firstName'];
        $namaBelakang = $request['lastName'];
        $nama = ucfirst($namaDepan)." ".ucfirst($namaBelakang);
        return view('welcome')->with('nama', $nama); 
    }
}
