<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoadonban extends Model
{
    protected $table = "hoadonban";

    public function chitiethdb(){
    	return $this->belongsTo('App\Chitiethdb','id_maHDB','id');
    }

    public function khachhang(){
    	return $this->belongsTo('App\Khachhang','id_maKH','id');
    }
}
