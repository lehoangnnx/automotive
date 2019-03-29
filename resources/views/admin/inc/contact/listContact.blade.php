<h4>Danh Sách Liên Hệ</h4>
<table class="table table-hover p-5">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Nội Dung</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{$loop->index }}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->content}}</td>
            <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $contact], 'onsubmit' => 'return ConfirmDelete()']) !!}
                {!! Form::submit('Xóa', ['class' => ' btn btn-danger'])!!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
