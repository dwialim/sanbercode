<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pertanyaan;

class HomeController extends Controller
{
    public function index(){
    	$data = DB::table('pertanyaan')->get();
    	return view('content.dashboard',['data' => $data]);
    }
}
