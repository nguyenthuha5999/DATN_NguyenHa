@extends('layout_home')
@section('content')
<div class="best_product padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="journey-heading">
                <h4><span>Kết quả tìm kiếm: {{count($timkiem)}} sản phẩm</span></h4>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 padT30">
                <div class="row">
                    <div id="MixItUp1">
                        @foreach($timkiem as $sp)
                        <div class="col-md-3 col-sm-6 col-xs-12 marB30 mix cat1">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection