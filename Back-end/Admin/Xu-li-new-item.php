<?php
	include("../Libs/connect_database.php");
		if(!empty($_POST["name"]) && $_FILES["image"]["error"] != 4 && !empty($_POST["brand"]) && !empty($_POST["price"]) && !empty($_POST["content"]) && !empty($_POST["type"]) && !empty($_POST["amount"]) && !empty($_POST["category_id"])){
			move_uploaded_file($_FILES['image']['tmp_name'], "../../Front-End/image/" .$_FILES['image']['name']);
			$name = $_POST["name"];
			$image = '../../Front-End/image/'. $_FILES['image']['name'];
			$address = $_POST["brand"];
			$price = $_POST["price"];
			$content = $_POST["content"];
			$type = $_POST["type"];
			$category_id = $_POST["category_id"];
			$amount = $_POST["amount"];
			
			$query = "INSERT INTO product (name, image, price, content, address, type, category_id, amount) VALUES ('$name','$image','$price','$content','$address','$type','$category_id', '$amount')";
			
			$result = $connect->query($query);
			if($result){
				header("Location: Manage-product.php");
			}
		}else{
			header("Location: Manage-product.php");
		}
?>