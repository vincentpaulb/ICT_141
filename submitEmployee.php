<?php

require("connector.php");


$query = "INSERT INTO `employee`( `emp_name`, `emp_address`, `emp_contact_num`, `emp_age`, `emp_birthday`, `emp_email`, 
`emp_sex`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`, `marital_status`, `start_date`, `emp_status`, 
`school_name`, `school_address`, `school_year_graduated`, `dept_ID`, `job_position_ID`) 
		VALUES ('{$_POST['empname']}','{$_POST['empaddress']}','{$_POST['empnumber']}','{$_POST['empage']}','{$_POST['empbirthday']}','{$_POST['empemail']}',
		'{$_POST['empsex']}','{$_POST['fathername']}','{$_POST['fatheroccupation']}','{$_POST['mothername']}','{$_POST['motheroccupation']}', 
		'{$_POST['maritalstatus']}','{$_POST['empstartdate']}','{$_POST['empstatus']}','{$_POST['schoolname']}','{$_POST['schooladdress']}','{$_POST['schoolyear']}',
		'{$_POST['deptid']}','{$_POST['jobposid']}')";
$result = mysqli_query($conn, $query);

if(!result){
	echo mysqli_error($conn);
}
else{
	$_SESSION['msg'] = "Employee Added";
	header("location:home.php");
}
?>