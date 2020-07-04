<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\pertanyaan;

class Jawaban{
    public static function get_id($id){
        $data = DB::table('pertanyaan')->where("id", $id)->first();
        return $data;
    }

    public static function get_answer($id){
        $data = DB::table('jawaban')->where("pertanyaan_id", $id)->orderBy('created_at','DESC')->take(2)->get();
        return $data;
    }

    public static function get_answer_all($id){
        $data = DB::table('jawaban')->where("pertanyaan_id", $id)->orderBy('created_at','DESC')->get();
        return $data;
    }

    public static function save($data, $id){
        unset($data['_token']);
        $data['pertanyaan_id'] = $id;
        $data['created_at'] = time();
        // $data['updated_at'] = \Carbon\Carbon::now();
        // print_r($data);die();
        $simpan = DB::table('jawaban')->insert($data);
        return $simpan;
    }
}