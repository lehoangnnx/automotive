@extends('layout') 
@section('content')
@include('inc.sidebar')
<section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Danh Sách Xe</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="popucar-menu text-center">
                                        <a href="#" data-filter="*" class="active">Tất Cả</a>
                                        @foreach ($categories as $category)
                                            <a href="#" data-filter=".{{$category->id}}">{{$category->name}}</a>
                                        @endforeach
                                    </div>
                                    <!-- Filtering Menu --> 

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                        @foreach ($categories as $category)
                                            
                                        @foreach ($category->product as $product)
                                            <div class="col-lg-4 col-md-6 con {{ $category->id }} mpv">
                                                    <div class="single-popular-car">
                                                        <div class="p-car-thumbnails">
                                                            <span class="price">{{$product->price}} VND</span>
                                                            <a class="car-hover" href="{{ asset('uploads')}}/{{ $product->images }}">
                                                              <img style="height: 215px;width: 100%;" src="{{ asset('uploads')}}/{{ $product->images }}">
                                                           </a>
                                                        </div>
        
                                                        <div class="p-car-content">
                                                            <h3>
                                                                <a href="{{ route('detail', [$product->id] )}}">{{$product->name}}</a>
                                                               
                                                            </h3>
                                                            <h5>{{$category->name}}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                        @endforeach
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
@endsection