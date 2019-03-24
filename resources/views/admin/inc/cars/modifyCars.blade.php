@extends('admin.layouts.app')
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['product.update', $product], 'files' => true ]) !!}
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
            <td>{!! Form::select('categories_id', $categories->pluck('name', 'id'), $product->categories_id ) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblName', 'Tên Xe') !!}</td>
            <td>{!! Form::text('name',$product->name,['required']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblPrice', 'Giá') !!}</td>
            <td>{!! Form::text('price',$product->price,['required']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblDiscription', 'Mô Tả') !!}</td>
            <td>{!! Form::text('discriptions',$product->discriptions,['required']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblProductAttribute', 'Thuộc Tính') !!}</td>
            <td>{!! Form::select('attributes_values[]', $attributesValues->pluck('name', 'id'), $product->productAttribute->pluck('attributes_values_id'), ['multiple' => true])!!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblImages', 'Hình') !!}</td>
            <td><img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $product->images }}">{!! Form::file('image', ['accept' => 'image/*'])  !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('lblListImages', 'Danh Sách Hình') !!}</td>
            <td>
                @foreach($product->listImages as $productListImages)
                    <img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $productListImages->images }}">
                @endforeach
                {!! Form::file('listImages[]', ['accept' => 'image/*', 'multiple'])  !!}
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                {!! Form::submit('Sửa', ['class' => 'btn btn-success'])!!}
                <a href="{{url('/admin')}}" class='btn btn-primary'>Trở về trang chủ</a>
            </td>
        </tr>
    </tbody>
</table>
{!! Form::close() !!}

@endsection















