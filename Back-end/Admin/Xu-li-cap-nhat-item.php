<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "../Libs/connect_database.php";
		$sql = "SELECT * FROM product WHERE id = ". $_POST["id"];
		$check = $connect->query($sql);
	if($check){
			$name = $_POST["name"];
			$address = $_POST["brand"];
			$price = $_POST["price"];
			$content = $_POST["content"];
			$type = $_POST["type"];
			$category_id = $_POST["category_id"];
			$amount = $_POST["amount"];
			$show = isset($_POST["check"]);
			if($show){
				$isShow = 'checked';
			}
			else{
				$isShow = "";
			}
			while($row = mysqli_fetch_assoc($check)){
				if($_POST["id"] == $row["id"]){
					$sql = "UPDATE product SET name = '$name', address = '$address', price = '$price',content =  '$content', type = '$type', category_id = '$category_id', amount = '$amount', isShow = '$isShow' WHERE id = ".$row["id"];
					$result = $connect->query($sql);
				}
				if($_FILES["image"]["error"] != 4){ //file phai co s
					move_uploaded_file($_FILES['image']['tmp_name'], "../../Front-End/image/" .$_FILES['image']['name']);
					$image = '../../Front-End/image/'. $_FILES['image']['name'];
					$sql = "UPDATE product SET image = '$image' WHERE id = ".$row["id"] ;
					$result = $connect->query($sql);
					
				}
				header("Location: Manage-product.php");
			}
		}
?>	
</body>
</html>