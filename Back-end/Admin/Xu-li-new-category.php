<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "../Libs/connect_database.php";
		$name = $_POST["name"];
		$type = $_POST["type"];
		$sql = "INSERT INTO category (name, type) VALUES ('$name', '$type')";
		$result = $connect->query($sql);
		if($result){
			header("Location: Manage-category.php");
		}
	?>
</body>
</html>