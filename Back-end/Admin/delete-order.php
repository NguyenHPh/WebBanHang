<?php
	include "../Libs/connect_database.php";
	$orderId = $_GET["id"];
	$query = "SELECT * FROM order_detail WHERE order_id = $orderId";
		$result_2 = $connect->query($query);
		while($row_2 = mysqli_fetch_assoc($result_2)){
			$productId = $row_2["product_id"];
			$amount = $row_2["amount"];
			$customerId = $row_2["c_id"];
			$cost = $row_2["cost"];
			$status = "Đã xóa";
			
			$query_2 = "INSERT INTO order_history(order_id, product_id, amount, c_id, cost, status) VALUES ('$orderId', '$productId', '$amount', '$customerId', '$cost', '$status')";
			$connect->query($query_2);
			
			$query_3 = "UPDATE product SET amount = amount + '$amount'";
			$connect->query($query_3);
	
		}
	$sql = "DELETE FROM order_detail WHERE order_id = '$orderId'";
	$connect->query($sql);
	header("Location: Manage-order.php");
?>