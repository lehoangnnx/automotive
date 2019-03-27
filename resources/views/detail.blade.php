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
            <div class="col-lg-8">
                <div class="car-details-content">
                    <h2>{{ $product->name}}<span class="price">Giá: <b>{{ $product->price}} VND</b></span></h2>
                    <div class="car-preview-crousel">
                        <div class="single-car-preview">
                            <img src="{{ asset('uploads')}}/{{ $product->images }}">
                        </div>

                        @foreach($product->listImages as $productListImages)
                        <div class="single-car-preview">
                            <img src="{{ asset('uploads')}}/{{ $productListImages->images }}">
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
                                @if (!empty($product->specification_images))
                                <img src="{{ asset('uploads')}}/{{ $product->specification_images }}">                                    
                                @endif
                                {!! $product->specification_descriptions !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->

            <!-- Sidebar Area Start -->
            @include('inc.contact')
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
@endsection
