@extends('layout_home')
@section('content')
<section>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <div class="page-header-heading padB10">
                            <h3>Liên Hệ</h3>
                        </div>
                        <div class="breadcrum-box">
                            <ul class="breadcrum">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                                <li class="active"><a href="{{url('lienhe')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Breadcrumb section end==============//-->
<!--//================Contact section start==============//-->
<div class="contact-section padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 padB60">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-location-box contact-location-xs">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>ĐỊA ĐIỂM CỦA CHÚNG TÔI</h4>
                            <p>CS1: Ngã 4 phố nối - Mỹ Hào - Hưng Yên</p>
                            <p>CS2: Tràng Tiền - Quận Hoàn Kiếm - Hà Nội</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-location-box contact-location-xs">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>liên hệ của chúng tôi</h4>
                            <p>Liên Hệ Đặt Hàng: 0399998386</p>
                            <p>Liên Hệ Tại Cửa Hàng: 0388283286</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-location-box">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h4>Email của chúng tôi</h4>
                            <p>NTHSHOP@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="location-map">
                    <h4>ĐỊA ĐIỂM CỦA CHÚNG TÔI</h4>
                    <div id="gmap_canvas" class="marT30"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="message-section contact-message">
                    <h4>THÔNG TIN CHO CHÚNG TÔI</h4>
                    <div class="col-md-12 col-sm-12 col-xs-12 marT30">
                        <div class="row">
                            <p>
                                <label>Họ Tên</label>
                                <input type="text" placeholder="Nhập họ tên">
                            </p>
                            <p>
                                <label>Email</label>
                                <input type="text" placeholder="Nhập email">
                            </p>
                            <p>
                                <label>Số Điện Thoại</label>
                                <input type="text" placeholder="Nhập sđt">
                            </p>
                            <p>
                                <label>Nội dung</label>
                                <textarea cols="10" rows="5" placeholder="Nhập nội dung"></textarea>
                            </p>
                            <a href="#" class="template-button">Nhập Nội dung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Contact section end==============//-->
<!--//================Scroll section start==============//-->
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