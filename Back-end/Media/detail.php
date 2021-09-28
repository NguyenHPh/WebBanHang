<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<title>Product Detail</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href = "../Libs/back-end-asm2.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
<div class = "container-fluid">
	  <div class = "row header-row">
		  <div class = "container mx-auto">
			<div class = "col-xs-12 col-md-12 col-sm-12 col-lg-4">
				<p align="center" style="color: white"><i class="fa fa-map-marker" style="font-size: 25px; color: wheat; margin-top: 5px;"></i>&nbsp;319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p>
		    </div>
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-5">
				<p style="color: white; font-size: 17px;"><i class="fa fa-phone" aria-hidden="true" style="color: wheat; font-size: 27px; padding-top: 8px "></i>&nbsp;0769220162</p>
			</div>
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-3">
				<i class="fa fa-facebook" style="background-color: #4267B2; padding: 5px 10px; font-size: 20px; margin-top:10px;"></i>
 				<i class="fa fa-instagram" style="background-color: #3b6994; padding: 5px 8px; font-size: 20px; margin-top:10px;"></i>
 				<i class="fa fa-twitter" style="background-color: #2478ba; padding: 5px 5px; font-size: 20px; margin-top:10px;"></i>
 				<i class="fa fa-flickr" style="background-color: #e5086f; padding: 5px 7px; font-size: 20px; margin-top:10px;"></i>
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
				<li><a style=" cursor: pointer;" href="dong-ho-nu.php">Đồng hồ nữ</a></li>
				<li><a style="cursor: pointer;" href="cart.php">Giỏ Hàng</a></li>	
			</ul>
			</div>
		</div>
		<div class = "title">
			<h2 style="text-align: center;">Chi Tiết Sản Phẩm</h2>
		</div>
  		<?php
			include "../Libs/connect_database.php";
			$sql = 'SELECT * FROM product WHERE id ='.$_GET["id"] ;
			$result = $connect->query($sql);
			while($row = mysqli_fetch_assoc($result)){
				
			
		?>
			<div class = "content-detail">
				<img src = "<?php echo $row["image"]?>" id = "img"/>
				<div class = "content">
					<h3><strong>Tên sản phẩm:</strong> <?php echo $row["name"] ?></h3>
					<h3><strong>Hãng:</strong> <?php echo $row["address"]?></h3>
					<h3><strong>Giá:</strong>  <?php echo $row["price"]?></h3>
					<h3><strong>Tình trạng: </strong><?php if($row["amount"] > 0){echo "còn hàng";}else{echo "hết hàng";}?></h3>
					<h3><strong>Mô Tả:</strong> <?php echo $row["content"]?></h3>
					<br>
					<button class = "btn-buy"><a href="Add-product-to-cart.php?view=cart&id=<?php echo $row["id"]?>">Thêm Vào Giỏ Hàng<a></button>
				</div>
			</div>
			
	
		<?php
			
		}?>
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
	
	<style>
		.content-detail{
			margin-left: 350px;
			margin-top: 70px;
		}
		.content{
			display: inline-block;
			vertical-align: -140px;
			padding-left: 40px;
			width: 40%;
		}
		#img{
			border: 1px solid black;
			
		}
		.btn-buy{
			height: 40px;
			font-size: 15px;
			background: linear-gradient(to right, #E2BB49, #EC7F37 );
		}
		@-webkit-keyframes glowing {
 			 0% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
  			50% { background-color: #EEB40A; -webkit-box-shadow: 0 0 12px #EEB40A; }
  			100% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
		}
 
		@-moz-keyframes glowing {
		   0% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
  			50% { background-color: #EEB40A; -webkit-box-shadow: 0 0 12px #EEB40A; }
  			100% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
		}

		@-o-keyframes glowing {
		  0% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
  			50% { background-color: #EEB40A; -webkit-box-shadow: 0 0 12px #EEB40A; }
  			100% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
		}

		@keyframes glowing {
		  	0% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
  			50% { background-color: #EEB40A; -webkit-box-shadow: 0 0 12px #EEB40A; }
  			100% { background-color: #EE1014; -webkit-box-shadow: 0 0 5px #EE1014; }
		}

		.btn-buy {
		  -webkit-animation: glowing 1500ms infinite;
		  -moz-animation: glowing 1500ms infinite;
		  -o-animation: glowing 1500ms infinite;
		  animation: glowing 1500ms infinite;
		}
		.footer-basic {
		  padding:40px 0;
		  background: #ff5f6d;
		  background: -webkit-linear-gradient(to right, #ff5f6d, #ffc371);
		  background: linear-gradient(to right, #ff5f6d, #ffc371);
		  margin-top: 80px;
		}

		.footer-basic ul {
		  padding:0;
		  list-style:none;
		  text-align:center;
		  font-size:18px;
		  line-height:1.6;
		  margin-bottom:0;
		}

		.footer-basic li {
		  padding:0 10px;
		}

		.footer-basic ul a {
		  color:inherit;
		  text-decoration:none;
		  opacity:0.8;
		}

		.footer-basic ul a:hover {
		  opacity:1;
		}

		.footer-basic .social {
		  text-align:center;
		  padding-bottom:25px;
		}

		.footer-basic .social > a {
		  font-size:24px;
		  width:40px;
		  height:40px;
		  line-height:40px;
		  display:inline-block;
		  text-align:center;
		  border-radius:50%;
		  border:1px solid #ccc;
		  margin:0 8px;
		  color:inherit;
		  opacity:0.75;
		}

		.footer-basic .social > a:hover {
		  opacity:0.9;
		}

		.footer-basic .copyright {
		  margin-top:15px;
		  text-align:center;
		  font-size:13px;
		  color:#aaa;
		  margin-bottom:0;
		}
	</style>
	
</body>
</html>