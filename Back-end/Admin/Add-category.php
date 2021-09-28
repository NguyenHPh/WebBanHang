<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add category</title>
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
	
	
<div class = "form-add">
	<form method="post" action="Xu-li-new-category.php" class = "form">
		<table cellpadding="6px;">
			<th colspan="2"><span style="font-size: 30px;">Thêm Danh Mục</span></th>
			<tr>
				<td>Tên danh mục: </td>
				<td><input type="text" name = "name" style = "width: 200px;" required/></td>
			</tr>
			<tr>
				<td>Hãng: </td>
				<td><input type = "text" name = "type" style = "width: 200px;" required></td>
			</tr>
			<tr>
				<td colspan="2" text-align="center"><input type="submit" name = "submit" style = "width: 80px; cursor: pointer" id = "submit" value="Thêm"></td>
			</tr>
		</table>
	</form>
	</br>
	</br>
	<a href="Manage-product.php" style ="text-decoration: none; margin-left: 150px;">Quay lại trang admin</a>	
</div>

</body>
</html>
