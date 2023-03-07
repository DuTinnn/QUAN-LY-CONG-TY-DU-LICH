@extends('template')
@section('content')

<div class="container">
  <h1>Lập phiếu đăng ký</h1>
  <form action="{{route('hoadon')}}" method='get'>
      <table class="table" >
      <tr>
        <td>Mã khách hàng</td>
        <td><input type="text" name="mapt"></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="tenpt"></td>
      </tr>
      <tr>
        <td>Ngày đăng ký</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Ngày lập hóa đơn</td>
        <td><input type="date" name="matour"></td>
      </tr>
      <tr>
        <td>Chi phí</td>
        <td><input type="text" name="matour"></td>
      </tr>
  </table>
  </form>
</div>
@endsection

