@extends('admin.layouts.app') 
@section('content')
@if (session('status'))
  <div class="alert alert-success">
      {{ session('status') }}
  </div>
@endif

  @include('admin.inc.categories.listCategories')
  @include('admin.inc.attributes.listAttributes')
  @include('admin.inc.attributesValues.listAttributesValues')
  @include('admin.inc.cars.listCars')
  
@endsection