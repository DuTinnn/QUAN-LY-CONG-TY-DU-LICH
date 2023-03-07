@extends('template')
@section('content')

<div class="container">
  <h1>Danh sách khách hàng</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã KH</th>
        <th>Họ và tên KH</th>
        <th>Ngày sinh</th>
        <th>SĐT</th>  
        <th>Địa chỉ</th>
        <th>Email</th>      
        <th>Giới tính</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['makh']}}</td>
        <td>{{$da['hotenkh']}}</td>
        <td>{{$da['ngaysinh']}}</td>
        <td>{{$da['sdt']}}</td>
        <td>{{$da['diachi']}}</td>
        <td>{{$da['email']}}</td>
        <td>{{$da['gioitinh']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletekh','makh='.$da['makh'])}}">Xóa</a></button></td>   
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suakh','makh='.$da['makh'])}}">Sửa</a></button></td>   
      </tr>
@endforeach

    </tbody>
  </table>
</div>
@endsection