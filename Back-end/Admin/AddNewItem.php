<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Productt</title>
<style>
	.form-add{
		position: absolute;
		top: 20%;
		left: 37%;
		border: 2px solid #1EDFB1;
		width: 450px;
		height: 480px;	
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
?>
	
<div class = "form-add">
	<form method="post" action="Xu-li-new-item.php" enctype="multipart/form-data" class = "form">
		<table cellpadding="6px;">
			<th colspan="2"><span style="font-size: 30px;">Thêm Sản Phẩm</span></th>
			<tr>
				<td>Tên sản phẩm: </td>
				<td><input type="text" name = "name" style = "width: 200px;" required/></td>
			</tr>
			<tr>
				<td>Chọn file ảnh</td>
				<td><input type = "file" name="image" style = "width: 200px;" required/></td>
			</tr>
			<tr>
				<td>Hãng: </td>
				<td><input type = "text" name = "brand" style = "width: 200px;" required></td>
			</tr>
			<tr>
				<td>Giá: </td>
				<td><input type = "text" name = "price" style = "width: 200px;" required></td>
			</tr>
			<tr>
				<td>Số lượng: </td>
				<td><input type = "text" name = "amount" style = "width: 200px;" required></td>
			</tr>
			<tr>
				<td>Mã danh mục: </td>
				<td><select name = "category_id">
					<?php
						$sql = "SELECT id, name FROM category";
						$result = $connect->query($sql);
						while($row = mysqli_fetch_assoc($result)){
							
					?>
					 	<option value = "<?php echo $row["id"]?>"><?php echo ($row["id"]." - ".$row["name"] )?></option>
					
					<?php
						}
					?>
				</select></td>
			</tr>
			<tr>
				<td>Dành cho: </td>
				<td><select name = "type">
					<option value = "man">Nam</option>
					<option value = "woman">Nữ</option>
				</select></td>
			</tr>
			<tr>
				<td>Mô tả: </td>
				<td><textarea name = "content" style="height: 60px; width: 200px"></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name = "id"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name = "submit" style = "width: 80px; cursor: pointer" id = "submit" value="Thêm"></td>
			</tr>
		</table>
	</form>
	</br>
	</br>
	<a href="Manage-product.php" style ="text-decoration: none; margin-left: 150px;">Quay lại trang admin</a>	
</div>

</body>
</html>