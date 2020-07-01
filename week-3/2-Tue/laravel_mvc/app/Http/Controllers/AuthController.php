<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
    	return view('register');
    }

    public function biodata()
    {
    	return view('biodata');
    }

    public function post(Request $request)
    {
    	$nama = $request['fname'].$request['lname'];
    	return view('welcome', compact('nama'));
    }
}
