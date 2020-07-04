<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaan;

class PertanyaanController extends Controller
{
	public function index(){
		$data = Pertanyaan::get_all();
		return view('content.tanya.index',compact('data'));
	}

	public function create(){
		return view('content.tanya.tambahtanya.index');
	}

	public function store(Request $req){
		// dd($req->all());die;
		$simpan = Pertanyaan::save($req->all());
		return redirect('/pertanyaan');
	}
}
