@extends('template')
@section('content')

<div class="container">
  <h1>Thêm nhà hàng</h1>
  <form action="{{route('themnh')}}" method='get'>
      <table class="table" >
      <tr>
        <td>Mã nhà hàng</td>
        <td><input type="text" name="manh"></td>
      </tr>
      <tr>
        <td>Tên nhà hàng</td>
        <td><input type="text" name="tennh"></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Giá vào cửa</td>
        <td><input type="text" name="giavaocua"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection

