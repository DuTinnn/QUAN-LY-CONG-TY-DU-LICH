@extends('template')
@section('content')

<div class="container">
  <h1>Thêm địa điểm</h1>
  <form action="{{route('themdd')}}" method='get'>
      <table class="table">
      <tr>
        <td>Mã địa điểm</td>
        <td><input type="text" name="madd"></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Tên địa điểm</td>
        <td><input type="text" name="tendd"></td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="diachi"></td>
      </tr>
      <tr>
        <td>Giờ vào cửa</td>
        <td><input type="time" name="giovaocua"></td>
      </tr>
      <tr>
        <td>SĐT ban quản lý</td>
        <td><input type="text" name="sdtquanly"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection

