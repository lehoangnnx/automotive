@extends('admin.layouts.app') 
@section('content')
  @include('admin.inc.categories.listCategories')
  @include('admin.inc.cars.listCars')
@endsection