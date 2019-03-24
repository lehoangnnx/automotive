<h4>Danh Sách Giá Trị Thuộc Tính <a href="{{ route('attribute-value.create') }}" class="btn btn-success">Thêm</a></h4>
<table class="table table-hover p-5">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Thuộc Tính</th>
      <th scope="col">Giá Trị</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($attributesValues as $attributeValue)
    <tr>
      <th scope="row">{{$loop->index }}</th>
      <td><a href="{{ route('attribute-value.edit', $attributeValue ) }}" class="product-name"><h5>{{ $attributeValue->attribute->name }}</h5></a></td>
      <td>{{ $attributeValue->name }}</td>
      <td><a href="{{ route('attribute-value.edit', $attributeValue ) }}" class="btn btn-primary">Chỉnh sửa</a></td>
      <td>
        {!! Form::open(['method' => 'DELETE', 'route' => ['attribute-value.destroy', $attributeValue], 'onsubmit' => 'return ConfirmDelete()']) !!}
        {!! Form::submit('Xóa', ['class' => 'btn btn-danger'])!!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
