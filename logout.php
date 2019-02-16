<?php
	require("connector.php");
	unset($_SESSION['logged_in']);
	unset($_SESSION['user']);
	header("location:index.php");

?>