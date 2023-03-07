@extends('template')
@section('content')

<div class="container">
  <h1>Sửa thông tin tour</h1>
  <form action="{{route('suatttour')}}" method='get'>
      <table class="table">
@foreach($data as $d)
      <tr>
        <td>Mã tour</td>
        <td><input type="text" name="matour" value="{{$d['matour']}} "></td>
      </tr>
      <tr>
        <td>Điểm xuất phát</td>
        <td><input type="text" name="Diemxuatphat" value="{{$d['Diemxuatphat']}} "></td>
      </tr> 
      <tr>
        <td>Lịch trình cụ thể</td>
        <td><input type="text" name="lichtrinhcuthe" value="{{$d['lichtrinhcuthe']}} "></td>
      </tr>
      <tr>
        <td>Thời gian</td>
        <td><input type="text" name="thoigian" value="{{$d['thoigian']}} "></td>
      </tr>
      <tr>
        <td>Phương tiện</td>
        <td><input type="text" name="phuongtien" value="{{$d['phuongtien']}} "></td>
      </tr>
      <tr>
        <td>Giá</td>
        <td><input type="int" name="gia" value="{{$d['gia']}} "></td>
      </tr>
      <tr>
        <td>Giá trẻ em</td>
        <td><input type="int" name="giatreem" value="{{$d['giatreem']}} "></td>
      </tr>      
  @endforeach
  </table>
<div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Sửa</button>
  </div>
  </form>
</div>
@endsection