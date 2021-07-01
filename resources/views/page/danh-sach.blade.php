@extends('layout_home')
@section('content')
<section>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <div class="page-header-heading padB10">
                            <h3>Sản phẩm</h3>
                        </div>
                        <div class="breadcrum-box">
                            <ul class="breadcrum">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li class="active">Danh Mục / {{$list->Tenloai}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Breadcrumb section end==============//-->
<!--//================Collection Product section start==============//-->
<div class="product-collection-section padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="categories-section">
                    <h4>Danh mục</h4>
                    <ul class="widget-content">
                        @foreach($list1 as $sp)
                        <li><a href="{{$sp->id}}">{{$sp->Tenloai}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="featured-product">
                    <h5>bạn có quan tâm sản phẩm này ?</h5>
                    <div id="sidebar_collection" class="owl-carousel owl-theme">
                        @foreach($list2 as $sp)
                        <div class="item">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="arrival-image">
                                        <div class="arrival-image-overlay">
                                            <figure>
                                                <span class="overlay-two"></span>
                                            <img src="/frontend/images/{{$sp->Hinhanh}}" alt="">
                                                <figcaption>
                                                    <ul class="cart-icon">
                                                        <li><a href="{{url('chitietsp', $sp->id)}}" ><span class="add-to-wish">Xem Chi Tiết</span><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                        <li><a href="{{url('themgiohang/'. $sp->id)}}"><span class="add-to-wish">Thêm vào giỏ</span><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="arrival-image-content">
                                        <h4><a href="#">{{$sp->Tensp}}</a></h4>
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
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="list-item">
                            <h4>VVT SHOP</h4>
                            <p>Website bán quần áo uy tín hàng đầu Việt Nam .</p>
                        </div>
                    </div>
                </div>
                <div class="per-page-pdoduct">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="list-item-product list-item-box list-item-small">
                                <a class="product_grid"><i class="fa fa-th" aria-hidden="true"></i></a>
                                <a class="product_list"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="list-product list-item-product list-item-box list-item-select">
                                <p>số trang</p>
                                <select name="number-of-page">
                                <option value="">{{$list3->links()}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best_product" id="collection_box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                @foreach($list3 as $sp)
                                <div class="col-md-4 col-sm-6 col-xs-12 marB30">
                                    <div class="arrival-image">
                                        <div class="arrival-image-overlay">
                                            <figure>
                                                <span class="overlay-two"></span>
                                            <img src="/frontend/images/{{$sp->Hinhanh}}" alt="">
                                                <figcaption>
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
                            <div class="row">{{$list3->links()}}</div>
                        </div>
                    </div>
                </div>
                <div class="best-product-deatil" style="display:none;" id="collection_sidebar_list">
                    @foreach($list3 as $sp)
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="arrival-image">
                                        <div class="arrival-image-overlay">
                                            <figure>
                                                <span class="overlay-two"></span>
                                            <img src="/frontend/images/{{$sp->Hinhanh}}" alt="">
                                                <figcaption>
                                                    <ul class="cart-icon">
                                                        <li><a href="{{url('chitietsp', $sp->id)}}" ><span class="add-to-wish">Xem Chi Tiết</span><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                        <li><a href="{{url('themgiohang/'. $sp->id)}}"><span class="add-to-wish">Thêm vào giỏ</span><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs12">
                                    <div class="short-description">
                                    <h4><a href="{{url('chitietsp', $sp->id)}}">{{$sp->Tensp}}</a></h4>
                                    <p>{{$sp->Mota}}</span></p>
                                        <ul class="cloth-rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                        </ul>
                                        <p style="color: #1bbc9b">{{number_format($sp->Giatien)}} VNĐ</p>
                                        <a href="{{url('chitietsp', $sp->id)}}" class="template-button">Xem chi tiết</a>
                                    </div>
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