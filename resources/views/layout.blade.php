<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{asset('css/plugins/slicknav.min.css')}}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{asset('css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{asset('css/plugins/owl.carousel.min.css')}}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{asset('css/plugins/gijgo.css')}}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="{{asset('img/preloader.gif')}}" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    @include('inc.nav')
    <!--== Header Area End ==-->



    <!--== Partner Area Start ==-->
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    @yield('content')

    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="{{asset('img/logo.png')}}" alt="JSOFT">
                                <!--Start card profile -->
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nguyễn Văn Hậu</h5>
                                        <hr>
                                        <h5><p class="card-text">PHÒNG KINH DOANH</p></h5>
                                        <p class="card-text">0986 585 811</p>
                                        <hr>
                                        <h5>Thời gian làm việc</h5>
                                        <p class="card-text">Bất kể khi nào bạn cần, hỗ trợ 24/7, 7 ngày trong tuần</p>
                                        <a href="#" class="btn btn-primary">Liên hệ</a>
                                    </div>
                                </div>
                                <!--End card profile -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Thông tin Show room</h2>
                            <div class="widget-body">
                                <p>Công ty Cổ phần Đầu tư & Thương mại Tây Ford Đà Lạt</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i><a href="https://goo.gl/maps/PuUqUvPxnHK2" target="_blank">108 Hùng Vương - P.11 - TP.Đà Lạt - Lâm Đồng.</a></li>
                                    <li><i class="fa fa-mobile"></i>0986 585 811</li>
                                    <li><i class="fa fa-envelope"></i>leconghau5432@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Vị trí</h2>
                            <div class="widget-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.4383726345336!2d108.47404381518089!3d11.944121439819066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317113aa8bdd77eb%3A0x7a7c43a966667d05!2zMTA4IEjDuW5nIFbGsMahbmcsIFBoxrDhu51uZyAxMSwgVGjDoG5oIHBo4buRIMSQw6AgTOG6oXQsIEzDom0gxJDhu5NuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1553646551709" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{asset('img/scroll-top.png')}}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{asset('js/plugins/gijgo.js')}}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{asset('js/plugins/vegas.min.js')}}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{asset('js/plugins/isotope.min.js')}}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{asset('js/plugins/owl.carousel.min.js')}}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{asset('js/plugins/waypoints.min.js')}}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{asset('js/plugins/counterup.min.js')}}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{asset('js/plugins/mb.YTPlayer.js')}}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{asset('js/plugins/magnific-popup.min.js')}}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{asset('js/plugins/slicknav.min.js')}}"></script>

    <!--=== Mian Js ===-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
