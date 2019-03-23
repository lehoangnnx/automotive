@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['attribute-value.update', $attributeValue] ]) !!}
{!! Form::label('lblAttribute', 'Thuộc Tính') !!}
{!! Form::select('attribute_id', $attributes->pluck('name', 'id'),$attributeValue->attribute->id ) !!}

{!! Form::label('lblName', 'Giá trị Thuộc Tính') !!}
{!! Form::text('name', $attributeValue->name,['required']) !!}
{!! Form::submit('Sửa')!!}
{!! Form::close() !!}
@endsection