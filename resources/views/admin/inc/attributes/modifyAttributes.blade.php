@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['attribute.update', $attribute] ]) !!}
{!! Form::label('lblName', 'Tên Danh Mục') !!}
{!! Form::text('name',$attribute->name,['required']) !!}
{!! Form::submit('Sửa')!!}
{!! Form::close() !!}
@endsection