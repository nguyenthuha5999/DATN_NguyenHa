<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class KhachHangController extends Controller
{
    public function show_khachhang(){
        $sp=DB::table('khachhang')->get();
    	return view('admin.khach-hang.khachhang')->with('sp',$sp);
    }

    public function them_khachhang(Request $request){
        if($request->hoten){
            
        DB::table('khachhang')->insert([
            'Hoten' => $request->hoten,
            'Gioitinh' => $request->gioitinh,
            'Email' => $request->email,
            'SDT' => $request->sdt,
            'Diachi' => $request->diachi,
        ]);
        return redirect('/khachhang');
        }
        return view('admin.khach-hang.them');
    }

    public function getSua($id){
        $khachhang = DB::table('khachhang')->where('id', $id)->first();
      return view('admin.khach-hang.sua', ['khachhang'=>$khachhang]);

    }

    public function postSua(Request $request, $id){
        DB::table('khachhang')->where('id', $id)->update([
            'Hoten' => $request->Hoten,
            'Gioitinh' => $request->Gioitinh,
            'Email' => $request->Email,
            'SDT' => $request->SDT,
            'Diachi' => $request->Diachi,
        ]);
            return redirect('/khachhang');
    }

    public function xoa_khachhang($id){
        DB::table('khachhang')->where('id',$id)->delete();
        return redirect('/khachhang');
    }

    public function hienthi_khachhang($id){
        $khachhang = DB::table('khachhang')->where('id', $id)->first();
      return view('admin.khach-hang.hienthi', ['khachhang'=>$khachhang]);

    }

}
