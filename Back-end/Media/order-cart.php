<?php
	include "../Libs/connect_database.php";
	session_start();
	$address = $_SESSION["login"][1];
		if(!empty($_SESSION["cart"])){
		for($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
			$cost = $_SESSION["cart"][$i][3] *  $_SESSION["cart"][$i][4];
			$productId = $_SESSION["cart"][$i][0];
			$amount = $_SESSION["cart"][$i][3];
			$customerId = $_SESSION["login"][6];
			$sql = "INSERT INTO order_detail (product_id, amount, c_id, cost, status,adress) VALUES ('$productId', '$amount', '$customerId','$cost', 'new', '$address')";
			$connect->query($sql);
			$query = "UPDATE product SET amount = amount - $amount WHERE id = $productId ";
			$connect->query($query);
		}
			unset($_SESSION["cart"]);
			header("location: cart.php");
		}else{
			header("location: cart.php");
		}
	
?>