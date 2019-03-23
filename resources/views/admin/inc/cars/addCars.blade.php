@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'product.store', 'files' => true]) !!}
{!! Form::label('lblCategory', 'Loại Xe') !!}
{!! Form::select('categories_id', $categories->pluck('name', 'id')) !!}
{!! Form::label('lblName', 'Tên Xe') !!}
{!! Form::text('name',null,['required']) !!}
{!! Form::label('lblPrice', 'Giá') !!}
{!! Form::text('price',null,['required']) !!}
{!! Form::label('lblDiscription', 'Mô Tả') !!}
{!! Form::text('discriptions',null,['required']) !!}

{!! Form::label('lblProductAttribute', 'Thuộc Tính') !!}
{!! Form::select('attributes_values[]', $attributesValues->pluck('name', 'id'), null, ['multiple' => true])!!}

{!! Form::label('lblImages', 'Hình') !!}
{!! Form::file('image', ['accept' => 'image/*','required'])  !!}

{!! Form::label('lblListImages', 'Danh Sách Hình') !!}
{!! Form::file('listImages[]', ['accept' => 'image/*', 'multiple','required'])  !!}

{!! Form::submit('Thêm')!!}
{!! Form::close() !!}
@endsection