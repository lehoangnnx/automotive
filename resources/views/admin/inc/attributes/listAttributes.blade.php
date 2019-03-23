<h4>Danh Sách Thuộc Tính <a href="{{ route('attribute.create') }}" class="btn btn-success">Thêm</a></h4>
<table class="table table-hover p-5">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($attributes as $attribute)
    <tr>
      <th scope="row">{{$loop->index }}</th>
      <td>{{$attribute->name}}</td>
      <td><a href="{{ route('attribute.edit', $attribute ) }}">Sửa</a></td>
      <td>
        {!! Form::open(['method' => 'DELETE', 'route' => ['attribute.destroy', $attribute], 'onsubmit' => 'return ConfirmDelete()']) !!}

        {!! Form::submit('Xóa')!!}
         {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
