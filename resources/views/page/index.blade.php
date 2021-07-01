@extends('layout_home')
@section('content')
<div class="slider-section">
    <div id="slider_one" class="owl-carousel owl-theme">
        <div class="item">
            <div class="slider-box">
                <figure>
                    <img src="/frontend/images/slider/slider-two.jpg" alt="">
                </figure>
                <div class="slider-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slider-content item-2">
                                        <h4>Bộ sưu tập</h4>
                                        <h2>MOMO THỜI TRANG NỮ</h2>
                                        <a href="{{url('/')}}" class="template-button">Mua sắm ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-box">
                <figure>
                    <img src="/frontend/images/slider/slider-three.jpg" alt="">
                </figure>
                <div class="slider-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content item-2">
                                    <h4>Bộ sưu tập</h4>
                                    <h1>NTH SHOP</h1>
                                <a href="{{url('/')}}" class="template-button">Mua sắm ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Slider section end==============//-->
<!--//================Mega collection section start==============//-->
<div class="mega-collection-section padTB60">
    <div class="container">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="mega-collection zoom-effect">
                    <figure>
                        <img src="/frontend/images/all-image/brand-two.jpg" alt="">
                        <figcaption class="mega-collection-box">
                            <h2>SIÊU GIẢM GIÁ</h2>
                            <h5>BỘ SƯU TẬP</h5>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="brand-deatil zoom-effect brand-xs">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <figure>
                                        <img src="/frontend/images/all-image/brand-one.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="brand-collection">
                                        <h4>QUẦN ÁO THƯƠNG HIỆU</h4>
                                        <h5>BỘ SƯU TẬP</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="brand-deatil trend-fashion zoom-effect">
                            <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
                                <div class="row">
                                    <figure>
                                        <img src="/frontend/images/all-image/brand-three.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="brand-collection fashion-box pull-left">
                                        <h4>XU HƯỚNG THỜI TRANG</h4>
                                        <h5>BỘ SƯU TẬP</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Mega collection section end==============//-->
<!--//================New arrival section start==============//-->
<div class="new-arrival-section padB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="journey-heading">
                    <h4><span>Sản Phẩm Khuyễn Mãi</span></h4>
                </div>
            </div>
            <div class="col-md-12">
                <div class="slider-two">
                    <div class="row">
                        <div id="new_arrival" class="owl-carousel owl-theme">
                            @foreach($sanpham_km as $sp)
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="arrival-image">
                                        <div class="arrival-image-overlay">
                                            <figure>
                                                <span class="overlay-two"></span>
                                            <img src="/frontend/images/{{$sp->Hinhanh}}" alt="">
                                                <figcaption>
                                                    <p><span class="new-sale">Sale</span></p>
                                                    <ul class="cart-icon">
                                                    <li><a href="{{url('chitietsp', $sp->id)}}" ><span class="add-to-wish">Xem Chi Tiết</span><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    <li><a href="{{url('themgiohang/'. $sp->id)}}"><span class="add-to-wish">Thêm vào giỏ</span><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="arrival-image-content">
                                        <h4><a href="{{url('chitietsp', $sp->id)}}">{{$sp->Tensp}}</a></h4>
                                            <ul class="cloth-rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                            </ul>
                                        <span><strike>{{number_format($sp->Giatien)}}</strike></span>
                                        <span style="color: #1bbc9b">{{number_format($sp->Giakhuyenmai)}} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================New arrival section end==============//-->
<!--//================Best product section start==============//-->
<div class="best_product padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="journey-heading">
                    <h4><span>sản phẩm mới nhất</span></h4>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 padT30">
                <div class="row">
                    <div id="MixItUp1">
                        @foreach($sanpham_moi as $sp)
                        <div class="col-md-3 col-sm-6 col-xs-12 marB30 mix cat1">
                            <div class="arrival-image">
                                <div class="arrival-image-overlay">
                                    <figure>
                                        <span class="overlay-two"></span>
                                    <img src="/frontend/images/{{$sp->Hinhanh}}" alt="">
                                        <figcaption>
                                            <p><span class="new-sale">mới</span></p>
                                            <ul class="cart-icon">
                                                <li><a href="{{url('chitietsp', $sp->id)}}" ><span class="add-to-wish">Xem Chi Tiết</span><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="{{url('themgiohang/'. $sp->id)}}"><span class="add-to-wish">Thêm vào giỏ</span><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="arrival-image-content">
                                <h4><a href="{{url('chitietsp', $sp->id)}}">{{$sp->Tensp}}</a></h4>
                                    <ul class="cloth-rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <span style="color: #1bbc9b">{{number_format($sp->Giatien)}} VNĐ</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Best product section end==============//-->
<!--//================Banner-two section start==============//-->
<div class="banner-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 banner-height">
                <div class="row">
                    <figure class="banner-first-part">
                        <img src="/frontend/images/banner/banner2.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 banner-height">
                <div class="row">
                    <div class="banner-middle-part">
                        <h4>collection</h4>
                        <h1>flat 40-80%off</h1>
                        <a href="{{url('/')}}" class="shop-now">Mua Sắm Ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 banner-height">
                <div class="row">
                    <figure class="banner-first-part">
                        <img src="/frontend/images/banner/banner3.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Banner-two section end==============//-->
<!--//================Service section start==============//-->
<div class="service-section padTB60">
    <div class="container">
        <div class="row">
            <div class="service-section-content">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="free-shipping free-shipping-res">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <figure>
                                <img src="/frontend/images/all-image/shipping-1.jpg" alt="" >
                            </figure>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4><a href="#">miễn phí vận chuyển</a></h4>
                            <p>đơn hàng trên 999.000VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="free-shipping free-shipping-res">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <figure>
                                <img src="/frontend/images/all-image/shipping-2.jpg" alt="" >
                            </figure>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4><a href="#">Phục vụ</a></h4>
                            <p>khách hàng là thượng đế</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="free-shipping">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <figure>
                                <img src="/frontend/images/all-image/shipping-3.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4><a href="#">Quà tặng thưởng</a></h4>
                            <p>quay thưởng tại cửa hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Slider-two section end==============//-->
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