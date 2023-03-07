@extends('template')
@section('content')

<div class="container">
  <h1>Thêm nhân viên</h1>
  <form action="{{route('themnv')}}" method='get'>
      <table class="table">
      <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Họ tên</td>
        <td><input type="text" name="hoten"></td>
      </tr>
      <tr>
        <td>Ngày sinh</td>
        <td><input type="date" name="ngaysinh"></td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="diachi"></td>
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
        <td><input type="text" name="sdt"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td>Lương</td>
        <td><input type="text" name="luong"></td>
      </tr>
  </table>
  <div style="text-align: center">
      <button class="btn btn-danger" style="color: #ffff" type="submit">Thêm</button>
  </div>
  </form>
</div>
@endsection

