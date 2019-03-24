@extends('admin.layouts.app')
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'category.store']) !!}
<table class="table table-hover p-5">
    <thead>
        <tr>
            <th>Thuộc tính</th>
            <th>Giá trị</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! Form::label('lblName', 'Tên Danh Mục') !!}</td>
            <td>{!! Form::text('name',null,['required']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td>{!! Form::submit('Thêm', ['class' => 'btn btn-success'])!!}</td>
        </tr>
    </tbody>
{!! Form::close() !!}
@endsection
