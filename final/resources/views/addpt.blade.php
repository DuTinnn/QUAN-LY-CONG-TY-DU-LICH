@extends('template')
@section('content')

<div class="container">
  <h1>Thêm phương tiện</h1>
  <form action="{{route('thempt')}}" method='get'>
      <table class="table" >
      <tr>
        <td>Mã phương tiện</td>
        <td><input type="text" name="mapt"></td>
      </tr>
      <tr>
        <td>Tên phương tiện</td>
        <td><input type="text" name="tenpt"></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour"></td>
      </tr>
      <tr>
        <td>Giá vé</td>
        <td><input type="text" name="giave"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection

