<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function biodata()
    {
    	return view('selamatdatang');
    }

    public function auth(Request $request){
        $nama = $request['firstname'].$request['lastname'];
        return view('selamatdatang', ["nama" =>$nama]);
    }
}
