<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaan;
use App\Models\jawaban;

class PertanyaanController extends Controller
{
	public function index(){
		$data = Pertanyaan::get_all();
		foreach ($data as $key => $value) {
			$jawaban = Jawaban::get_answer($value->id);
			foreach ($jawaban as $key_jawab => $value_jawab) {
				$value->jawaban[$key_jawab] = $value_jawab->jawaban_isi;
			}
			if (!isset($value->jawaban)) {
				$value->jawaban[0] = " ";
			}
		}
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

	public function detail($id){
		$data = Pertanyaan::get_id($id);
		// dd($data);
		return view('content.tanya.details.index',compact('data'));
	}
}
