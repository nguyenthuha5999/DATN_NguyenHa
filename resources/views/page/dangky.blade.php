@extends('layout_home')
@section('content')
<section>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading padTB100">
                        <div class="page-header-heading padB10">
                            <h3>VVT SHOP</h3>
                        </div>
                        <div class="breadcrum-box">
                            <ul class="breadcrum">
                                <li><a href="index-2.html">Trang chủ</a></li>
                                <li class="active"><a href="#">đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="account-box padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                @if(Session::has('thanhcong'))
                <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                <div class="registerBox">
                    <h4>Tạo tài khoản</h4>
                <form class="register-form" action="{{ url('dangky') }}" method="post">
                    @csrf
                        <h4>THÔNG TIN CÁ NHÂN CỦA BẠN</h4>
                        <label>Họ Tên</label>
                        <input type="text" name="fullname" placeholder="Nhập họ tên" required>
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Nhập email" required>
                        <label>password</label>
                        <input type="password" name="password" placeholder="Nhập password" required>
                        <label>Nhập lại password</label>
                        <input type="password" name="re_password" placeholder="Nhập password" required>
                        <button type="submit" class="template-button">tạo tài khoản</button>
                </form>
                    <p><a href="{{url('dangnhap')}}"><i class="fa fa-long-arrow-left marR10" aria-hidden="true"></i>quay lại trang đăng nhập</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="scroll-top">
            <div id="stop" class="scrollTop">
                <span><a href="#"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></span>
            </div>
        </div>
    </div>
</div>

@endsection