<?php
	$username = "nguyenhoangphuong";
	$password = "vungga12";
	$host = "localhost";
	$database = "quanlibanhang";

	$connect = mysqli_connect($host, $username, $password, $database);
	if(mysqli_connect_errno()){
		echo "Connection fail: ". mysqli_connect_errno();
		exit;
	}
?>