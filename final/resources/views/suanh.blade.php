@extends('template')
@section('content')

<div class="container">
  <h1>Sửa thông tin nhà hàng</h1>
  <form action="{{route('suattnh')}}" method='get'>
      <table class="table">
@foreach($data as $d)
      <tr>
        <td>Mã nhà hàng</td>
        <td><input type="text" name="manh" value="{{$d['manh']}} "></td>
      </tr>
      <tr>
        <td>Tên nhà hàng</td>
        <td><input type="text" name="tennh" value="{{$d['tennh']}} "></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour" value="{{$d['matour']}} "></td>
      </tr>
      <tr>
        <td>Giá vào cửa</td>
        <td><input type="text" name="giavaocua" value="{{$d['giavaocua']}} "></td>
      </tr>
  @endforeach
  </table>
<div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Sửa</button>
  </div>
  </form>
</div>
@endsection