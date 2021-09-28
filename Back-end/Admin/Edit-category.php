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
		margin-left: 60px;	
		margin-top: 30px;
	}
</style>
</head>

<body>
	
	
<?php
	include "../Libs/connect_database.php";
	$sql = "SELECT * FROM category WHERE id = ". $_GET["id"];
	$result = $connect->query($sql);
	while($row = mysqli_fetch_assoc($result)){
			
?>	
	
<div class = "form-add">
	<form method="post" action="Xu-li-cap-nhat-category.php" class = "form">
		<table cellpadding="6px;">
			<th colspan="2"><span style="font-size: 30px;">Sửa Danh Mục</span></th>
			<tr>
				<td>Tên danh mục: </td>
				<td><input type="text" name = "name" style = "width: 200px;" value = "<?php echo $row["name"]?>"/></td>
			</tr>
			<tr>
				<td>Hãng: </td>
				<td><input type = "text" name = "type" style = "width: 200px;"value = "<?php echo $row["type"]?>"></td>
			</tr>
			<tr>
				<td>Hiển Thị: </td>
				<td><input type = "checkbox" name = "check" <?php echo $row["isShow"]?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name = "id" value="<?php echo $row["id"];?>"></td>
			<tr>
				<td colspan="2" align="center"><input type="submit" name = "submit" style = "width: 80px; cursor: pointer" id = "submit" value="Cập Nhật"></td>
			</tr>
		</table>
	</form>
	</br>
	</br>	
</div>
<?php 
	}
?>

</body>
</html>