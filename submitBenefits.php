<?php

require("connector.php");

/* checks if the benefit doesn't have both the same name and location ID */
$duplicheckerquery = "SELECT * FROM benefit WHERE benefit_name = '{$_POST['benefitname']}'";  
$duplicheckerresult = mysqli_query($conn, $duplicheckerquery);

if($duplicheckerresult){ /* checks if query is valid */
	if($duplicheckerresult->num_rows == 0){ /* checks if there are no duplicates */

		$query = "INSERT INTO benefit ( `benefit_name`, `benefit_info`) VALUES ( '{$_POST['benefitname']}' , '{$_POST['benefitinfo']}' )";
		$result = mysqli_query($conn, $query);

		if(!$result){
			echo mysqli_error($conn);
		}

		else{
			header("location:home.php");
		}

	}
	else{

		$_SESSION['error'] = "The Benefits you're trying to add already exists. The system doesn't allow you to make duplicates";
		header("location:createDept.php");

	}
}





?>