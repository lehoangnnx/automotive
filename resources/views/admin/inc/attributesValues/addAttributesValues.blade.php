@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'attribute-value.store']) !!}
{!! Form::label('lblAttribute', 'Thuộc Tính') !!}
{!! Form::select('attribute_id', $attributes->pluck('name', 'id')) !!}

{!! Form::label('lblName', 'Giá trị Thuộc Tính') !!}
{!! Form::text('name',null,['required']) !!}
{!! Form::submit('Thêm')!!}
{!! Form::close() !!}
@endsection