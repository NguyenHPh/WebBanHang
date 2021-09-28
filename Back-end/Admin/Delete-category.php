<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "../Libs/connect_database.php";
		$id = $_GET["id"];
		$sql = "DELETE FROM category WHERE id = '$id'";
		$result = $connect->query($sql);
		if($result){
			header("Location: Manage-category.php");
		}
	?>
</body>
</html>