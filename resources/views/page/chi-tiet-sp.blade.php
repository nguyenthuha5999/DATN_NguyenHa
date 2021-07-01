@extends('layout_home')
@section('content')
<section>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <div class="page-header-heading padB10">
                        <h3>Chi tiết sản phẩm: {{$chitiet->Tensp}}</h3>
                        </div>
                        <div class="breadcrum-box">
                            <ul class="breadcrum">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                                <li class="active"><a href="#">chi tiết sản phẩm</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Breadcrumb section end==============//-->
<!--//================Product section start==============//-->
<div class="product-page padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="col-md-10 col-sm-10 col-xs-12 pull-right">
                    <figure class="product-page-image">
                    <img src="/frontend/images/{{$chitiet->Hinhanh}}" alt="">
                    </figure>
                </div>

            </div>
            <div class="col-md-6 col-sm-12 col-xs-12"> 
                <div class="product-page-heading">
                <h4>{{$chitiet->Tensp}}</h4>
                <h3>{{number_format($chitiet->Giatien)}} VNĐ</h3>
                    <div class="product-rating">
                        <ul>
                            <li>     
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </li>
                            <li>đánh giá của cửa hàng</li>
                        </ul>
                    </div>
                <p class="marT10">{{$chitiet->Mota}}</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span>Màu Sắc: {{$chitiet->Mausac}}</span>    
                </div>
                <div style="margin: -19px;" class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="select-size">
                        <span>Kích Thước & Chất Liệu</span>
                            <select>
                            <option value="0">{{$chitiet->KthuocClieu}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div style="margin:15px;" class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="incress-button">
                            <ul>
                                <li><button class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button></li>
                                <li><input type="text" value="01" class="qty"></li>
                                <li><button class="add"><i class="fa fa-plus" aria-hidden="true"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="add-to-cart">
                            <a href="{{url('themgiohang/'. $chitiet->id)}}" class="template-button"><i class="fa fa-shopping-bag marR10" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Product section end==============//-->
<!--//================Product discription start==============//-->
<div class="product-discription">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="exTab2">
                    <ul class="nav nav-tabs product-description-one">
                        <li><a href="#3" data-toggle="tab">Mô Tả</a></li>
                        <li><a href="#4" data-toggle="tab">Bình Luận</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane pad20" id="3">
                        <p>{{$chitiet->Mota}}</p>
                        </div>
                        <div class="tab-pane pad20" id="4">
                            <div class="row">
                                <div class="review-box">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="comment-box clearfix marB30">
                                            <div class="review-box-image">
                                                <figure class="review_image">
                                                <img src="frontend/images/{{$chitiet->Hinhanh}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="review-pragraph">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="all-heading  review-pra-content">
                                                            <h4>hasib sharif <span>9 nov 2017</span></h4>
                                                            <div class="hidden-sm hidden-xs">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and etting industry orem Ipsum has been the industry's standard my text ever since they 1500s. the printing and etting industry orem Ipsum has been the industry's standard my text ever since they 1500s. It has survived not only five centuries, </p>
                                                            </div>
                                                            <div class="hidden-lg hidden-md">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and etting industry</p>
                                                            </div>
                                                            <p><a href="#">reply....</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-box clearfix marB30">
                                            <div class="review-box-image">
                                                <figure class="review_image">
                                                    <img src="frontend/images/best-product/review-3.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="review-pragraph">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="all-heading  review-pra-content">
                                                            <h4>hasib sharif <span>9 nov 2017</span></h4>
                                                            <div class="hidden-sm hidden-xs">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and etting industry orem Ipsum has been the industry's standard my text ever since they 1500s. the printing and etting industry orem Ipsum has been the industry's standard my text ever since they 1500s. It has survived not only five centuries, </p>
                                                            </div>
                                                            <div class="hidden-lg hidden-md">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and etting industry</p>
                                                            </div>
                                                            <p><a href="#">reply....</a></p>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Product discription end==============//-->
<!--//================Related product start==============//-->
<div class="new-arrival-section padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="journey-heading">
                    <h4><span>SẢN PHẨM LIÊN QUAN</span></h4>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="slider-two">
                        <div id="new_arrival" class="owl-carousel owl-theme">
                            @foreach($splienquan as $sp)
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="arrival-image">
                                        <div class="arrival-image-overlay">
                                            <figure>
                                                <span class="overlay-two"></span>
                                            <img src="/frontend/images/{{$sp->Hinhanh}}" alt="">
                                                <figcaption>
                                                    <ul class="cart-icon">
                                                        <li><a href="#"><span class="add-to-wish">quick view</span><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                        <li><a href="{{url('themgiohang/'. $chitiet->id)}}"><span class="add-to-wish">Thêm vào giỏ</span><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
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
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================Related product end==============//-->
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