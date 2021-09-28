<?php
		include "../Libs/connect_database.php";
		session_start();
		if(!isset($_SESSION["cart"])) $_SESSION["cart"] = [];
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Confirm cart</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href = "../../Front-End/lib/Asm2.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../../Front-End/lib/Login-button.css">

	<style>
		@import url(https://fonts.googleapis.com/css?family=Exo+2:400,200italic);
		body {
		  background:#f5f1e7;
		}

		.btn {
		  background:transparent;
		  text-align:center;
		  letter-spacing:1px;
		  font-size:1.4em;
		  line-height:0.1em;
		  font-weight:300;
		  top:0;
		  left:0;
		  right:0;
		  bottom:0;
		  margin:auto;
		  width:200px;
		  height:20px;
		  padding:20px 0;
		  border:1px solid #363858;
		  overflow:hidden;
		  display:inline-block;
		  transition:all 0.5s;
		  box-shadow:0px 3px 0px #363858;
		  border-radius: 4px;
		  margin-left: 400px;
		 
		}

		.btn:hover, .btn:active {
		  text-decoration: none;
		  color:#fff;
		  border-color:#363858;
		  background:#363858;
		  box-shadow:0 0 0 #363858;
		}

		.btn-label {
		  display:inline-block;
		  position:relative;
		  padding-right:0;
		  transition:padding-right 0.5s;
		  color:#363858;
		  font-family: 'Exo 2', sans-serif;
		  font-weight:200;
		}
		.btn-label:after {
		  content: "";
		  position:absolute;
		  right:-50px;
		  opacity:0;
		  top:22%;
		  width:10px;
		  height:10px;
		  margin-right:-10px;
		  background:rgba(0,0,0,0);
		  border:3px solid #fff;
		  border-top:none;
		  border-right:none;
		  transition: opacity 0.5s, top 0.5s, right 0.5s;
		  transform:rotate(225deg);
		}

		.btn:hover .btn-label,
		.btn:active .btn-label {
		  padding-right:30px;
		  color:#f5f1e7;
		}

		.btn:hover .btn-label:after,
		.btn:active .btn-label:after {
		  transition:opacity: 0.5s, top 0.5s, right 0.5s;
		  opacity:1;
		  right:10px;
		  top:22%;
		}
		td{
			border: 1px solid black;
			padding: 15px;
			text-align: center;
		}
		tr{
			border-bottom: 1px solid black;
		}
		.table-cart{
			
			height: 430px;
			overflow-y: auto;
		}
		#address,#phone,#firstname{
			width: 400px;
		}
		input.register {
			width: 335px;
			margin-left: 30px;
			margin-top: 30px;
			display: block;
			height: 50px;
			text-align: center;
			font-size: 17px;
			font-weight: normal;
			color: #fff;
			background-color:#3970b0;
			border-color: transparent;
			font-family: 'Raleway', sans-serif;
			/*-- w3ls --*/
			transition:all 0.5s ease-in-out;
			-webkit-transition:all 0.5s ease-in-out;
			-moz-transition:all 0.5s ease-in-out;
			-o-transition:all 0.5s ease-in-out;
			-ms-transition:all 0.5s ease-in-out;
			cursor:pointer;
		}
		
	</style>
</head>

