@extends('template')
@section('content')

<div class="container">
  <h1>Sửa phiếu đăng ký</h1>
  <form action="{{route('suattpdk')}}" method='get'>
      <table class="table">
@foreach($data as $d)
      <tr>
        <td>Mã NV</td>
        <td><input type="text" name="manv" value="{{$d['manv']}} "></td>
      </tr>
      <tr>
        <td>Mã PĐK</td>
        <td><input type="text" name="mapdk" value="{{$d['mapdk']}} "></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour" value="{{$d['matour']}} "></td>
      </tr>
      <tr>
        <td>Mã KH</td>
        <td><input type="text" name="makh" value="{{$d['makh']}} "></td>
      </tr>
      <tr>
        <td>Họ tên KH</td>
        <td><input type="text" name="hoten" value="{{$d['hoten']}} "></td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="date" name="ngaylap" value="{{$d['ngaylap']}} "></td>
      </tr>
      <tr>
        <td>Giá tour</td>
        <td><input type="text" name="giatour" value="{{$d['giatour']}} "></td>
      </tr>
      <tr>
        <td>Giờ khởi hành</td>
        <td><input type="time" name="giokhoihanh" value="{{$d['giokhoihanh']}} "></td>
      </tr>
  @endforeach
  </table>
<div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Sửa</button>
  </div>
  </form>
</div>
@endsection