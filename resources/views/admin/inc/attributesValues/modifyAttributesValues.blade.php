@extends('admin.layouts.app')
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['attribute-value.update', $attributeValue] ]) !!}
<table class="table table-hover p-5">
    <thead>
        <tr>
            <th>Thuộc tính</th>
            <th>Giá trị</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! Form::label('lblAttribute', 'Thuộc Tính') !!}</td>
            <td>{!! Form::select('attribute_id', $attributes->pluck('name', 'id'),$attributeValue->attribute->id ) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblName', 'Giá trị Thuộc Tính') !!}</td>
            <td>{!! Form::text('name', $attributeValue->name,['required']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td>
                {!! Form::submit('Cập nhật', ['class' => 'btn btn-success'])!!}
                <a href="{{url('/admin')}}" class="btn btn-primary">Trở về trang chủ</a>
            </td>
        </tr>
    </tbody>

{!! Form::close() !!}
@endsection
