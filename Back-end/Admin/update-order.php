
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
		margin-left: 180px;	
		margin-top: 30px;
	}
</style>
</head>

<body>
	
	
<?php
	include "../Libs/connect_database.php";
	$sql = "SELECT * FROM order_detail WHERE order_id = ". $_GET["id"];
	$result = $connect->query($sql);
	while($row = mysqli_fetch_assoc($result)){
			
?>	
	
<div class = "form-add">
	<h3 style="font-size: 30px;text-align: center ">Trạng Thái Đơn Hàng</h3>
	<form method="post" action="Xu-li-cap-nhat-order.php" class = "form">
		<table cellpadding="6px;">
			
			<tr>
				<td><input type="hidden" name = "order_id" value="<?php echo $row["order_id"]?>"></td>
			</tr>
			<tr>
				<td><select name = "status">
					<option value="new">Mới</option>
					<option value="approved">Đã duyệt</option>
					<option value="delivered">Đã giao</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" value="Cập Nhật"></td>
			</tr>
		</table>
	</form>
	</br>
	</br>
	<a href="Manage-order.php" style ="text-decoration: none; margin-left: 150px;">Quay lại trang admin</a>	
</div>
<?php 
	}
?>

</body>
</html>