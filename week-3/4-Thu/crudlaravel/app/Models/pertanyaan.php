<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\jawaban;

class Pertanyaan{
	public static function get_all(){
		$get = DB::table('pertanyaan')
			->get();
		return $get;
	}

	public static function save($data){
		unset($data['_token']);
		$data['created_at'] = time();
		// $data['updated_at'] = time();
		$simpan = DB::table('pertanyaan')->insert($data);
		return $simpan;
	}
}