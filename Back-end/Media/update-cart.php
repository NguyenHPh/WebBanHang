<?php
	session_start();
	for($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
		$id = "amount_$i";
		$newAmount = $_POST["$id"];
		$_SESSION["cart"][$i][3] = $newAmount;
	}
	header("Location: cart.php");
?>