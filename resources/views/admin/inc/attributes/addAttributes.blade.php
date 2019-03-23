@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'attribute.store']) !!}
{!! Form::label('lblName', 'Tên Thuộc Tính') !!}
{!! Form::text('name',null,['required']) !!}
{!! Form::submit('Thêm')!!}
{!! Form::close() !!}
@endsection