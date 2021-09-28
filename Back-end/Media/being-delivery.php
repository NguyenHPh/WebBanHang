<?php
		include "../Libs/connect_database.php";
		session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delivering</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href = "../../Front-End/lib/Asm2.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../../Front-End/lib/Login-button.css">
	<style>
		td{
			padding: 15px;
			text-align: center;
		}
		
		.table-cart{
			margin-left: 200px;
			height: 430px;
			overflow-y: auto;
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
     					<a href="cart.php">Giỏ Hàng</a>
     					<a href="User-logout.php">Đăng Xuất</a>
						<a href="being-delivery.php">Sản Phẩm Đang Giao</a>
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
				<li><a style = " cursor: pointer;" href="../../Front-End/NguyenHoangPhuongAsm2.php">Trang chủ</a></li>
				<li><a style="cursor: pointer;" href="dong-ho-nam.php">Đồng hồ nam</a></li>
				<li><a style="cursor: pointer;" href="dong-ho-nu.php">Đồng hồ nữ</a></li>
				<li><a style="cursor: pointer; text-decoration-line: underline; color: burlywood;" href="../Back-end/Media/cart.php">Giỏ Hàng</a></li>
				
			</ul>
			</div>
		</div>
		<div class = "row">
			<div class = "col-lg-12 col-md-12 col-xs-12 col-sm-12">
				<h2 style="color: #ECA004;  text-align: center" >Sản phẩm đang giao</h2>
				<div class = "table-cart">
				<table style="margin-left: 30px;">
					<tr style="background-color: #837E7E">
						<td style="width: 50px; border-right: 1px solid white;"><strong>STT</strong></td>
						<td style="width: 150px; border-right: 1px solid white;"><strong>Hình Ảnh</strong></td>
						<td style="width: 170px; border-right: 1px solid white;"><strong>Tên Sản Phẩm</strong></td>
						<td style="width: 170px; border-right: 1px solid white;"><strong>Số lượng</strong></td>
						<td style="width: 170px; border-right: 1px solid white;"><strong>Đơn giá</strong></td>
						<td style="width: 170px; border-right: 1px solid white;"><strong>Thành Tiền</strong></td>
						<td style="width: 170px; border-right: 1px solid white;"><strong>Ngày đặt</strong></td>
						
					</tr>
					<?php
						$customerId = $_SESSION["login"][6];
						$sql = "SELECT * FROM order_detail WHERE c_id = $customerId";
						$result = $connect->query($sql);
						$i = 1;
						if(is_object($result)){
							while($row = mysqli_fetch_assoc($result)){
								$query = "SELECT * FROM product WHERE id =". $row["product_id"];
								$result_2 = $connect->query($query);
								if(is_object($result_2)){
									while($row_2 = mysqli_fetch_assoc($result_2)){
										
						?>
						<tr>
							<td style="width: 50px; font-weight: bold"><?php echo $i?></td>
							<td style="width: 150px;"><img style="width: 130px;" src = "<?php echo $row_2["image"]?>"></td>
							<td style="width: 170px;"><?php echo $row_2["name"]?></td>
							<td style="width: 170px;"><?php echo $row["amount"]?></td>
							<td style="width: 170px;"><?php echo $row_2["price"]?>đ</td>
							<td style="width: 170px;"><?php echo ($row_2["price"] * $row["amount"]) ?>đ</td>
							<td style="width: 170px;"><?php echo $row["date"]?></td>
						</tr>
					
					<?php
									}
								}
								$i++;
							}
						}
					?>
				</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>