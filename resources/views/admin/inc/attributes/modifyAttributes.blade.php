@extends('admin.layouts.app')
@section('content')
{!! Form::open(['method' => 'PUT', 'route' => ['attribute.update', $attribute] ]) !!}
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
            <td>{!! Form::text('name',$attribute->name,['required']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td>
                {!! Form::submit('Sửa')!!}
                <a href="{{url('/admin')}}" class="btn btn-primary">Trở về trang chủ</a>
            </td>
        </tr>
    </tbody>
</table>
{!! Form::close() !!}
@endsection
