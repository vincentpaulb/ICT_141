<?php

require("connector.php");

$duplicheckerquery = "SELECT * FROM job_position WHERE job_position_name = '{$_POST['jobposname']}'";  
$duplicheckerresult = mysqli_query($conn, $duplicheckerquery);

if($duplicheckerresult){ /* checks if query is valid */
	if($duplicheckerresult->num_rows == 0){ /* checks if there are no duplicates */

		$query = "INSERT INTO job_position ( `job_position_name`) VALUES ( '{$_POST['jobposname']}')";
		$result = mysqli_query($conn, $query);

		if(!$result){
			echo mysqli_error($conn);
		}

		else{
			header("location:home.php");
		}

	}
	else{

		$_SESSION['error'] = "The job position you're trying to add already exists. The system doesn't allow you to make duplicates";
		header("location:createJobPosition.php");

	}
}
?>