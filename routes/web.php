<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
///////////////////////////////////Phần Home///////////////////////////////////
//trang chủ
Route::get('/','PageController@index');
Route::get('quick-view/{id}','PageController@quickview');
//danh mục
Route::get('danh-sach/{id}', 'PageController@getList');
//đăng nhập
Route::get('dangnhap',['as'=>'dangnhap','uses'=>'PageController@getdangnhap']);
Route::post('dangnhap',['as'=>'dangnhap','uses'=>'PageController@postdangnhap']);
//đăng xuất
Route::get('dangxuat', 'PageController@dangxuat');
//đăng ký
Route::get('dangky','PageController@getdangky');
Route::post('dangky','PageController@postdangky');
//chi tiết sp
Route::get('chitietsp/{id}','PageController@chitietsp');
//giỏ hàng & đặt hàng
Route::get('giohang',['as'=>'themgiohang','uses'=>'PageController@giohang']); 
Route::get('themgiohang/{id}','PageController@themgiohang');
Route::get('xoa-giohang/{id}',['as'=>'xoagiohang','uses'=>'PageController@xoagiohang']);
Route::get('dat-hang','PageController@thanhtoan');
Route::post('dat-hang',['as'=>'dathang','uses'=>'PageController@dathang']);
//tìm kiếm
Route::get('timkiem','PageController@timkiem');
//liên hệ
Route::get('lienhe','PageController@lienhe');
//giới thiệu
Route::get('gioithieu','PageController@gioithieu');


///////////////////////////////////Phần admin////////////////////////////////////
Route::get('/admin','AdminController@getadmin');
Route::post('/admin','AdminController@postadmin');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');

//loaisanpham
Route::post('/them_loaisanpham', 'LoaiSanPhamController@them_loaisanpham');
Route::get('/them_loaisanpham','LoaiSanPhamController@them_loaisanpham');
Route::get('/loaisanpham','LoaiSanPhamController@show_loaisanpham'); 
Route::get('/sua_loaisanpham/{id}','LoaiSanPhamController@getSua');
Route::post('/sua_loaisanpham/{id}','LoaiSanPhamController@postSua');
Route::get('loaisanpham/xoa_loaisanpham/{id}','LoaiSanPhamController@xoa_loaisanpham');
Route::get('/hienthi_loaisanpham/{id}','LoaiSanPhamController@hienthi_loaisanpham');

//Sanpham
Route::post('/them_sanpham', 'SanPhamController@them_sanpham');
Route::get('/them_sanpham','SanPhamController@them_sanpham');
Route::get('/sanpham','SanPhamController@show_sanpham');
Route::get('/sua_sanpham/{id}','SanPhamController@getSua');
Route::post('/sua_sanpham/{id}','SanPhamController@postSua');
Route::get('sanpham/xoa_sanpham/{id}','SanPhamController@xoa_sanpham');
Route::get('/hienthi_sanpham/{id}','SanPhamController@hienthi_sanpham');

//khachhang
Route::post('/them_khachhang', 'KhachHangController@them_khachhang');
Route::get('/them_khachhang','KhachHangController@them_khachhang');
Route::get('/khachhang','KhachHangController@show_khachhang');
Route::get('/sua_khachhang/{id}','KhachHangController@getSua');
Route::post('/sua_khachhang/{id}','KhachHangController@postSua');
Route::get('khachhang/xoa_khachhang/{id}','KhachHangController@xoa_khachhang');
Route::get('/hienthi_khachhang/{id}','KhachHangController@hienthi_khachhang');

//hoadonban
Route::post('/them_hoadonban', 'HoaDonBanController@them_hoadonban');
Route::get('/them_hoadonban','HoaDonBanController@them_hoadonban');
Route::get('/hoadonban','HoaDonBanController@show_hoadonban');
Route::get('/sua_hoadonban/{id}','HoaDonBanController@getSua');
Route::post('/sua_hoadonban/{id}','HoaDonBanController@postSua');
Route::get('hoadonban/xoa_hoadonban/{id}','HoaDonBanController@xoa_hoadonban');
Route::get('/hienthi_hoadonban/{id}','HoaDonBanController@hienthi_hoadonban');
Route::get('/hienthi_chitiethdb/{id}','CThoadonbanController@hienthi_chitiethdb');

//chitiet hdb
Route::get('/them_chitiethdb','CThoadonbanController@them_chitiethdb');
Route::get('/chitiethdb','CThoadonbanController@show_chitiethdb');
Route::get('/chitiethdb/xoa_cthoadonban/{id}','CThoadonbanController@xoa_cthoadonban');

//users
Route::post('/them_users', 'UsersController@them_users');
Route::get('/them_users','UsersController@them_users');
Route::get('/users','UsersController@show_users');
Route::get('/sua_users/{id}','UsersController@getSua');
Route::post('/sua_users/{id}','UsersController@postSua');
Route::get('users/xoa_users/{id}','UsersController@xoa_users');
Route::get('/hienthi_users/{id}','UsersController@hienthi_users');


