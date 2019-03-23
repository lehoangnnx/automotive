@extends('admin.layouts.app') 
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['category.update', $category] ]) !!}
{!! Form::label('lblName', 'Tên Danh Mục') !!}
{!! Form::text('name',$category->name,['required']) !!}
{!! Form::submit('Sửa')!!}
{!! Form::close() !!}
@endsection