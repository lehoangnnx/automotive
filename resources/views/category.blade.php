@extends('layout') 
@section('content')
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>{{ $category->name}}</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-8">
                <div class="car-list-content">
                        <div class="row">
                    <!-- Single Car Start -->
                    @foreach ($category->product as $item)
                   
                    <div class="col-lg-6 col-md-6">
                        <div class="single-car-wrap">
                            <div class="car-list-thumb" style="height: auto">
                                    <img style="height: 215px;width: 100%;" src="{{ asset('uploads')}}/{{ $item->images }}">
                            </div>
                            <div class="car-list-info without-bar">
                                <h2><a href="{{ route('detail', [$item->id] )}}">{{ $item->name}}</a></h2>
                                <h5 class="m-0 p-0 border-0">{{ $item->price}} VND</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Single Car End -->
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
<!--== Car List Area End ==-->
@endsection