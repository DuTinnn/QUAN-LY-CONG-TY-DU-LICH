@extends('template')
@section('content')

<div class="container">
  <h1>Sửa thông tin phương tiện</h1>
  <form action="{{route('suattpt')}}" method='get'>
      <table class="table">
@foreach($data as $d)
      <tr>
        <td>Mã phương tiện</td>
        <td><input type="text" name="mapt" value="{{$d['mapt']}} "></td>
      </tr>
      <tr>
        <td>Tên phương tiện</td>
        <td><input type="text" name="tenpt" value="{{$d['tenpt']}} "></td>
      </tr>
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour" value="{{$d['matour']}} "></td>
      </tr>
      <tr>
        <td>Giá vé</td>
        <td><input type="text" name="giave" value="{{$d['giave']}} "></td>
      </tr>
  @endforeach
  </table>
<div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Sửa</button>
  </div>
  </form>
</div>
@endsection