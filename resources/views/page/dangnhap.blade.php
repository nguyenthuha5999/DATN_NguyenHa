@extends('layout_home')
@section('content')
        <section>
            <div class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="page-heading">
                                <div class="page-header-heading padB10">
                                    <h3>đăng nhập</h3>
                                </div>
                                <div class="breadcrum-box">
                                    <ul class="breadcrum">
                                        <li><a href="index-2.html">trang chủ</a></li>
                                        <li class="active"><a href="#">đăng nhập</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="account-box padTB60">
            <form action="{{route('dangnhap')}}" method="post" class="login-form">
            @csrf
            <div class="container">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                @endif
                  
                @if(session('thongbao'))
                <div class=" alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="loginForm log-in-xs"> 
                            <div class="login-box" id="loginbox">
                                <h4>Đăng nhập</h4>
                                    <label>email</label>
                                    <input type="email" name="email" required placeholder="Nhập email">
                                    <label>password</label>
                                    <input type="password" name="password" required placeholder="Nhập Password"> 
                                <button type="submit" class="template-button"><i class="fa fa-lock marR10" aria-hidden="true"></i>Đăng nhập</button>
                            </div>
                            <div class="forget-password" style="display:none;" id="forget">
                                <h4>Lấy Lại tài khoản</h4>               
                                <form class="login-form">
                                    <label>Email</label>
                                    <input type="text" placeholder="Nhập email">
                                </form>
                                <p><a class="template-button">Gửi</a></p>
                                <p class="backto"><a class="template-button"><i class="fa fa-long-arrow-left marR10" aria-hidden="true"></i>Quay lại trang đăng nhập</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="loginForm">
                            <div class="create-account">
                                <h4>Đăng Ký</h4>
                                <p>Bằng cách tạo một tài khoản trên trang web của chúng tôi, bạn sẽ có thể mua sắm nhanh hơn, cập nhật trạng thái đơn hàng và theo dõi các đơn hàng bạn đã thực hiện trước đó.</p>
                            <a href="{{url('dangky')}}" class="template-button"><i class="fa fa-user marR10" aria-hidden="true"></i>Đăng ký ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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