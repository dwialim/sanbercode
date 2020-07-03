<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pertanyaan;
class PertanyaanController extends Controller
{
    public function index(){
    	$data = DB::table('pertanyaan')->get();
    	return view('content.tanya.index',compact('data'));
    }

    public function create(){
    	return view('content.tanya.tambahtanya.index');
    }

    public function store(Request $req){
    	// dd($req->all());
    	$tanya = new pertanyaan;
    	$tanya->id;
    	$tanya->judul = $req->judul;
    	$tanya->isi = $req->isi;
    	$tanya->save();
		// dd($tanya->all());
    	return redirect('/pertanyaan');
    }
}
