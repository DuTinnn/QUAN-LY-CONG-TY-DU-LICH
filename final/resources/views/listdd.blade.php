@extends('template')
@section('content')

<div class="container">
  <h1 style="text-align: center;">Danh sách địa điểm</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã địa điểm</th>
        <th>Mã tour</th>
        <th>Tên địa điểm</th>
        <th>Địa chỉ</th>
        <th>Giờ vào cửa</th>
        <th>SĐT ban quản lý</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['madd']}}</td>
        <td>{{$da['matour']}}</td>
        <td>{{$da['tendd']}}</td>
        <td>{{$da['diachi']}}</td>
        <td>{{$da['giovaocua']}}</td>
        <td>{{$da['sdtquanly']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletedd','madd='.$da['madd'])}}">Xóa</a></button></td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suadd','madd='.$da['madd'])}}">Sửa</a></button></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection
