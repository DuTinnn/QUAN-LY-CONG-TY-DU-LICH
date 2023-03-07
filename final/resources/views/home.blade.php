@extends('template')
@section('content')

		<!-- //market-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title >Công ty du lịch TAT</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="text-align: center;">Công ty du lịch TAT</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/la.jpg" style=" width:100%;">
        <div class="carousel-caption">
          <h3>Long An</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/sg.jpg" style=" width:100%;">
        <div class="carousel-caption">
          <h3>Thành phố Hồ Chí Minh</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="images/sp.jpg" style=" width:100%;">
        <div class="carousel-caption">
          <h3>Sa Pa</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/dn.jpg" style=" width:100%;">
        <div class="carousel-caption">
          <h3>Đà Nẵng</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/cm.jpg" style=" width:100%;">
        <div class="carousel-caption">
          <h3>Cà Mau</h3>
        </div>
      </div>     

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
@endsection