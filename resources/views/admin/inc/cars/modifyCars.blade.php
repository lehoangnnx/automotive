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
            <td>{!! Form::textarea('discriptions',$product->discriptions,['class' => 'ckeditor','required']) !!}</td>
        </tr>
        
        <tr>
            <td>{!! Form::label('lblImages', 'Hình') !!}</td>
            <td><img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $product->images }}">
                {!! Form::file('image', ['accept' => 'image/*'])  !!}</td>
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
                <td>{!! Form::label('lblSpecificationImages', 'Hình Ảnh Thông Số') !!}</td>
                <td><img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $product->specification_images }}">
                    {!! Form::file('specification_images', ['accept' => 'image/*'])  !!}</td>
            </tr>
        <tr>
                <tr>
                        <td>{!! Form::label('lblDiscription', 'Nội Dung Thông Số') !!}</td>
                        <td>{!! Form::textarea('specification_descriptions',$product->specification_descriptions,['class' => 'ckeditor']) !!}</td>
                    </tr>
            <td></td>
            <td>
                {!! Form::submit('Cập nhật', ['class' => 'btn btn-success'])!!}
                <a href="{{url('/admin')}}" class='btn btn-primary'>Trở về trang chủ</a>
            </td>
        </tr>
    </tbody>
</table>
{!! Form::close() !!}

@endsection
















