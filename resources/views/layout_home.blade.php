<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 DESIDEALS4U
        ********************************************************************************************************** 
        -->
    
<!-- Mirrored from preview.desideals4u.com/new-journey-casual/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 02:26:57 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Journey Casual - Multipourpose Fashion HTML Template" />
        <meta name="author" content="desideals4u.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
        <title>MOMO - Website thời trang quần áo nữ</title>
        <!-- Bootstrap -->
        <!-- Master Css -->
        <link rel="shortcut icon" href="/frontend/images/logomomo.png" type="image/x-icon">
        <link rel="icon" href="/frontend/images/logomomo.png" type="image/x-icon">
        <link href="/frontend/css/style.css" rel="stylesheet">
        <link href="/frontend/css/color.css" rel="stylesheet">
        <link href="/frontend/css/responsive.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--//================Header section start==============//-->
        <header>
            <div class="main-hrader">
                <div class="container">
                    <div class="row">
                        <div class="top-bar padTB20">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="top-bar-register padTB10">
                                    @if(Auth::check())
                                    <b><h6>Chào bạn {{Auth::user()->Hoten}}</a><span></b>
                                    </span><h6><a href="{{url('dangxuat')}}">Đăng xuất</a></h6>
                                    @else
                                    <h6><a href="{{url('dangnhap')}}">Đăng nhập</a><span>
                                    </span><a href="{{url('dangky')}}">Đăng ký</a></h6>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <figure class="logo">
                                    <a href="{{ url('/') }}"><img src="/frontend/images/logomomo.png" style="width:120px; border-radius:100px;" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="usd">
                                    <select name="usd">
                                        <option value="USD">VNĐ</option>
                                        <option value="INR">INR</option>
                                        <option value="CAD">CAD</option>
                                        <option value="USD">USD</option>
                                        <option value="AUD">AUD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="JPY">JPY</option>
                                    </select>
                                    <select name="language">
                                        <option value="eng">Việt Nam</option>
                                        <option value="french">English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <div id="main-menu" class="wa-main-menu">
                    <!-- Menu -->
                    <div class="wathemes-menu relative">
                        <!-- navbar -->
                        <div class="navbar navbar-default theme-bg mar0" role="navigation">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class="row">
                                            <div class="navbar-header">
                                                <!-- Button For Responsive toggle -->
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span> 
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span>
                                                </button> 
                                            </div>
                                            <!-- Navbar Collapse -->
                                            <div class="navbar-collapse collapse">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!-- nav -->
                                                    <ul class="nav navbar-nav">
                                                        <li>
                                                        <a href="{{ url('/') }}" class="header-menu-one">Trang chủ</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="header-menu-one">Danh mục<i class="fa fa-caret-down marL5" aria-hidden="true"></i></a>
                                                            <ul class="dropdown-menu">
                                                                @foreach ($list as $item)             
                                                            <li><a href="{{ url("danh-sach/$item->id") }}" class="header-menu-one">{{ $item->Tenloai }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    <li><a href="{{url('gioithieu')}}" class="header-menu-one">Giới thiệu</a></li>
                                                    <li><a href="{{url('lienhe')}}" class="header-menu-one">Liên hệ</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- navbar-collapse -->
                                    </div>
                                    <!-- col-md-10 -->
                                    <div class="col-md-2 col-sm-2 col-xs-6 shopping-cart-section">
                                        <div class="shopping-cart-icon">
                                            <ul>
                                                <li><a href="#" class="search-click"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                <li><a href="{{url('giohang')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                                <li>(@if(Session::has('cart'))
                                                    {{ Session('cart')->totalQty }}
                                                    @else Trống                             
                                                    @endif)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- container -->
                        </div>
                        <!--navbar -->
                        <div id="search-open" class="top-search">
                            <div class="container-fluid">
                                <div class="row">
                                <form role="timkiem" method="get" action="{{url('timkiem')}}">
                                    <div class="input-group" > <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" name="key" class="form-control" placeholder="Tìm kiếm">
                                        <a class="input-group-addon close-search search-close"><i class="fa fa-times"></i></a>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Menu -->
                </div>
            </div>
        <!--//================Header section end==============//-->
        <!--//================Slider section start==============//-->
        @yield('content')
        <!--//================Scroll section end==============//-->
        <!--//================Footer section start==============//-->
        <div class="footer-section footer_fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="footer-box-one footer-first-box">
                                        <h5>Giới thiệu</h5>
                                        <p><span class="faraway">NTH SHOP</span> Website uy tín hàng đầu Việt Nam .</p>
                                        <p><span class="working-time">ngày làm việc : Tất cả các ngày trong tuần</span></p>
                                        <p class="marB0"><span class="working-time">giờ đóng cửa : 23:30 hàng ngày</span></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="footer-box-two footer-first-box footer-res">
                                        <h5>THÔNG TIN</h5>
                                        <ul class="footer-services">
                                            <li>NTH SHOP </li><br />
                                            <li>là thương hiệu được thành lập từ T9 - 2015</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="footer-box-two footer-res">
                                        <h5>địa chỉ</h5>
                                        <ul class="footer-services">
                                            <li><a href="#">Ngã tư phố nối,</a></li>
                                            <li><a href="#">Mỹ hào,</a></li>
                                            <li><a href="#">Hưng yên .</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="footer-box-two footer-res">
                                        <h5>liên hệ</h5>
                                        <ul class="footer-services">
                                            <li><a href="#">Liên hệ đặt hàng: 0399998386</a></li>
                                            <li><a href="#">Liên hệ tại cửa hàng: 0388283286</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-7 col-xs-12">
                                    <div class="footer-box-right footer-box-two">
                                        <h5>bản tin</h5>
                                        <p>Đăng ký danh sách gửi thư của chúng tôi để nhận được các bản cập nhật và ưu đãi mới nhất.</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter your email address" aria-describedby="basic-addon2">
                                            <span class="input-group-addon" id="basic-addon2"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                        </div>
                                        <ul class="footer-social-icon">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="footer-gallery">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div id="footer_slider" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-1.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-2.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-3.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-4.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-5.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-6.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-7.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-8.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-9.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="/frontend/images/footer/footer-slider-10.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-text">
                            <p><a href="#">@ NTH SHOP on instagram</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-last-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-8 col-xs-12">
                            <div class="footer-last-text">
                                <ul class="footer-menu">
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">help & FAQs </a></li>
                                    <li><a href="#">privacy policy</a></li>
                                </ul>
                                <p>&copy; 2015 NTH SHOP. Theme by Desideals4u. Website Template by HTML</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-4 col-xs-12">
                            <div class="footer-last-right">
                                <figure>
                                    <img src="/frontend/images/footer/payment-icons.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//================Footer section end==============//-->
        <!--//================Js file start==============//-->
        <script src="/frontend/js/jquery.min.js"></script>
        <script src="/frontend/js/bootstrap.min.js"></script>
        <script src="/frontend/plugin/owl-carousel/js/owl.carousel.min.js"></script>
        <script src="/frontend/plugin/megamenu/js/hover-dropdown-menu.js"></script>
        <script src="/frontend/plugin/megamenu/js/jquery.hover-dropdown-menu-addon.js"></script>
        <script src="/frontend/plugin/jquery-ui/js/jquery-ui.js"></script>
        <script src="/frontend/plugin/mixitup/js/jquery.mixitup.js"></script>
        <script src="/frontend/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>
        <script src="/frontend/plugin/fancyBox/js/jquery.fancybox-media.js"></script>
        <script src="/frontend/plugin/jquery-bxslider/js/jquery.bxslider.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB9P8720RmV-t4df_U1TxC-JJ_FKVcc6I"></script>
        <script src="/frontend/js/main.js"></script>
        <!--//================Js file end==============//-->
    </body>

<!-- Mirrored from preview.desideals4u.com/new-journey-casual/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 02:29:27 GMT -->
</html>