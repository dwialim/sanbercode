<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
// use App\Models\pertanyaan;

class Jawaban{
    public static function get_id($id){
        $data = DB::table('pertanyaan')->where("id", $id)->first();
        return $data;
    }

    public static function save($data, $id){
        unset($data['_token']);
        $data['pertanyaan_id'] = $id;
        $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
        $simpan = DB::table('jawaban')->insert($data);
        return $simpan;
    }
}