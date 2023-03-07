@extends('template')
@section('content')

<div class="container">
  <h1>Thêm tour</h1>
  <form action="{{route('themtour')}}" method='get'>
      <table class="table">
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Điểm xuất phát</td>
        <td><input type="text" name="Diemxuatphat"></td>
      </tr>
      <tr>
        <td>Lịch trình cụ thể</td>
        <td><input type="text" name="lichtrinhcuthe"></td>
      </tr>
      <tr>
        <td>Thời gian</td>
        <td><input type="text" name="thoigian"></td>
      </tr>
      <tr>
        <td>Phương tiện</td>
        <td><input type="text" name="phuongtien"></td>
      </tr>
      <tr>
        <td>Giá</td>
        <td><input type="int" name="gia"></td>
      </tr>
      <tr>
        <td>Giá trẻ em</td>
        <td><input type="int" name="giatreem"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff"  type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection

