@extends('template')
@section('content')

<div class="container">
  <h1 style="text-align: center;">Danh sách nhà hàng</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã nhà hàng</th>
        <th>Tên nhà hàng</th>
        <th>Mã tour</th>
        <th>Giá vào cửa</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['manh']}}</td>
        <td>{{$da['tennh']}}</td>
        <td>{{$da['matour']}}</td>
        <td>{{$da['giavaocua']}}</td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('deletenh','manh='.$da['manh'])}}">Xóa</a></button></td>
        <td><button class="btn btn-danger">
        <a style="color: #ffff" href="{{route('suanh','manh='.$da['manh'])}}">Sửa</a></button></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection

