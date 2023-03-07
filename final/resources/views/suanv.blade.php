@extends('template')
@section('content')

<div class="container">
  <h1>Sửa thông tin nhân viên</h1>
  <form action="{{route('suattnv')}}" method='get'>
      <table class="table">
@foreach($data as $d)
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="{{$d['username']}} "></td>
      </tr>
      <tr>
        <td>Họ tên</td>
        <td><input type="text" name="hoten" value="{{$d['hoten']}} "></td>
      </tr>
      <tr>
        <td>Ngày sinh</td>
        <td><input type="date" name="ngaysinh" value="{{$d['ngaysinh']}} "></td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="diachi" value="{{$d['diachi']}} "></td>
      </tr>
      <tr>
        <td>Giới tính</td>
        <td>
          <input type="radio" id="Nam" name="gioitinh" value="Nam">
          <label for="Nam" style="color: #000000">Nam</label>
          <input type="radio" id="Nữ" name="gioitinh" value="Nữ">
          <label for="Nữ" style="color: #000000">Nữ</label><br>
        </td>
      </tr>
      <tr>
        <td>SĐT</td>
        <td><input type="text" name="sdt" value="{{$d['sdt']}} "></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="{{$d['email']}} "></td>
      </tr>
      <tr>
        <td>Lương</td>
        <td><input type="text" name="luong" value="{{$d['luong']}} "></td>
      </tr>

        
  @endforeach
  </table>
<div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Sửa</button>
  </div>
  </form>
</div>
@endsection