@extends('template')
@section('content')

<div class="container">
  <h1 style="text-align: center;">Danh sách đăng ký tour</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã NV</th>
        <th>Mã PDK</th>
        <th>Mã tour</th>
        <th>Mã KH</th>
        <th>Họ tên</th>        
        <th>Ngày lập</th>
        <th>Giá tour</th>
        <th>Giờ khởi hành</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['manv']}}</td>
        <td>{{$da['mapdk']}}</td>
        <td>{{$da['matour']}}</td>        
        <td>{{$da['makh']}}</td>
        <td>{{$da['hoten']}}</td>
        <td>{{$da['ngaylap']}}</td>
        <td>{{$da['giatour']}}</td>
        <td>{{$da['giokhoihanh']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletepdk','mapdk='.$da['mapdk'])}}">Xóa</a></button></td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suapdk','mapdk='.$da['mapdk'])}}">Sửa</a></button></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection
