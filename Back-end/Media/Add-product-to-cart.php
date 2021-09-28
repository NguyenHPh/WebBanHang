<?php

	include "../Libs/connect_database.php";

	session_start();

	if(isset($_GET["id"]) && $_GET["id"]){
			$sql = "SELECT * FROM product WHERE id = ".$_GET["id"];
			$result = $connect->query($sql);
			while($row = mysqli_fetch_assoc($result)){
				$id = $row["id"];
				$image = $row["image"];
				$name = $row["name"];
				$amount = 1;
				$price = $row["price"];
				$flag = 0;// biến để check xem có sản phẩm đó trong mảng hay chưa
				for($i = 0; $i < sizeof($_SESSION["cart"]); $i++){ // kiểm tra xem trong giỏ hàng đã có sản phẩm đó chưa
					if($_SESSION["cart"][$i][0] == $id){
						$new_amount = $_SESSION["cart"][$i][3] + $amount;
						$_SESSION["cart"][$i][3] = $new_amount;
						$flag = 1;
						break;
					}
				}
				if($flag == 0){  	
					$cart = [$id,$image, $name, $amount, $price];
					$_SESSION["cart"][] = $cart;
				}
			}
		}
	header("Location: cart.php");
?>