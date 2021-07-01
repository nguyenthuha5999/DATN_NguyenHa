<?php
namespace App\Http\Controllers;
use DB;
use App\Sanpham;
use App\Khachhang;
use App\Hoadonban;
use App\Chitiethdb;
use App\Cart;
use Session;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Trang chủ
    public function index(){
        $sanpham_km = Sanpham::where('Spmoi',1)->get(); //tạo một biến, gọi đến bảng sản phẩm, where đến dữ liệu 1,trỏ đến get gọi tất cả sản phẩm khuyến mãi
        $sanpham_moi = Sanpham::where('Spmoi',2)->get(); //
        return view('page.index', compact('sanpham_km','sanpham_moi')); //hiển thị
    }
    //Danh sách sản phẩm
    public function getList($id){
        $list = DB::table('loaisanpham')->where('id',$id)->first();
        $list1 = DB::table('loaisanpham')->get();   
        $list2 = Sanpham::where('id_maLoai', 17)->get(); 
        $list3 = Sanpham::where('id_maLoai', $id)->paginate(9);
        return view('page.danh-sach', compact('list', 'list1', 'list2', 'list3'));
    }
    //Chi tiết sản phẩm
    public function chitietsp($id){
        $chitiet = Sanpham::where('id',$id)->first();
        $splienquan = Sanpham::where('id_maLoai',$chitiet->id_maLoai)->paginate(10);
        return view('page.chi-tiet-sp', compact('chitiet','splienquan'));
    }
    //Đăng nhập
    public function getdangnhap(){
        return view('page.dangnhap');
    }

    public function postdangnhap(Request $req){
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
            if(Auth::attempt(['email'=>$req->email,'password'=> $req->password])){
                return redirect('/');
            }
            else{
                return redirect('dangnhap')->with(['thongbao'=>'Đăng nhập không thành công !']);
            }
    }
     //đăng xuất 
    public function dangxuat(){
        Auth::logout();
        return redirect('/');
    }
    //Đăng ký
    public function getdangky(){
        return view('page.dangky');
    }

    public function postdangky(Request $req){
        $req->validate(
            [
                'fullname'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:6|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'email này đã tồn tại',
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>'Mật khẩu không trùng nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        DB::table('users')->insert([
            'Hoten' => $req->fullname,
            'Email' => $req->email,
            'Password' => bcrypt($req->password),
            'Chucvu' => 'Khách Hàng',
        ]);
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công !');
    }
    //Giỏ hàng
    public function giohang(){
        $cart = Session::get('cart');
        return view('page.giohang')->with('cart', $cart);
    }

    public function themgiohang(Request $req,$id){
        $product = Sanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();

    }

    public function xoagiohang($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->back();

    }

    public function thanhtoan(){
        return view('page.dathang');
    }

    public function dathang(Request $req){
        $cart = Session::get('cart');

        $khachhang = new Khachhang;
        $khachhang->Hoten = $req->hoten;
        $khachhang->Gioitinh = $req->gioitinh;
        $khachhang->Email = $req->email;
        $khachhang->SDT = $req->sdt;
        $khachhang->Diachi = $req->diachi;
        $khachhang->Ghichu = $req->ghichu;
        $khachhang->save();

        $hdb = new Hoadonban;
        $hdb->Ngayban = date('Y-m-d');
        $hdb->id_maKH = $khachhang->id;
        $hdb->Tongtien = $cart->totalPrice;
        $hdb->Trangthai = $req->thanhtoan;
        $hdb->Ghichu = $req->ghichu;
        $hdb->save();

        foreach($cart->items as $key => $value){
        $cthdb = new Chitiethdb;
        $cthdb->Soluongban = $value['qty'];
        $cthdb->Giaban = $value['price']/$value['qty'];
        $cthdb->id_maHDB = $hdb->id;
        $cthdb->id_maSP = $key;
        $cthdb->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }
    
    //Tìm kiếm
    public function timkiem(Request $req){
        $timkiem = sanpham::where('Tensp','like','%'.$req->key.'%')
        ->orwhere('Giatien',$req->key)
        ->get();
        return view('page.timkiem', compact('timkiem'));
    }

    public function lienhe(){
        return view('page.lienhe');
    }

    public function gioithieu(){
        return view('page.gioithieu');
    }
}



