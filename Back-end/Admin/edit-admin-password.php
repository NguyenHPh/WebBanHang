<?php
	include "../Libs/connect_database.php";
	if(isset($_POST["password"]) && !empty($_POST["password"])){
		$adminId = $_GET["id"];
		$pass = $_POST["password"];
		$sql = "UPDATE admin SET password = '$pass' WHERE id = $adminId";
		$result = $connect->query($sql);
		if($result){
?>
			<script>
				alert("Đổi mật khẩu thành công");
			</script>
<?php		
			header("location: 	index.php");
		}
	}
	
?>

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
		height: 200px;	
		background-image: linear-gradient(to right, #A0E9EC, #06888C  );
	}
	.form{
		margin-left: 60px;	
		margin-top: 30px;
	}
</style>
</head>

<body>
	
<div class = "form-add">
	<form method="post" action="" class = "form">
		<table cellpadding="6px;">
			<tr>
				<td> Mật khẩu mới: </td>
				<td><input type="password" name = "password" style = "width: 200px;" required /></td>
			</tr>
				<td colspan="2" align="center"><input type="submit" name = "submit" style = "width: 80px; cursor: pointer" id = "submit" value="Cập Nhật"></td>
			</tr>
		</table>
	</form>
	</br>
	</br>	
</div>

</body>
</html>