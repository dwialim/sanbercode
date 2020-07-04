<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\jawaban;

class Pertanyaan{
	public static function get_id($id){
		$get_id = DB::table('pertanyaan')->where('id',$id)->first();
	}

	public static function get_all(){
		$get = DB::table('pertanyaan')->get();
		return $get;
	}

	public static function delete_data($id){
		$hapus = DB::table('pertanyaan')->where('id','=',$id)->delete();
	}

	public static function save($data){
		unset($data['_token']);
		$data['created_at'] = time();
		// $data['updated_at'] = time();
		$simpan = DB::table('pertanyaan')->insert($data);
		return $simpan;
	}
}