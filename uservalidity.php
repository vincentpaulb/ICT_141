<?php

$query = "SELECT user_name FROM user WHERE user.user_ID = {$_SESSION['id']}";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);


if($_SESSION['user_level'] < 1){ 
		$_SESSION['error'] = "You're not permitted to create departments.";
		echo $_SESSION['user_level'];
	//	header("location:home.php");
}


if($_SESSION['user'] != $user['user_name']){
	$_SESSION['error'] = "Invalid user login";
	header("location:index.php");
}


?> 