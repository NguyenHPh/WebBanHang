<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php
		include "../Libs/connect_database.php";
		$sql = "SELECT * FROM category WHERE id = ". $_POST["id"];
		$check = $connect->query($sql);
	if($check){
			$name = $_POST["name"];
			$type = $_POST["type"];
			$checkShow = isset($_POST["check"]);
			if($checkShow){
				$show = "checked";
			}
			else{
				$show = "";
			}
			while($row = mysqli_fetch_assoc($check)){
					$sql = "UPDATE category SET name = '$name', type = '$type', isShow = '$show' WHERE id = ".$row["id"];
					$result = $connect->query($sql);
				if($result){
					header("Location: Manage-category.php");
				}
		}
	}
?>
</body>
</html>