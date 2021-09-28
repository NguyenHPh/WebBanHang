<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
		$id = $_GET["id"];
		array_splice($_SESSION["cart"], $id, 1); // ko dung unset vi sau khi xoa phan tu trong mang unset ko reindex lai 
     	header("Location: cart.php");
	  //  unset($_SESSION["cart"]);
		
	?>
</body>
</html>