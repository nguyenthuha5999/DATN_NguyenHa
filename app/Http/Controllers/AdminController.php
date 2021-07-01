<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sanpham;
use App\Khachhang;
use App\Hoadonban;
use App\User;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    //đăng nhập 
    public function getadmin(){
        return view('admin.dangnhapad');
    }

    public function postadmin(Request $req){
        $this->validate($req,
        [
            'email'=>'required',
            'password'=>'required|min:6|max:30'
        ],
        [   
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất phải 6 kí tự',
            'password.max' => 'Mật khẩu không được quá 30 kí tự'
        ]
    );

            if(Auth::attempt(['email'=>$req->email,'password'=>$req->password])){
                return redirect('dashboard');
            }
            else{
                return redirect('admin')->with(['thongbao'=>'Đăng nhập không thành công !']);
            }
    }

    public function logout(){
        return view('admin_logout');
    }

     public function show_dashboard(){
        $Tong_sanpham = Sanpham::count();
        $Tong_khachhang = Khachhang::count();
        $Tong_donhang = Hoadonban::count();
        $Tong_user = User::count();
        return view('admin.dashboard', compact('Tong_sanpham','Tong_khachhang', 'Tong_donhang', 'Tong_user'));
    }

    public function getad_dangnhap(){
        return view('admin.dangnhapadmin');
    }
}