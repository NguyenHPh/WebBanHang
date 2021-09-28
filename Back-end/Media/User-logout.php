<?php
	session_start();
	unset($_SESSION["login"]);
	header("Location: ../../Front-end/NguyenHoangPhuongAsm2.php");
	
?>