@extends('template')
@section('content')

<div class="container">
  <h1 style="text-align: center;">Danh sách phương tiện</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã phương tiện</th>
        <th>Tên phương tiện</th>
        <th>Mã tour</th>
        <th>Giá vé</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['mapt']}}</td>
        <td>{{$da['tenpt']}}</td>
        <td>{{$da['matour']}}</td>
        <td>{{$da['giave']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletept','mapt='.$da['mapt'])}}">Xóa</a></button></td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suapt','mapt='.$da['mapt'])}}">Sửa</a></button></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection
