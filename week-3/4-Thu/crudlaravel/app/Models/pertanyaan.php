<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\jawaban;

class Pertanyaan{
	public static function get_all(){
		$get = Jawaban::with('pertanyaan')->where('pertanyaan_id','id');
		return $get;
	}

	public static function save($data){
		unset($data['_token']);
		$data['created_at'] = \Carbon\Carbon::now();
		$data['updated_at'] = \Carbon\Carbon::now();
		$simpan = DB::table('pertanyaan')->insert($data);
		return $simpan;
	}
}