@extends('template')
@section('content')

<div class="container">
  <h1>Thêm hóa đơn</h1>
  <form action="{{route('themhd')}}" method='get'>
      <table class="table" >
      <tr>
        <td>Mã hóa đơn</td>
        <td><input type="text" name="mahd"></td>
      </tr>
      <tr>
        <td>Mã KH</td>
        <td><input type="text" name="makh"></td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="date" name="ngaylaphd"></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Thanh toán</td>
        <td><input type="text" name="chiphi"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection