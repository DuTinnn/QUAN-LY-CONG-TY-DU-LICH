<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Quản lý công ty Du lịch</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<style type="text/css">
  body{
    font-size: 1.5em;
  }
</style>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        TAT
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{route('home')}}">
                        <i class="fa fa-dashboard"></i>
                            <span>Trang chủ</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý thông tin nhân viên</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('listnv')}}">Danh sách nhân viên</a></li>
						<li><a href="{{route('addnv')}}">Thêm nhân viên</a></li>
                        <li><a href="{{route('suanv')}}">Sửa thông tin nhân viên</a></li>
                    </ul>
                </li>

                <!--Quan ly tour-->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý thông tin tour</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listtour')}}">Danh sách tour</a></li>
                        <li><a href="{{route('addtour')}}">Thêm  tour</a></li>
                        <li><a href="{{route('suatour')}}">Sửa thông tin tour</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý dịch vụ</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listnh')}}">Danh sách nhà hàng</a></li>
                        <li><a href="{{route('addnh')}}">Thêm nhà hàng</a></li>
                        <li><a href="{{route('suanh')}}">Sửa thông tin nhà hàng</a></li>
                        <li><a href="{{route('listpt')}}">Danh sách phương tiện</a></li>
                        <li><a href="{{route('addpt')}}">Thêm phương tiện</a></li>
                        <li><a href="{{route('suapt')}}">Sửa thông tin phương tiện</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý thông tin địa điểm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listdd')}}">Danh sách địa điểm</a></li>
                        <li><a href="{{route('adddd')}}">Thêm địa điểm</a></li>
                        <li><a href="{{route('suadd')}}">Sửa địa điểm</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý thông tin khách hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listcus')}}">Danh sách khách hàng</a></li>
                        <li><a href="{{route('addkh')}}">Thêm khách hàng</a></li>
                        <li><a href="{{route('suakh')}}">Sửa khách hàng</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Hóa đơn</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('hoadon')}}">Danh sách hóa đơn</a></li>
                        <li><a href="{{route('addhd')}}">Thêm hóa đơn</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý phiếu đăng ký</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('dangky')}}">Phiếu đăng ký</a></li>
                        <li><a href="{{route('addpdk')}}">Thêm phiếu đăng ký</a></li>
                        <li><a href="{{route('suapdk')}}">Sửa phiếu đăng ký</a></li>
                    </ul>
                </li>
                

                <li>
                    <a href="{{route('logout')}}">
                        <i class="fa fa-user"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
@yield('content')
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p style="text-align: center; color: #00ffff;">Công ty Du lịch TAT - Travel and Tourism</p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
