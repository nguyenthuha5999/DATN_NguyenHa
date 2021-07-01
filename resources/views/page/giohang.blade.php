@extends('layout_home')
@section('content')
<section>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <div class="page-header-heading padB10">
                            <h3>Giỏ hàng của bạn (
                                @if(Session::has('cart'))
                                {{ Session('cart')->totalQty }}
                                @else Trống                                 
                                @endif)</h3>
                        </div>
                        <div class="breadcrum-box">
                            <ul class="breadcrum">
                                <li><a href="index-2.html">Trang chủ</a></li>
                                <li class="active"><a href="#">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Breadcrumb section end==============//-->
<!--//================Cart section start==============//-->
<div class="cart-section padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="exTab2">
                    <ul class="nav nav-tabs cart-menu-tab">
                        <li class="active"><a  href="#1" data-toggle="tab">01. giỏ hàng</a></li>
                    </ul>
                    <div class="tab-content cart-tab">
                        <div class="tab-pane active padT20" id="1">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-table bg-color hidden-xs">
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="product-table-heading">
                                                <h4>sản phẩm</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="product-table-heading">
                                                <h4>giá tiền</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="product-table-heading">
                                                <h4>số lượng</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="product-table-heading">
                                                <h4>Xóa</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-heading-title-bottom">
                                        <div class="col-md-12 col-sm-12 col-xs-12">   
                                            <div class="row">
                                                @if(Session::has('cart'))
                                                @foreach($cart->items as $key=>$item)
                                                <div class="product-heading-title padTB15">
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-5 col-xs-12">
                                                                <figure>
                                                                <img src="/frontend/images/{{$item['item']['Hinhanh']}}" alt="">
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <p>{{$item['item']['Tensp']}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                                        <p class="product-color">{{number_format($item['item']['Giatien'])}} VNĐ</p>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                                        <div class="quantity">
                                                            <ul>
                                                                <li><button   class="minus"><i class="fa        fa-minus"  aria-hidden="true"></i></button></li>
                                                                <li><input  type="text" value="{{$item['qty']}}" class="qty"/></li>
                                                                <li><button   class="add"><i class="fa fa-plus"  aria-hidden="true"></i></button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                                        <div class="time-cross summary-sm">
                                                        <a href="{{route('xoagiohang', $item['item']['id'])}}" ><i class="fa fa-times" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div> 
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12 "></div>
                                                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                                                    <div class="cart-total bg-color marT30">
                                                        <h4>Tổng giỏ hàng</h4>
                                                        <div class="cart-inner">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 marB10">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                                                            <p>Tổng số lượng sản phẩm:</p>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                                                            <strong>@if(Session::has('cart'))
                                                                                {{ Session('cart')->totalQty }}
                                                                                @else 0                                 
                                                                                @endif</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 marB10">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                                                            <p class="total"><strong>Tổng Tiền:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                                                            <strong class="price">@if(Session::has('cart'))
                                                                                {{ number_format(Session('cart')->totalPrice) }} VNĐ
                                                                                @else 0                             
                                                                                @endif</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <a href="{{route('dathang')}}" class="template-button">thanh toán</a>
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
    </div>
</div>
<!--//================Cart section end==============//-->
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