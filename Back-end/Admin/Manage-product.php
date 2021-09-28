<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>

<body>
		<?php
			include "../Libs/connect_database.php";
	
			$sql = "SELECT * FROM product";
			$result = $connect->query($sql);
		?>
	<div class = row>
	<div class = "col-lg-3 list">
		<ul>
			<li><a href = "Manage-product.php"> Quản lí sản phẩm</a></li>
			<li><a href = "Manage-category.php"> Quản lí danh mục sản phẩm</a></li>
			<li><a href = "Manage-order.php"> Quản lí đơn hàng</a></li>
			<li><a href = "Manage-user-account.php"> Quản lí Tài Khoản Khách Hàng</a></li>
			<li><a href="order-history.php">Lịch Sử Đơn Hàng</a><li>
			<li><a href = "AddNewItem.php">Thêm sản phẩm</a></li>
			<li><a href="Add-category.php">Thêm danh mục sản phẩm</a></li>
			<li><a href="Admin-signup.php">Đăng kí</a></li>
			<li><a href="index.php">Đăng xuất</a></li>
		<ul>
	</div>
	<div class = "col-lg-9 table-list">
		<table>
			<tr>
				<td><strong>Id</strong></td>
				<td><strong>Hình Ảnh</strong></td>
				<td><strong>Tên Sản Phẩm</strong></td>
				<td><strong>Hãng Sản Xuất</strong></td>
				<td><strong>Số Lượng</strong></td>
				<td><strong>Đơn Giá</strong></td>
				<td><strong>Ngày Đăng</strong></td>
				<td><strong>Show</strong></td>
				<td><strong>Xóa</strong></td>
				<td><strong>Sửa</strong></td>
			</tr>
				
		<?php
			while($row = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td><?php echo $row["id"];?></td>
				<td><img src = "<?php echo $row["image"];?>"></td>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["address"];?></td>
				<td><?php echo $row["amount"]?></td>
				<td><?php echo $row["price"]?>đ</td>
				<td><?php echo $row["update_date"]?></td>
				<td><input type="checkbox" name = "check" <?php echo $row["isShow"]?>></td>
				<td><a href="Delete-product.php?view=delete&id=<?php echo $row["id"]?>">Xóa</a></td>
				<td><a href="Edit-product.php?view=edit&id=<?php echo $row["id"]?>">Sửa</a></td>
			</tr>
	
	
		<?php
			}
		?>

		</table>
	</div>
	</div>
		<style>
			
			.col-lg-9{
				overflow-y: auto;
				height: 735px;
			}
			.col-lg-3{
				height: 735px;
				border: 1px solid #646566;
			}
			
			
			ul{
				margin-top: 150px;
				margin-left: 20px;
				position: relative;
			}
			ul li{
				padding-bottom: 18px;
				list-style-type: none;
			}
			ul li a{
				text-decoration: none;
				font-size: 18px;
				color: black;
			}
			.list{
				background-color: #A8DFE4;
			}
			td{
				width: 112px;
				padding-top: 30px;
				border: 1px solid black;
				text-align: center;
			}
			img{
				width:60px;
				height: 60px;
			}
			
		</style>
</body>
</html>