<body>
	<div class = "container-fluid">
	  <div class = "row header-row">
		  <div class = "container mx-auto">
			<div class = "col-xs-12 col-md-12 col-sm-12 col-lg-4">
				<p align="center" style="color: white"><i class="fa fa-map-marker" style="font-size: 25px; color: wheat; margin-top: 5px;"></i>&nbsp;319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p>
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
						<a href="being-delivery.php">Sản Phẩm Đang Giao</a>
     					<a href="User-logout.php">Đăng Xuất</a>
   						</div>
 					</div>	
				   <?php
                         }else{
					?>
				  	<a href = "User-login.php?view=login&theme=mainpage"><span style = "color: white; font-size: 17px; vertical-align: -15px;">Đăng nhập/Đăng kí</span></a>
					<?php		
						  }
					?>
				</div>
			</div>
		</div>
	    <div class = "row header-row1">
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<img class = "logo" src="../../Front-End/image/logo-mona-2.png" width = "250px" style = "margin-left: 100px; margin-top: 10px;">
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
				<li><a style = "cursor: pointer;" href = "../../Front-End/NguyenHoangPhuongAsm2.php">Trang chủ</a></li>
				<li><a style="cursor: pointer;" href = "dong-ho-nam.php">Đồng hồ nam</a></li>
				<li><a style="cursor: pointer;" href="dong-ho-nu.php">Đồng hồ nữ</a></li>
				<li><a style="cursor: pointer;" href="cart.php">Giỏ Hàng</a></li>	
			</ul>
			</div>
		</div>
	<div class = "container-fluid">
		<div class = "row">
			<div class = "col-lg-4">
				<h2>Xác nhận thông tin khách hàng</h2>
				<div class="content-w3ls">
					<div class="content-agile1">
					</div>
					<div class="content-agile2">
						<form action="update-user-infor.php" method="post">
							<div class="form-control w3layouts"> 
								<input type="text" id="firstname" name="name" placeholder="Tên Khách Hàng" title="Please enter your First Name" value="<?php echo $_SESSION["login"][0]?>" required="" readonly>
							</div>

							<div class="form-control w3layouts">	
								<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["login"][3]?>" placeholder="Số điện thoại" required="" readonly>
							</div>
							<div class="form-control w3layouts">	
								<input type="text" id="address" name="address" value="<?php echo $_SESSION["login"][1]?>" placeholder="Địa chỉ"  required="">
							</div>		
							<input type="submit" class="register" value="Cập nhật">
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class = "col-lg-8">
				<h2 style="color: #ECA004;  text-align: center" >Xác Nhận Đơn Hàng</h2>
				<div class = "table-cart">
				<form class = "" action="update-cart.php" method="post">
					<table style="margin-left: 30px; border: 1px solid black;">
						<tr style="background-color: #837E7E">
							<td style="width: 50px; border-right: 1px solid white;"><strong>STT</strong></td>
							<td style="width: 150px; border-right: 1px solid white;"><strong>Hình Ảnh</strong></td>
							<td style="width: 170px; border-right: 1px solid white;"><strong>Tên Sản Phẩm</strong></td>
							<td style="width: 170px; border-right: 1px solid white;"><strong>Số lượng</strong></td>
							<td style="width: 170px; border-right: 1px solid white;"><strong>Đơn giá</strong></td>
							<td style="width: 170px; border-right: 1px solid white;"><strong>Thành Tiền</strong></td>
						</tr>
						<?php
							if(isset($_SESSION["cart"]) && is_array($_SESSION["cart"])){
								$tong = 0;
								for($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
									$tt = $_SESSION["cart"][$i][3] *  $_SESSION["cart"][$i][4];
									$tong = $tong + $tt;
									$sql = "SELECT amount FROM product WHERE id = ". $_SESSION["cart"][$i][0];
									$result = $connect->query($sql);
									while($row = mysqli_fetch_assoc($result)){
						?>	
							<tr>
								<td style="width: 50px; font-weight: bold"><?php echo ($i+1)?></td>
								<td style="width: 150px;"><img style="width: 130px;" src = "<?php echo $_SESSION["cart"][$i][1]?>"></td>
								<td style="width: 170px;"><?php echo $_SESSION["cart"][$i][2]?></td>
								<td style="width: 170px; align-content: center"><?php echo $_SESSION["cart"][$i][3]?></td>
								<td style="width: 170px;"><?php echo $_SESSION["cart"][$i][4]?>đ</td>
								<td style="width: 170px;"><?php echo $tt?>đ</td>
							</tr>
						<?php
									}
						?>
							<tr> 
								<td colspan="6"><button style="float: left"><a href="cart.php">Quay Lại</a></button>
								<button style="float: right"><a href="order-cart.php">Xác Nhận</a></button></td>
							</tr>
						<?php
								}
							}

						?>
					</table>
					<p style="font-size: 18px; margin-left:700px; margin-top: 20px;">Phí vận chuyển: <?php echo 23000;?>đ</p>
					<p style="font-size: 18px; margin-left:700px; margin-top: 20px;">Tổng tiền: <?php echo $tong + 23000;?>đ</p>
				</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>