<?php
	include "../Libs/connect_database.php";
	if(isset($_POST["submit"]) && isset($_POST["username"]) && isset($_POST["password"])){ // validate xem username, password da duoc khoi tao chua
		if(!empty($_POST["username"]) && !empty($_POST["password"])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
			$result = $connect->query($sql);
			var_dump($sql);
			if($result){
				header("location: Manage-product.php");
			}
		}
	}
?>