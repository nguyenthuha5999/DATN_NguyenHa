<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    protected $table = "khachhang";

    public function hoadonban(){
    	return $this->hasMany('App\Hoadonban','id_maKH','id');
    }
}
