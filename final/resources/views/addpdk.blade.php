@extends('template')
@section('content')

<div class="container">
  <h1>Thêm phiếu ĐK</h1>
  <form action="{{route('thempdk')}}" method='get'>
      <table class="table">
      <tr>
        <td>Mã NV</td>
        <td><input type="text" name="manv"></td>
      </tr>
      <tr>
        <td>Mã PĐK</td>
        <td><input type="text" name="mapdk"></td>
      </tr>
      <tr>
        <td>Mã Tour</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Mã KH</td>
        <td><input type="text" name="makh"></td>
      </tr>
      <tr>
        <td>Họ tên KH</td>
        <td><input type="text" name="hoten"></td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="date" name="ngaylap"></td>
      </tr>
      <tr>
        <td>Giá tour</td>
        <td><input type="text" name="giatour"></td>
      </tr>
      <tr>
        <td>Giờ khởi hành</td>
        <td><input type="time" name="giokhoihanh"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection

