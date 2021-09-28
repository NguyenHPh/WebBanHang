<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.form-add{
		position: absolute;
		top: 20%;
		left: 37%;
		border: 2px solid #1EDFB1;
		width: 450px;
		height: 300px;	
		background-image: linear-gradient(to right, #A0E9EC, #06888C  );
	}
	.form{
		margin-left: 40px;	
		margin-top: 40px;
	}
</style>
</script>
</head>

<body>
	
	
<div class = "form-add">
	<form  method="post" action="process-admin-signup.php" class = "form" id = "form-register" onSubmit = "return validateform()">
		<table cellpadding="6px;">
			<th colspan="2"><span style="font-size: 30px;">Đăng kí admin</span></th>
			<tr>
				<td>Tên đăng nhập: </td>
				<td><input type="text" name = "username" id="name" style = "width: 200px;" minlength = "6" required/></td>
			</tr>
			<tr>
				<td>Mật Khẩu: </td>
				<td><input type = "password" name = "password" id = "password" style = "width: 200px;"  minlength = "6" required></td>
			</tr>
			<tr>
				<td>Nhập Lại Mật Khẩu: </td>
				<td><input type = "password" name = "confirm" id = "password-confirmation" style = "width: 200px;" minlength = "6" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name = "submit" style = "width: 80px; cursor: pointer" id = "submit" value="Đăng kí"></td>
			</tr>
		</table>
	</form>
	</br>
	<a href="#" style ="text-decoration: none; margin-left: 150px;">Quay lại trang admin</a>	
</div>
<script type="text/javascript">
	function validateform(){
		var pass1 = document.getElementById("password").value;
		var pass2 = document.getElementById("password-confirmation").value;
		
		
		if(pass1 != pass2){
			alert("Mật khẩu nhập lại không đúng");
			return false;
		}
		alert("Đăng kí thành công");
		return true;
	}
</script>
</body>
</html>