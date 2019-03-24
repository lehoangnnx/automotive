@extends('layout') 
@section('content')
<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Thông Tin Xe</h2>
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
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>{{ $product->name}}<span class="price">Giá: <b>{{ $product->price}} VND</b></span></h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="{{ asset('uploads')}}/{{ $product->images }}" >
                            </div>
                                
                            @foreach($product->listImages as $productListImages) 
                                <div class="single-car-preview">
                                    <img src="{{ asset('uploads')}}/{{ $productListImages->images }}" >
                                </div>
                            @endforeach
                            
                        </div>
                        <div class="car-details-info">
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-item nav-link nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Thông Tin Chi Tiết</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-item nav-link nav-link" data-toggle="tab" href="#tabs-2" role="tab">Thông Số Kỹ Thuật</a>
                                        </li>
                                    </ul><!-- Tab panes -->
                                    <div class="tab-content p-3 single-sidebar">
                                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                            {!! $product->discriptions !!}      
                                         </div>
                                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                <img src="{{ asset('uploads')}}/{{ $product->specification_images }}" >
                                            {!! $product->specification_descriptions !!}    
                                        </div>
                                        
                                    </div>
                            </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>For More Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +8801816 277 243</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>  
                        <div class="single-sidebar">
                                <div class="review-area">
                                        <h3>Liên Hệ</h3>
                                        <div class="review-form p-3">
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
                            </div>  
                            
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
@endsection