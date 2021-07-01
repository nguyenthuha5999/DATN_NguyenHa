<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = "sanpham";

    public function loaisanpham(){
    	return $this->belongsTo('App\Loaisanpham','id_maLoai','id');
    }
    public function chitiethdb(){
    	return $this->hasMany('App\Chitiethdb','id_maSP','id');
    }
}
