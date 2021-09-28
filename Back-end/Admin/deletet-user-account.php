<?php
	include "../Libs/connect_database.php";
	$sql1 = "DELETE FROM order_detail WHERE c_id = ".$_GET["id"];
	$result1 = $connect->query($sql);
	$sql = "DELETE FROM customer WHERE c_id = ". $_GET["id"];
	$result = $connect->query($sql);
	if($result){
		header("location: manage-user-account.php");
	}
?>