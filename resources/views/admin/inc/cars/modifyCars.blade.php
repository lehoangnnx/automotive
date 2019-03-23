@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['product.update', $product], 'files' => true ]) !!}
{!! Form::label('lblCategory', 'Loại Xe') !!}
{!! Form::select('categories_id', $categories->pluck('name', 'id'), $product->categories_id ) !!}
{!! Form::label('lblName', 'Tên Xe') !!}
{!! Form::text('name',$product->name,['required']) !!}
{!! Form::label('lblPrice', 'Giá') !!}
{!! Form::text('price',$product->price,['required']) !!}
{!! Form::label('lblDiscription', 'Mô Tả') !!}
{!! Form::text('discriptions',$product->discriptions,['required']) !!}

{!! Form::label('lblProductAttribute', 'Thuộc Tính') !!}
{!! Form::select('attributes_values[]', $attributesValues->pluck('name', 'id'), $product->productAttribute->pluck('attributes_values_id'), ['multiple' => true])!!}


{!! Form::label('lblImages', 'Hình') !!}
<img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $product->images }}">
{!! Form::file('image', ['accept' => 'image/*'])  !!}

{!! Form::label('lblListImages', 'Danh Sách Hình') !!}
@foreach($product->listImages as $productListImages) 
<img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $productListImages->images }}">
@endforeach
{!! Form::file('listImages[]', ['accept' => 'image/*', 'multiple'])  !!}
{!! Form::submit('Sửa')!!}
{!! Form::close() !!}
@endsection