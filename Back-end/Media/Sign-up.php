
<?php 
	include("../Libs/connect_database.php");

	if(isset($_POST["firstname"])){ // kiểm tra xem biến $_POST["name"] đã được khởi tạo chưa tức là kiểm tra xem có submit chưa
		if(!empty($_POST["firstname"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["address"]) && !empty($_POST["account"]) && !empty($_POST["password"])){
			$custName = $_POST["firstname"];
			$custEmail = $_POST["email"];;
			$custPhone = $_POST["phone"];
			$custAddress = $_POST["address"];
			$custAccount = $_POST["account"];
			$custPassword = $_POST["password"];
			
			$sql = "INSERT INTO customer(c_name, c_address, c_email, c_phone, c_username, c_password) VALUES ('$custName', '$custAddress', '$custEmail', '$custPhone', '$custAccount', '$custPassword')";
			
			$result = $connect->query($sql);
			if($result){
				
			?>
			<script>
				alert("Bạn Đã Đăng Kí Thành Công");
			</script>
<?php
		    header("Location: User-login.php");
			}
		}
	}
?>

<!doctype html>
<html>
<head>
<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="../Libs/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="../Libs/User-signup.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<h1 class = "w3ls" style = "font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">Đăng Kí</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">Mona Watch</h2>
		<p class="agileits2">Sign up for buying watch</p>
	</div>
	<div class="content-agile2">
		<form action="Sign-up.php" method="post">
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="firstname" placeholder="Tên Khách Hàng" title="Please enter your First Name" required="">
			</div>

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>
			<div class="form-control w3layouts">	
				<input type="text" id="phone" name="phone" placeholder="Số điện thoại" required="">
			</div>
			<div class="form-control w3layouts">	
				<input type="text" id="address" name="address" placeholder="Địa chỉ"  required="">
			</div>
			
			<div class="form-control agileinfo">	
				<input type="text" class="lock" name="account" placeholder="Tên Đăng Nhập" id="password2" required="">
			</div>	

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Mật Khẩu" id="password1" required="">
			</div>			
			
			<input type="submit" class="register" value="Đăng Kí">
		</form>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>