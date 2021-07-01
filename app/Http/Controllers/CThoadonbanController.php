<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Chitiethdb;

class CThoadonbanController extends Controller
{
  public function show_chitiethdb(){
    $sp= DB::table('chitiethdb')->get();
  return view('admin.ct-hoa-don-ban.chitiethdb')->with('sp',$sp);
  }

  public function them_chitiethdb(Request $request){
    if($request->Soluongban){
        
    DB::table('chitiethdb')->insert([
        'Soluongban' => $request->Soluongban,
        'Giaban' => $request->Giaban,
        'id_maHDB' => $request->id_maHDB,
        'id_maSP' => $request->id_maSP,
    ]);
    return redirect('/chitiethdb');
    }
    return view('admin.hoa-don-ban.them');
}

    public function xoa_cthoadonban($id){
      DB::table('chitiethdb')->where('id',$id)->delete();
      return redirect('/chitiethdb');
  }
}

