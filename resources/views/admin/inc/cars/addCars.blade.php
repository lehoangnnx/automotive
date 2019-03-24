@extends('admin.layouts.app')
@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'product.store', 'files' => true]) !!}
<table class="table table-hover p-5">
    <thead>
        <tr>
            <th>Thuộc tính</th>
            <th>Giá trị</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! Form::label('lblCategory', 'Loại Xe') !!}</td>
            <td>{!! Form::select('categories_id', $categories->pluck('name', 'id')) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblName', 'Tên Xe') !!}</td>
            <td>{!! Form::text('name',null,['required']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblPrice', 'Giá') !!}</td>
            <td>{!! Form::text('price',null,['required']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblDiscription', 'Mô Tả') !!}</td>
            <td>{!! Form::text('discriptions',null,['required']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblProductAttribute', 'Thuộc Tính') !!}</td>
            <td>{!! Form::select('attributes_values[]', $attributesValues->pluck('name', 'id'), null, ['multiple' => true])!!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblImages', 'Hình') !!}</td>
            <td>{!! Form::file('image', ['accept' => 'image/*','required'])  !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblListImages', 'Danh Sách Hình') !!}</td>
            <td>{!! Form::file('listImages[]', ['accept' => 'image/*', 'multiple','required'])  !!}</td>
        </tr>
        <tr>
            <td></td>
            <td>
                {!! Form::submit('Thêm', ['class' => ' btn btn-success'])!!}
                <a href="{{url('/admin')}}" class="btn btn-primary">Trở về trang chủ</a>
            </td>
        </tr>
    </tbody>
</table>
{!! Form::close() !!}
@endsection
