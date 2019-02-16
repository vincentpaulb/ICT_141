<?php

require("connector.php");

$query = "INSERT INTO job_opening (`job_position_ID`, `dept_ID`, `benefit_ID`, `job_require`) 
			VALUES ( {$_POST['jobposID']}, {$_POST['dept_ID']}, 1, '{$_POST['jobrequire']}')";
			
$result = mysqli_query($conn, $query);

$_SESSION['msg'] = "Successfully added a Job Opening";
header("location:home.php");
?>