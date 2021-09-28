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
		height: 500px;	
		background-image: linear-gradient(to right, #A0E9EC, #06888C  );
	}
	.form{
		margin-left: 60px;	
		margin-top: 10px;
	}
</style>
</head>

<body>
	
<?php
	include "../Libs/connect_database.php";
	$sql = "SELECT * FROM product WHERE id = ". $_GET["id"];
	$result = $connect->query($sql);
	while($row = mysqli_fetch_assoc($result)){
			
?>	
	
<div class = "form-add">
	<form method="post" action="Xu-li-cap-nhat-item.php" enctype="multipart/form-data" class = "form">
		<table cellpadding="6px;">
			<th colspan="2"><span style="font-size: 30px;">Sửa Sản Phẩm</span></th>
			<tr>
				<td>Tên sản phẩm: </td>
				<td><input type="text" name = "name" style = "width: 200px;" value = "<?php echo $row["name"];?>"/></td>
			</tr>
			<tr>
				<td>Chọn file ảnh</td>
				<td><input type = "file" name="image" style = "width: 200px;" /></td>
			</tr>
			<tr>
				<td>Hãng: </td>
				<td><input type = "text" name = "brand" style = "width: 200px;" value="<?php echo $row["address"]?>"></td>
			</tr>
			<tr>
				<td>Giá: </td>
				<td><input type = "text" name = "price" style = "width: 200px;" value="<?php echo $row["price"];?>"></td>
			</tr>
			<tr>
				<td>Số lượng: </td>
				<td><input type = "text" name = "amount" style = "width: 200px;" value="<?php echo $row["amount"];?>"></td>
			</tr>
			<tr>
				<td>Mã danh mục: </td>
				<td><select name="category_id">
					<?php
						$sql1 = "SELECT * FROM category";
						$result2 = $connect->query($sql1);
							while($row2 = mysqli_fetch_assoc($result2)){
								if($row["category_id"] == $row2["id"]){
					?>
								<option value="<?php echo $row2["id"]?>" selected><?php echo ($row2["id"]. "-" .$row2["name"])?></option>
					<?php
								}else{
					?>
								<option value="<?php echo $row2["id"]?>"><?php echo ($row2["id"]. "-" .$row2["name"])?></option>
					<?php
								
								}
							}
						
					?>	
				</select></td>
			</tr>
			<tr>
				<td>Dành cho: </td>
				<td><select name = "type">
					<?php if($row["type"] == "man"){
					?>	
					<option selected value = "man">Nam</option>
					<option value = "woman">Nữ</option>
					<?php
					}else if($row["type"] == "woman"){
					?>
					<option selected value = "man">Nam</option>
					<option selected  value = "woman">Nữ</option>
					<?php
					}
					?>
				</select></td>
			</tr>
			<tr>
				<td>Mô tả: </td>
				<td><textarea name = "content" style="height: 60px; width: 200px" ><?php echo $row["content"];?></textarea></td>
			</tr>
			<tr>
				<td>Hiển thị: </td>
				<td><input type = "checkbox" name = "check" <?php echo $row["isShow"]?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name = "id" value="<?php echo $row["id"];?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name = "submit" style = "width: 80px; cursor: pointer" id = "submit" value="Cập nhật"></td>
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