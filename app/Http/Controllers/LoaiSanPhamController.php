<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoaiSanPhamController extends Controller
{
    //hien thi
    public function show_loaisanpham(){
        $sp=DB::table('loaisanpham')->get();
    	return view('admin.loai-san-pham.loaisanpham')->with('sp',$sp);
    }
    //them 
    public function them_loaisanpham(Request $request){
        if($request->tenloai){
            
        DB::table('loaisanpham')->insert([
            'Tenloai' => $request->tenloai,
        ]);
        return redirect('/loaisanpham');
        }
        return view('admin.loai-san-pham.them');
    }
    //Sua
    public function getSua($id){
        $loaisanpham = DB::table('loaisanpham')->where('id', $id)->first();
      return view('admin.loai-san-pham.sua', ['loaisanpham'=>$loaisanpham]);

    }

    public function postSua(Request $request, $id){
        DB::table('loaisanpham')->where('id', $id)->update([
            'Tenloai' => $request->Tenloai,
        ]);
            return redirect('/loaisanpham');
    }
  
    //Xoa
    public function xoa_loaisanpham($id){
        DB::table('loaisanpham')->where('id',$id)->delete();
        return redirect('/loaisanpham');
    }

    //hienthi
    public function hienthi_loaisanpham($id){
        $loaisanpham = DB::table('loaisanpham')->where('id', $id)->first();
      return view('admin.loai-san-pham.hienthi', ['loaisanpham'=>$loaisanpham]);

    }
}
