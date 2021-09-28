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
				<td><strong>Tên khách hàng</strong></td>
				<td><strong>Số điện thoại</strong></td>
				<td><strong>Địa chỉ</strong></td>
				<td><strong>ID sản phẩm</strong></td>
				<td><strong>Số lượng</strong></td>
				<td><strong>Giá</strong></td>
				<td><strong>Ngày Xóa/Giao Hàng</strong></td>
				<td><strong>Trạng thái đơn hàng</strong></td>
			</tr>
			<?php
				$sql = "SELECT * FROM order_history";
				$result = $connect->query($sql);
			    if(is_object($result)){
					while($row = mysqli_fetch_assoc($result)){
						$query = "SELECT * FROM customer WHERE c_id = ".$row["c_id"];
						$result_2 = $connect->query($query);
						if(is_object($result_2)){
							while($row_2 = mysqli_fetch_assoc($result_2)){
			 ?>					
								<tr>
									<td><?php echo $row["order_id"]?></td>
									<td><?php echo $row_2["c_name"]?></td>
									<td><?php echo $row_2["c_phone"]?></td>
									<td><?php echo $row_2["c_address"] ?></td>
									<td><?php echo $row["product_id"] ?></td>
									<td><?php echo $row["amount"] ?></td>
									<td><?php echo $row["cost"] ?>đ</td>
									<td><?php echo $row["date"] ?></td>
									<td><?php echo $row["status"];?></td>
								</tr>
			<?php
							}
						}
					}
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
				width: 125px;
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