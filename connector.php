<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "hr_system");


if(!$conn){
	$error = "Failed to connect to mysql/db!";
}

$query = "SELECT user_name, user_type, user_password, user_ID FROM user";
$result = mysqli_query($conn, $query);

if(!$result){
	echo mysqli_error($conn);
	exit();
}

if(!$_SESSION['id']){
	header("location:index.php");
}
?>