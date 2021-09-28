<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include "../Libs/connect_database.php";
		$sql = "DELETE FROM product WHERE id = ".$_GET["id"];
		$result = $connect->query($sql);
		var_dump($sql);
		if($result){
			header("Location: Manage-product.php");
		}
	?>
</body>
</html>