@extends('admin.layouts.app')
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'attribute.store']) !!}
<table class="table table-hover p-5">
    <thead>
        <tr>
            <th>Thuộc tính</th>
            <th>Giá trị</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! Form::label('lblName', 'Tên Thuộc Tính') !!}</td>
            <td>{!! Form::text('name',null,['required']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td>
               {!! Form::submit('Thêm', ['class' => 'btn btn-success'])!!}
               <a href="{{ url('/admin')}}" class="btn btn-primary">Trở về trang chủ</a>
            </td>
        </tr>
    </tbody>
{!! Form::close() !!}
@endsection
