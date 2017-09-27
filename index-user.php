<?php 
    if(isset($_GET["page"]))
        $page = $_GET["page"];
    else
        $page = "";
 ?>    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 2017</title>
    


	<!-- CSS -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="Public/css/home.css">
	<link rel="stylesheet"  type="text/css" href="Public/css/menu.css">
	<link rel="stylesheet"  type="text/css" href="Public/css/trangchu.css">

    <!-- Bootstrap -->
    <link rel="stylesheet"  href="Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="Public/bootstrap/css/bootstrap-theme.min.css"   > 
    <script type="text/javascript" src ="Public/bootstrap/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src ="Public/bootstrap/js/bootstrap.min.js"></script>

    	<!-- mapboox -->


 	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.js'></script>
  	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.css' rel='stylesheet' />
    
    
	
		<!-- fullscreen -->
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.1.0/mapbox-gl-geocoder.min.js'></script>
	<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.1.0/mapbox-gl-geocoder.css' type='text/css' />
		<!-- show location -->
		
<!-- Highchart -->
    <script type="text/javascript" src="Public/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script> 

	<!-- trang chu -->
	<link rel="stylesheet"  type="text/css" href="test.css">
	<link rel="stylesheet"  type="text/css" href="slide/pgwslider.css">
	<script src="slide/pgwslider.js"></script>


<style type="text/css">
 body{
    font-family:    'Segoe UI',Arial,sans-serif;
  }

  /*trangchu*/
#content-nuoc{
	margin-top: 20px;
}
  figure img{
		  -webkit-transition: all 0.5s linear;
		          transition: all 0.5s linear;
		  -webkit-transform: scale3d(1, 1, 1);
		          transform: scale3d(1, 1, 1);
		}

		figure:hover img{
		  -webkit-transform: scale(1.1, 1.1, 1);
		          transform: scale3d(1.1, 1.1, 1);
		}

		figure .tieude{
  -webkit-transition: all 0.3s linear;
          transition: all 0.3s linear;
  -webkit-transform: scale(1, 1);
          transform: scale(1, 1);
}

figure:hover .tieude{
  -webkit-transform: scale(1, 1);
          transform: scale(1, 1.1);
        font-weight: bold;
         letter-spacing: 0.5px;
}

.footer{
	margin-top: 10px
}
.footer ul{
	list-style: none;
}

.footer ul li {
	padding: 5px 0;
}

#social:hover {
    -webkit-transform:scale(1.0); 
}
#social {
-webkit-transform:scale(0.8);
                /* Browser Variations: */
-webkit-transition-duration: 0.5s; 

            }           
/* 
    Only Needed in Multi-Coloured Variation 
                                               */
