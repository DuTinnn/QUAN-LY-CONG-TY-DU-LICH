@extends('template')
@section('content')

<div class="container">
  <h1 >Danh sách nhân viên</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã nhân viên</th>
        <th>Họ và tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>SĐT</th>        
        <th>Lương</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['username']}}</td>
        <td>{{$da['hoten']}}</td>
        <td>{{$da['gioitinh']}}</td>
        <td>{{$da['ngaysinh']}}</td>
        <td>{{$da['email']}}</td>
        <td>{{$da['diachi']}}</td>
        <td>{{$da['sdt']}}</td>
        <td>{{$da['luong']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletenv','username='.$da['username'])}}">Xóa</></button></td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suanv','username='.$da['username'])}}">Sửa</a></button></td>

      </tr>
@endforeach

    </tbody>
  </table>
</div>
@endsection

