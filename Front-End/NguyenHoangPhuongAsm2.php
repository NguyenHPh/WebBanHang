<?php
	session_start();
?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href = "lib/Asm2.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="lib/Login-button.css">
</head>

<body>
	<div class = "container-fluid">
	  <div class = "row header-row">
		  <div class = "container mx-auto">
			<div class = "col-xs-12 col-md-12 col-sm-12 col-lg-4">
				<p text-align="center" style="color: white"><i class="fa fa-map-marker" style="font-size: 25px; color: wheat; margin-top: 5px;"></i>&nbsp;319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p>
		    </div>	
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<p style="color: white; font-size: 17px;"><i class="fa fa-phone" aria-hidden="true" style="color: wheat; font-size: 27px; padding-top: 8px "></i>&nbsp;0769220162</p>
			</div>
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-2">
				<i class="fa fa-facebook" style="background-color: #4267B2; padding: 5px 10px; font-size: 20px; margin-top:10px;"></i>
 				<i class="fa fa-instagram" style="background-color: #3b6994; padding: 5px 8px; font-size: 20px; margin-top:10px;"></i>
 				<i class="fa fa-twitter" style="background-color: #2478ba; padding: 5px 5px; font-size: 20px; margin-top:10px;"></i>
 				<i class="fa fa-flickr" style="background-color: #e5086f; padding: 5px 7px; font-size: 20px; margin-top:10px;"></i>
			</div>
			  <div class = "col-lg-2 col-sm-12 col-xs-12 col-md-12">
				  <?php if(isset($_SESSION["login"])) {
				   ?>
				  <div class="dropdown">
   						<button class="nut_dropdown">Xin Chào <?php echo $_SESSION["login"][0]?></button>
   						<div class="noidung_dropdown">
     					<a href="../Back-end/Media/cart.php">Giỏ Hàng</a>
						<a href="../Back-end/Media/being-delivery.php">Sản Phẩm Đang Giao</a>
     					<a href="../Back-end/Media/User-logout.php">Đăng Xuất</a>
   						</div>
 					</div>	
				   <?php
                         }else{
					?>
				  	<a href = "../Back-end/Media/User-login.php?view=login&theme=mainpage"><span style = "color: white; font-size: 17px; vertical-align: -15px;">Đăng nhập/Đăng kí</span></a>
					<?php		
						  }
					?>
				</div>
		</div>
		</div>
	    <div class = "row header-row1">
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<img class = "logo" src="image/logo-mona-2.png" width = "250px" style = "margin-left: 100px; margin-top: 10px;">
			</div>
			<div class = "col-xs-12 col-md-12 col-sm-12 col-lg-5">
					<p><input type="text" value = "Tìm kiếm" id = "search"><button id = "button-search"><i class="fa fa-search" aria-hidden="true"></i></button></p>
			</div>
			<div class= "col-xs-12 col-sm-12 col-md-12 col-lg-3">
				<i class="fa fa-heart" aria-hidden="true" style ="color: white; font-size: 25px; margin-top: 35px; margin-left: 180px"></i>
			</div>
		</div>
		<div class = "row header-row2">
			<div class = "col-xs-12 col-lg-12 col-md-12 col-sm-12">
			<ul>
				<li><a style = "text-decoration-line: underline; color: burlywood; cursor: pointer;">Trang chủ</a></li>
				<li><a style="cursor: pointer;" href="../Back-end/Media/dong-ho-nam.php">Đồng hồ nam</a></li>
				<li><a style="cursor: pointer;" href="../Back-end/Media/dong-ho-nu.php">Đồng hồ nữ</a></li>
				<li><a style="cursor: pointer;" href="../Back-end/Media/cart.php">Giỏ Hàng</a></li>
				
			</ul>
			</div>
		</div>
	<div class = "full-slide">
		<div class = "cac-slide">
			<div class = "slide1 active">
			<div class = "row slider1 ">
				<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-2">
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class = "slide1-content slide1-content-slide">
						<h3 style="color: white; font-weight: bold">Mona Watch</h3>
						<h1 style = "color: white; font-weight: bold; font-size: 50px; font-family: allerta;padding-bottom: 15px;">Đồng hồ classico</h1>
						<p style = "color: white; font-size: 17px; padding-bottom: 17px;">Cùng với sự phát triển không ngừng của thời trang thế giới rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính hãng đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ,...</p>
						<button style = "background-color: #1C1B1B; color: white; width: 200px; height: 50px; border: 1px solid white; border-radius: 8px; font-size: 18px;">Xem sản phẩm</button>
					</div>
				</div>
				</div>
			</div>
			<div class = "slide1">
			<div class = "row slider2">
				<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-2">
				</div>
				<div class = "col-xs-12 col-lg-4 col-md-12 col-sm-12">
					<div class = "slide1-content">
						<h3 style="color: white; font-weight: bold">Mona Watch</h3>
						<h1 style = "color: white; font-weight: bold; font-size: 50px; font-family: allerta;padding-bottom: 15px;">Đồng hồ classico</h1>
						<p style = "color: white; font-size: 17px; padding-bottom: 17px;">Cùng với sự phát triển không ngừng của thời trang thế giới rất nhiều thương hiệu cho ra đời những mẫu đồng hồ nam chính hãng đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ,...</p>
						<button style = "background-color: #1C1B1B; color: white; width: 200px; height: 50px; border: 1px solid white; border-radius: 8px; font-size: 18px;">Xem sản phẩm</button>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>	
	<div class = "nut-slide">
		<div id="btn-prev"><i class="fa fa-chevron-left  " aria-hidden="true"></i></div>
		<div id = "btn-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    </div>
	
	<div class = "row xu-huong">
		<div class = "col-lg-6 col-md-12 col-xs-12 col-sm-12">
			<a href="../Back-end/Media/dong-ho-nam.php" style="text-decoration: none"><div class = "xu-huong-2019-nam">
			  <div class = "xu-huong-content">
					<p style="font-size:25px; color: white; width: 200px;">Xu Hướng 2019</p>
					<p style="font-size: 35px; color: white; font-weight: 700;">Đồng Hồ Nam</p>
				</div>
			</div></a>
		</div>
		<div class = "col-lg-6 col-md-12 col-xs-12 col-sm-12">
			<a href="../Back-end/Media/dong-ho-nu.php" style="text-decoration: none"><div class = "xu-huong-2019-nu">
			  <div class = "xu-huong-content">
					<p style="font-size:25px; color:#000000; width: 200px;">Xu Hướng 2019</p>
					<p style="font-size: 35px; color: #000000; font-weight: 700;">Đồng Hồ Nữ</p>
				</div>
			</div></a>
		</div>
	</div>
	</div>
	<div class = "bd-footer">
	<div class = "dang-ki-nhan-tt">
		<div class = "col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class = "form-email">
				<form action = "" method="post">
					<table >
						<tr>
							<td><input style="width: 400px;height: 40px; border: 1px solid white;" type = "text" name = "email-of-user" placeholder="Nhập email để nhận thông tin mới nhất về sản phẩm"/></td>
							<td><input style="width: 100px; height: 40px; background-color: #EDAF3D; border: none;" type="submit" value="Đăng Kí" name = "submit-email-of-user"/></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		</div>
      </div>
 <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright" style="color: black;">Company Name © 2018</p>
        </footer>
    </div>


	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#btn-next').click(function(event){
				$('.slide1-content-slide').removeClass('slide1-content-slide');
				var slide_sau = $('.active').next();
				if(slide_sau.length != 0){
					$('.active').addClass('bien-mat-ben-trai').one('animationend',function(event){
						$('.bien-mat-ben-trai').removeClass('active').removeClass('bien-mat-ben-trai');
					});
					slide_sau.addClass('active').addClass('di-vao-ben-trai').one('animationend', function(event){
						$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
					});
				}else{
					$('.active').addClass('bien-mat-ben-trai').one('animationend',function(event){
						$('.bien-mat-ben-trai').removeClass('active').removeClass('bien-mat-ben-trai');
					});
					$('.slide1:first-child').addClass('di-vao-ben-trai').addClass('active').one('animationend',function(event){
						$('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
					});
				}
				$('.slide1-content').addClass('slide1-content-slide').one('animationend',function(event){
					$('.slide1-content-slide').removeClass('slide1-content-slide');
				})
			});
			$('#btn-prev').click(function(event){
				var slide_truoc = $('.active').prev();
				$('.slide1-content-slide').removeClass('slide1-content-slide');
				if(slide_truoc.length != 0){
					$('.active').addClass('bien-mat-ben-phai').one('animationend',function(event){
						$('.bien-mat-ben-phai').removeClass('active').removeClass('bien-mat-ben-phai');
					});
					slide_truoc.addClass('active').addClass('di-vao-ben-phai').one('animationend', function(event){
						$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
					});
				}else{
					$('.active').addClass('bien-mat-ben-phai').one('animationend',function(event){
						$('.bien-mat-ben-phai').removeClass('active').removeClass('bien-mat-ben-phai');
					});
					$('.slide1:last-child').addClass('di-vao-ben-phai').addClass('active').one('animationend',function(event){
						$('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
					});
				}
				$('.slide1-content').addClass('slide1-content-slide').one('animationend',function(event){
					$('.slide1-content-slide').removeClass('slide1-content-slide');
				})
			});
		});
	</script>
</body>
</html>