.social-fb:hover {
                color: #3B5998;}
.social-tw:hover {
                color: #4099FF;}
.social-gp:hover {
                color: #d34836;}
.social-em:hover {
                color: #f39c12;
            }

</style>

</head>
<body>

<?php
    $tentaikhoan = '';
    if(isset($_GET['username'])){
        $tentaikhoan = $_GET['username'];
    } 
?>


	<div class="container" id="skhcn" style="background-color: white"> <!-- begin content -->
		<div id="header">
			<header><!-- begin header -->       
				<div class="">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-md-2 col-md-offset-10" >
								<h4 style="padding-top: 10px"><span class="glyphicon glyphicon-user" aria-hidden="true">
									<?php echo $tentaikhoan ; ?> <a href="index.php" class="btn btn-default" style="margin-bottom: 5px">Thoát</a> </span></h4>
							</div>
						</div>
					</div>
				</div>
			</header> <!-- End .header -->
		</div>


			<div class="slide"> <!-- begin slide -->
				<div class="row">
					<div class="col-sm-12" style="padding-left: 0px;padding-right: 0px">
						<img id="bia" src="img/banner.jpg" style=" width:100%;height:140px">
					</div>
				</div>
			</div>  <!-- End .slide -->


			<!--start menu -->
			<div class="row" style="position: relative">
			<div id="menu">
				<nav>
					<div class="nav-fostrap col-sm-12" style="color: #fff" >
						<ul style="margin-left: 230px">
							<li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Trang Chủ</a></li>
							<li><a href="javascript:void(0)">Chất Lượng Nước<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="index-user.php?username=<?php echo $tentaikhoan ?>&page=clnuoc-begin">Giám sát chất lượng nước</a></li>
									<li><a href="Chatluongnuoc/wqi/dashboard.php?username=<?php echo $tentaikhoan ?>">Tính Toán Chỉ số WQI</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)" >Chất Lượng Không Khí<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="index-user.php?username=<?php echo $tentaikhoan ?>&page=clkhongkhi-begin">Giám sát chất lượng không khí</a></li>
									<li><a href="Chatluongkhongkhi/aqi/dashboard-aqi.php?username=<?php echo $tentaikhoan ?>">Tính Toán Chỉ số AQI</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)" >Hỗ Trợ<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="">Tạo file csv</a></li>
									<li><a href="">Lấy dữ liệu không khí bằng phần mềm IDV</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)" >Liên Hệ<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="">Địa Chỉ :</a></li>
									<li><a href="">Mail:</a></li>
									<li><a href="">SĐT:</a></li>
								</ul>
							</li>

						</ul>
					</div>
					
				</nav>
			</div><!-- end menu -->
			</div>


			<div class="row" style="margin-top: 75px">
				<?php
					switch ($page) {
                    case 'clnuoc-begin':  require"Chatluongnuoc/nuoc.php";
                        break;

                    case 'clkhongkhi-begin':  require"Chatluongkhongkhi/khongkhi.php";
                        break;

                    case 'clnuoc':  require"Chatluongnuoc/mapnuoc.php";
                        break;

                    case 'clkhongkhi':  require"Chatluongkhongkhi/mapkhongkhi.php";
                        break;
                   
                    default:  require("dulieutrangchu/trangchu.php");;
                }  
				?>
			</div> <!-- end content -->

			<div class="footer" >
				<div class="row" style="background: #004d4d">
					<div class="col-sm-3" style="color: #fff">
						<ul>
						<li style="margin-top: 18px;margin-left: 50px;" >Liên hệ</li>
							<li><a href="https://www.facebook.com/vientinhtoan/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
								<a href="" style="color: #4099FF"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
								<a href="" style="color: #d34836;"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
								<a href="" style="color: #f39c12"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-sm-4 col-sm-offset-1 diachi" style="color: #fff">
						<ul>
							<li style="margin-top: 18px;padding-left: 30px; font-size: 14px"><span class="glyphicon glyphicon glyphicon-road"></span> Viện khoa học công nghệ và tính toán </li>
							<li style="margin-top: 5px;font-style: italic ">Khu công nghệ phần mềm Quang Trung - Q12-TP.HCM</li>
							<li style="margin-left: 100px; margin-top: 5px; font-size: 14px"><span class="glyphicon glyphicon-home"> </span> <a href="#skhcn" style="color:#fff; font-weight: bold" id="trangchu">Trang chủ</a></li>

						</ul>
					</div>
					<div class="col-sm-3 col-sm-offset-1" style="color: #fff">
						<ul style="">
							<li style=" margin-top: 18px;font-size: 15px; padding-left: 25px">&copy; Bản Quyền 2017</li>
							<li style="font-style: italic  ">Mang đến hỗ trợ tốt nhất cho bạn</li>
						</ul>
					</div>
				</div>
			</div>
	</div>
		

	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tinhtoanwqi").click(function(){
				alert("Bạn chưa đăng nhập !");
			});
			$("#tinhtoanaqi").click(function(){
				alert("Bạn chưa đăng nhập !");
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".go-text").mouseenter(function() {
				$(this).next().css("display","block");
				$(this).css("display","none");
			});
			$(".go-click").mouseleave(function() {
				$(this).prev().css("display","block");
				$(this).css("display","none");
			});
		});
	</script>

	<script>
		$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: "#skhcn", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $(".diachi a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    }  // End if
});
});
</script>

</body>
</html>
