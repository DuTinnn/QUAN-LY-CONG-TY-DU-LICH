@extends('template')
@section('content')

<div class="container">
  <h1>Sửa thông tin địa điểm</h1>
  <form action="{{route('suattdd')}}" method='get'>
      <table class="table">
@foreach($data as $d)
      <tr>
        <td>Mã địa điểm</td>
        <td><input type="text" name="madd" value="{{$d['madd']}} "></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour" value="{{$d['matour']}} "></td>
      </tr>
      <tr>
        <td>Tên địa điểm</td>
        <td><input type="text" name="tendd" value="{{$d['tendd']}} "></td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="diachi" value="{{$d['diachi']}} "></td>
      </tr>
      <tr>
        <td>Giờ vào cửa</td>
        <td><input type="time" name="giovaocua" value="{{$d['giovaocua']}} "></td>
      </tr>
      <tr>
        <td>SĐT ban quản lý</td>
        <td><input type="text" name="sdtquanly" value="{{$d['sdtquanly']}} "></td>
      </tr>
  @endforeach
  </table>
<div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Sửa</button>
  </div>
  </form>
</div>
@endsection