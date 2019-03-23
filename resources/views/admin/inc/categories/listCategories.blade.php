<h4>Danh Sách Loại Xe <a href="{{ route('category.create') }}" class="btn btn-success">Thêm</a></h4>
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
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$loop->index }}</th>
      <td>{{$category->name}}</td>
      <td><a href="{{ route('category.edit', $category ) }}">Sửa</a></td>
      <td>
        {!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $category], 'onsubmit' => 'return ConfirmDelete()']) !!}

        {!! Form::submit('Xóa')!!}
         {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
