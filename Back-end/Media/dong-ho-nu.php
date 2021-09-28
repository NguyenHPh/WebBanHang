<?php
	session_start();
?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<title>Woman Watch</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href = "../Libs/back-end-asm2.css"/>
<link rel="stylesheet" href="../../Front-End/lib/Login-button.css">
<link rel = "stylesheet" href="../Libs/button-buy-and-detail.css">
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
				  	<a href = "User-login.php?view=login&theme=woman"><span style = "color: white; font-size: 17px; vertical-align: -15px;">Đăng nhập/Đăng kí</span></a>
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
				<li><a style="cursor: pointer;" href="dong-ho-nam.php">Đồng hồ nam</a></li>
				<li><a style="text-decoration-line: underline; color: burlywood; cursor: pointer;" href="dong-ho-nu.php">Đồng hồ nữ</a></li>
				<li><a style="cursor: pointer;" href="cart.php">Giỏ Hàng</a></li>	
			</ul>
			</div>
		</div>
		<div class = "row" style="text-align: center;">
			<h2><strong>Đồng Hồ Nữ</strong></h2>
		</div>
		<?php
			include "../Libs/connect_database.php";
			
			$sql = "SELECT * FROM category WHERE isShow = 'checked' ";
		
			$result = $connect->query($sql);
			echo "<ul>";
			while($row = mysqli_fetch_assoc($result)){
		?>		
			<li><a href = "list-in-woman.php?view=listproduct&id=<?php echo $row["id"]; ?>" style="color: black"><?php echo $row['name']; ?></a></li>
		
		
		
			<?php
			}
			echo "</ul>";
			?>
			<?php
				
			?>
		
		<?php
			$sql = 'SELECT * FROM product WHERE type = "woman" AND isShow = "checked" ';
			$query =  $connect->query($sql);
		
			while($row = mysqli_fetch_assoc($query)){
		?>
				<div class = "col-lg-3 col-md-12 col-sm-12 col-xs-12">
					<div class = "img-center">
						<img src="<?php echo $row["image"];?>"/>
						<div class = "caption">
							<h2><?php echo $row["name"];?></h2>
							<h3><?php echo $row["price"];?>VNĐ</h3>
							<button class = "snip1547" style = "width: 110px;"><a style="color: wheat" href="detail.php?view=detail&id=<?php echo $row["id"]; ?>">Chi Tiết</a></button>
							<button style = "width: 120px;" class = "snip1547"><a style="color: wheat" href="Add-product-to-cart.php?view=cart&id=<?php echo $row["id"]?>">Mua Ngay</a></button>
						</div>
					</div>
				</div>
		
		<?php
			}
		?>
  
    </div>
		<style>
			tr{
				text-align: center;
			}
			ul{
				text-align: center;
			}
			.caption{
				margin-left: 50px;
			}
	</style>
		</style>
</body>
</html>