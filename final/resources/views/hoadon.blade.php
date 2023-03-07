@extends('template')
@section('content')

<div class="container">
  <h1 style="text-align: center;">Danh sách hóa đơn</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Mã hóa đơn</th>
        <th>Mã KH</th>
        <th>Ngày lập</th>
        <th>Mã tour</th>
        <th>Thanh toán</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $da)
      <tr >
        <td>{{$da['mahd']}}</td>
        <td>{{$da['makh']}}</td>
        <td>{{$da['ngaylaphd']}}</td>
        <td>{{$da['matour']}}</td>
        <td>{{$da['chiphi']}}</td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection