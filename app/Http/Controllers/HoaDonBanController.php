<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Hoadonban;
use App\Chitiethdb;
use App\Khachhang;
class HoaDonBanController extends Controller
{
    public function show_hoadonban(){
        $sp = DB::table('hoadonban')->get();
    	return view('admin.hoa-don-ban.hoadonban')->with('sp',$sp);
    }

    public function them_hoadonban(Request $request){
        if($request->Soluongban){
            
        DB::table('chitiethdb')->insert([
            'Soluongban' => $request->Soluongban,
            'Giaban' => $request->Giaban,
            'id_maHDB' => $request->id_maHDB,
            'id_maSP' => $request->id_maSP,
        ]);
        return redirect('/hoadonban');
        }
        return view('admin.hoa-don-ban.them');
    }

    public function getSua($id){
        $hoadonban = DB::table('hoadonban')->where('id', $id)->first();
      return view('admin.hoa-don-ban.sua', ['hoadonban'=>$hoadonban]);

    }

    public function postSua(Request $request, $id){
        DB::table('hoadonban')->where('id', $id)->update([
            'Ngayban' => $request->Ngayban,
            'id_maKH' => $request->id_maKH,
            'Tongtien' => $request->Tongtien,
            'Trangthai' => $request->Trangthai,
        ]);
            return redirect('/hoadonban');
    }

    public function xoa_hoadonban($id){
        DB::table('hoadonban')->where('id',$id)->delete();
        return redirect('/hoadonban');
    }

    public function hienthi_hoadonban($id){
        $hoadonban = DB::table('chitiethdb')->where('id_maHDB', $id)->get();
      return view('admin.hoa-don-ban.hienthi',compact('hoadonban'));
    }
}
