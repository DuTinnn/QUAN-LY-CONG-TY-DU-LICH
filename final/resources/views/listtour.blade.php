@extends('template')
@section('content')

<div class="container">
  <h1 style="text-align: center; color: #000000 ">Danh sách tour</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã Tour</th>
        <th>Điểm xuất phát</th>
        <th>Lịch trình cụ thể</th>
        <th>Thời gian</th>
        <th>Phương tiện</th>
        <th>Giá</th>
        <th>Giá trẻ em</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['matour']}}</td>
        <td>{{$da['Diemxuatphat']}}</td>
        <td>{{$da['lichtrinhcuthe']}}</td>
        <td>{{$da['thoigian']}}</td>
        <td>{{$da['phuongtien']}}</td>
        <td>{{$da['gia']}}</td>
        <td>{{$da['giatreem']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletetour','matour='.$da['matour'])}}">Xóa</a></button></td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suatour','matour='.$da['matour'])}}">Sửa</a></button></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection
