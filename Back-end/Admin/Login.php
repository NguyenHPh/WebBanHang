

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<div class = "login-form" style="width: 300px; height: 200px;">
			<h3 style="text-align: center; font-size: 25px;">Xin chào admin</h3>
				<ul>
					<li><a href="Manage-product.php?">Quản lí sản phẩm</a></li>
					<li><a href="edit-admin-password.php?view=edit&id=<?php echo $adminId; ?>">Đổi mật khẩu</a></li>
					<li><a href="index.php">Đăng xuất</a></li>
				</ul>
		</div>
					
	<style>
		.login-form{
			position: absolute;
			left: 40%;
			top: 30%;
			border: 2px solid #610172;
			 background-image: linear-gradient(to left,#0C99DF, pink);
		}
		ul{
			list-style-type: none;
			margin-left: 50px;
			margin-top: 40px;
		}
		ul li a{
			text-decoration: none;	
			color: #091C8E;
		}
	</style>
</html>