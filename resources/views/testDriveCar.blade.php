@extends('layout')
@section('content')
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Giới thiệu chung</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-12">
                <div class="car-details-content">
                    <div class="car-details-info">
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item">
                                <h4 class="nav-item nav-link active">ĐĂNG KÝ LÁI THỬ XE</h4>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content p-3 single-sidebar">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="content-intro">
                                    <!-- Sidebar Area Start -->
                                    <div class="review-area">
                                        <div class="review-form p-3">
                                            <p>Quý khách nhập thông tin dòng xe quý khách quan tâm, bộ phận báo giá sẽ gửi thông tin chương trình khuyến mãi đến quý khách ngay khi thông tin được gửi đi</p>
                                            <p>Hoặc gọi trực tiếp đến số: <a href="{{route('contactTo')}}"><i class="fa fa-mobile"></i> 0986 585 811 </a> - Nhân viên kinh doanh: <a href="{{route('contactTo')}}"><i class="fa fa-user"></i> Lê Công Hậu</a>
                                            </p>
                                            <hr>
                                            <form action="{{ route('sendContact')}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="name-input">
                                                            <input required name="name" type="text" placeholder="Họ Và Tên">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 pt-3">
                                                        <div class="email-input">
                                                            <input required name="email" type="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 pt-3">
                                                        <div class="email-input">
                                                            <input required name="phone" type="text" placeholder="Số Điện Thoại">
                                                            <input type="hidden" name="product_id" value="{{ isset($product->id) ? $product->id : ''}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="message-input">
                                                    <textarea required name="content" cols="30" rows="5" placeholder="Nội Dung"></textarea>
                                                </div>

                                                <div class="input-submit">
                                                    <button type="submit">Gửi</button>
                                                    <button type="reset">Hủy</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Sidebar Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->

            <!-- Sidebar Area Start -->
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
@endsection
