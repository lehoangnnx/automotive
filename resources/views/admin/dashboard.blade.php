@extends('admin.layouts.app') 
@section('content')
@if (session('status'))
  <div class="alert alert-success">
      {{ session('status') }}
  </div>
@endif
  @include('admin.inc.contact.listContact')
  @include('admin.inc.categories.listCategories')
  @include('admin.inc.cars.listCars')
@endsection