<?php
	include "../Libs/function.php";
	include "../Libs/connect_database.php";
	
	session_start();

if(isset($_POST["name"])){ 
		if(isset($_SESSION["login"])){
			$_SESSION["login"] = [];
		}
		$username = $_POST["name"];
		$password = $_POST["password"];
		
		$sql = "SELECT * FROM customer WHERE c_username = '$username' AND c_password = '$password'";
		$result = $connect->query($sql);
		$row = mysqli_fetch_row($result);
		if(is_array($row)){
		if(count($row)){
			$_SESSION["login"] = $row;
			if($_GET["theme"] == "mainpage"){
				header("Location: ../../Front-end/NguyenHoangPhuongAsm2.php");
			}
			else if($_GET["theme"] == "cart"){
				header("Location: cart.php");
			}
			else if($_GET["theme"] == "man"){
				header("Location: ../media/dong-ho-nam.php");
			}else if($_GET["theme"] == "man"){
				header("Location: ../media/dong-ho-nu.php");
			}
			else if($_GET["theme"] == "list-man"){
				header("Location: ../media/dong-ho-nam.php");
			}else if($_GET["theme"] == "list-woman"){
				header("Location: ../media/dong-ho-nu.php");
			}
		}
		}
		else{
	?>
			<script>
				alert("Sai tên đăng nhập hoặc mật khẩu");
			</script>
	<?php
		}
		
	}
	?>


<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<script src="../Libs/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../Libs/User-login.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Đăng Nhập</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="#" method="post">
						<input type="text"  value="Tên đăng nhập" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					<input type="password"  value="Mật khẩu" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						
					   
						<input type="submit" value="Đăng nhập">
					</form>	
					<div class="header-left-top">
						<div class="sign-up"> <h2>Hoặc</h2> </div>
					</div>
					<div class = "dont-have-account">
						<p style="margin-left: 50px;"><a href="Sign-up.php" style="color: white">Chưa có tài khoản? Đăng kí</a></p>
					</div>
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->


</body>
</html>