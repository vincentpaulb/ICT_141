<?php

require("connector.php");

/* checks if the department doesn't have both the same name and location ID */
$duplicheckerquery = "SELECT * FROM department WHERE dept_name = '{$_POST['deptname']}' AND loc_ID = '{$_POST['locID']}'";  
$duplicheckerresult = mysqli_query($conn, $duplicheckerquery);

if($duplicheckerresult){ /* checks if query is valid */
	if($duplicheckerresult->num_rows == 0){ /* checks if there are no duplicates */

		$query = "INSERT INTO department ( `dept_name`, `loc_ID`) VALUES ( '{$_POST['deptname']}' , '{$_POST['locID']}' )";
		$result = mysqli_query($conn, $query);

		if(!$result){
			echo mysqli_error($conn);
		}

		else{
			header("location:home.php");
		}

	}
	else{

		$_SESSION['error'] = "The department you're trying to add already exists. The system doesn't allow you to make duplicates";
		header("location:createDept.php");

	}
}





?>