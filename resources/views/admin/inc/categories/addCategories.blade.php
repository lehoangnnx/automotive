@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'category.store']) !!}
{!! Form::label('lblName', 'Tên Danh Mục') !!}
{!! Form::text('name',null,['required']) !!}
{!! Form::submit('Thêm')!!}
{!! Form::close() !!}
@endsection