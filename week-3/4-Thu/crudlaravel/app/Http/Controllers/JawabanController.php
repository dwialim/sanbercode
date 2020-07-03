<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pertanyaan;
use App\jawaban;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
    	$data = pertanyaan::where("id", $pertanyaan_id)->first();
    	return view('content.jawab.index',compact('data'));
    }

    public function store(Request $req, $pertanyaan_id){
    	// dd($req->all());die;
    	$jawab = new jawaban;
    	$jawab->id;
    	$jawab->isi = $req->isi;
    	$jawab->pertanyaan_id = $pertanyaan_id;
    	$jawab->save();
    	return redirect('pertanyaan');
    }
}
