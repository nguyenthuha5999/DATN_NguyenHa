@extends('layout_home')
@section('content')
<section>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <div class="page-header-heading padB10">
                            <h3>Giới Thiệu</h3>
                        </div>
                        <div class="breadcrum-box">
                            <ul class="breadcrum">
                                <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li class="active"><a href="{{url('gioithieu')}}">Giới thiệu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Breadcrumb section end==============//-->
<!--//================About us section start==============//-->
<div class="aboutus-section padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box-one">
                    <h2>'Cảm Ơn'<span> quý khách hàng đã ghé qua</span> <span class="best-deal">nth <span class="casual-color"> shop</span></span><span> </span> </h2>
                    <p><span>Thương hiệu NTH SHOP được thành lập vào Tháng 9 - 2015</span></p>
                    <h3>upto 60% off <span>on all product</span></h3>
                    <h4>We are the best designing company since 2015.</h4>
                    <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla interdum fringilla erat a finibus. Curabitur ac erat condimentum. Praesent ultricies, nisl at mollis commodo
                    </p>
                <div class="learn-button"><a href="{{url('/')}}" class="template-button">Mua hàng</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//================About us end==============//-->
<!--//================About section two start==============//-->
<div class="about-us-two padB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="journey-heading">
                    <h4><span>GIỚI THIỆU VÀ CHI TIẾT</span></h4>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 padT30">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="about-detail">
                            <h1>about</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley<span class="hidden-sm hidden-xs"> of type and scrambled it to make a type specimen book. It has survived not only five centuries.</span></p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>
                            <p><span class="about_read"><a href="#">read more</a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="about-detail details-about">
                            <h1>details</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters<span class="hidden-sm hidden-xs">, as opposed to using 'Content here, content here', making it look like readable English.</span></p>
                            <p>When it comes to your future, there’s one thing you’re sure about: your passion for technology. That’s what makes you a great candidate sometimes on purpose.</p>
                            <p><span class="about_read"><a href="#">read more</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection