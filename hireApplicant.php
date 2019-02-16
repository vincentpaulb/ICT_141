<?php

require("connector.php");

$check = "SELECT applicant_status, applicant_ID FROM applicant WHERE applicant_ID  = {$_GET['id']}";
$result = mysqli_query($conn, $check);
$array = mysqli_fetch_array($result);

if($array['applicant_status'] == "Probation"){
	$query = "UPDATE applicant SET `applicant_status` = 'Assigned' WHERE `applicant_ID` = {$_GET['id']} ";
	$result = mysqli_query($conn, $query);
	header("location:manageJobOpening.php?id={$_SESSION['id']}");
}

else{
	$_SESSION['error'] = "Applicant is already assigned or in probation.";
	header("location:manageJobOpening.php?id={$_SESSION['id']}");
}



?>