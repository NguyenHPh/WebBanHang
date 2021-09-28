<?php
	session_start();
	$_SESSION["login"][1] = $_POST["address"];
	header("location: confirm-cart.php");
?>