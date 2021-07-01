<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sanpham;

class SanPhamController extends Controller
{
    public function show_sanpham(){
        $sp = Sanpham::paginate(15);
        return view('admin.san-pham.sanpham', compact('sp'));
    }

    public function them_sanpham(Request $request){
        if($request->Tensp){
            
        DB::table('sanpham')->insert([
            'Tensp' => $request->Tensp,
            'id_maLoai' => $request->id_maLoai,
            'Mausac' => $request->Mausac,
            'KthuocClieu' => $request->KthuocClieu,
            'Giatien' => $request->Giatien,
            'Giakhuyenmai' => $request->Giakhuyenmai,
            'Hinhanh' => $request->Hinhanh,
            'Soluong' => $request->Soluong,
            'Mota' => $request->Mota,
            'Spmoi' => $request->Spmoi,
        ]);
        return redirect('/sanpham');
        }
        return view('admin.san-pham.them');
    }

    public function getSua($id){
        $sanpham = DB::table('sanpham')->where('id', $id)->first();
      return view('admin.san-pham.sua', ['sanpham'=>$sanpham]);

    }

    public function postSua(Request $request, $id){
        DB::table('sanpham')->where('id', $id)->update([
            'Tensp' => $request->Tensp,
            'id_maLoai' => $request->id_maLoai,
            'Mausac' => $request->Mausac,
            'KthuocClieu' => $request->KthuocClieu,
            'Giatien' => $request->Giatien,
             'Giakhuyenmai' => $request->Giakhuyenmai,
            'Hinhanh' => $request->Hinhanh,
            'Soluong' => $request->Soluong,
            'Mota' => $request->Mota,
            'Spmoi' => $request->Spmoi,
        ]);
            return redirect('/sanpham');
    }

    public function xoa_sanpham($id){
        DB::table('sanpham')->where('id',$id)->delete();
        return redirect('/sanpham');
    }

    public function hienthi_sanpham($id){
        $sanpham = DB::table('sanpham')->where('id', $id)->first();
      return view('admin.san-pham.hienthi', ['sanpham'=>$sanpham]);

    }
}
