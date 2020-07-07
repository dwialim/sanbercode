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

	public static function edit($id){
		$edit = DB::table('pertanyaan')->where('id',$id)->first();
		return $edit;
	}

	public static function update($req,$id){
		unset($req['_token']);
		unset($req['_method']);
		// $req['id'] = $id;
		$update = DB::table('pertanyaan')->where('id',$id)->update($req);
		return $update;
	}

	public static function destroy($id){
		$destroy = DB::table('pertanyaan')->where('id',$id)->delete();
		return $destroy;
	}

	public static function detail($id){
		$data = DB::table('pertanyaan')->where('id',$id)->first();
		return $data;
	}

	public static function join($id){
		$join = DB::table('pertanyaan')
			->join('jawaban','jawaban.pertanyaan_id','=','pertanyaan.id')
			->where('pertanyaan.id',$id)
			->select('pertanyaan.judul','pertanyaan.isi','jawaban.jawaban_isi')
			->get();
		return $join;
	}
}