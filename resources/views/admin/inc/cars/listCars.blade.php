<h4>Danh Sách Xe <a href="{{ route('product.create') }}" class="btn btn-success">Thêm</a></h4>
<table class="table table-hover p-5">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Ảnh</th>
      <th scope="col">DSẢnh</th>
      <th scope="col">Tên</th>
      <th scope="col">Giá</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$loop->index }}</th>
      <td><img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $product->images }}"></td>
      <td>
      @foreach($product->listImages as $productListImages)
        <img width="100px" height="100px" class="img-thumbnail" src="{{ asset('uploads')}}/{{ $productListImages->images }}">
      @endforeach
      </td>
      <td><a href="{{ route('product.edit', $product ) }}" class="product-name"><h5>{{$product->name}}</h5></a></td>
      <td>{{$product->price}} VND</td>
      <td><a href="{{ route('product.edit', $product ) }}" class="btn btn-primary">Chỉnh sửa</a></td>
      <td>
        {!! Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product], 'onsubmit' => 'return ConfirmDelete()']) !!}
        {!! Form::submit('Xóa', ['class' => 'btn btn-danger'])!!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
