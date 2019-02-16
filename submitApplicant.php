<?php

require("connector.php");


$query = "INSERT INTO `applicant`( `applicant_name`, `applicant_address`, `applicant_contact_num`, `applicant_age`, `applicant_birthday`, `applicant_email`, 
`applicant_sex`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`, `marital_status`, `application_date`, `applicant_status`, 
`school_name`, `school_address`, `school_year_graduated`, `job_order_ID`) 
		VALUES ('{$_POST['empname']}','{$_POST['empaddress']}','{$_POST['empnumber']}','{$_POST['empage']}','{$_POST['empbirthday']}','{$_POST['empemail']}',
		'{$_POST['empsex']}','{$_POST['fathername']}','{$_POST['fatheroccupation']}','{$_POST['mothername']}','{$_POST['motheroccupation']}', 
		'{$_POST['maritalstatus']}','{$_POST['empstartdate']}','Applicant','{$_POST['schoolname']}','{$_POST['schooladdress']}','{$_POST['schoolyear']}',
		'{$_POST['joborderid']}')";
$result = mysqli_query($conn, $query);

echo mysqli_error($conn);


$_SESSION['msg'] = "Applicant Added";
header("location:home.php");

?>