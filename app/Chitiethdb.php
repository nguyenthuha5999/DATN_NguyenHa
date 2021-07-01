<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiethdb extends Model
{
    protected $table = "chitiethdb";

    public function sanpham(){
    	return $this->belongsTo('App\Sanpham','id_maSP','id');
    }
    public function hoadonban(){
    	return $this->belongsTo('App\Hoadonban','id_maHDB','id');
    }
}
