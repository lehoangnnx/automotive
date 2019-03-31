<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <div id="header-top" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                 <!--== Single HeaderTop Start ==-->
                 <div class="col-lg-2 text-center">
                    <i class="fa fa-user"></i> Lê Công Hậu
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-center">
                    <i class="fa fa-mobile"></i> 0986 585 811
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-4 text-left">
                    <i class="fa fa-map-marker"></i> 108, Hùng Vương, p11, TP.Đà Lạt
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-center">
                    <i class="fa fa-envelope"></i> leconghau5432@gmail.com
                </div>
                <!--== Single HeaderTop End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->

    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <!--== Logo Start ==-->
                <div class="col-lg-4">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('img/logo.png')}}" alt="JSOFT">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="mainmenu alignright">
                        <ul>
                            <li><a href="{{route('home')}}">Trang Chủ</a></li>
                            <li><a href="#">Sản Phẩm</a>
                                <ul>
                                    @foreach ($categories as $category)
                                      <li><a href="{{route('productCategory', [$category->id])}}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->
