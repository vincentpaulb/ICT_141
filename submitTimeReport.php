<?php
	
require("connector.php");
	
$query = " INSERT INTO time_report ( `report_status`,  `report_date_issued`, `total_work_hours`, `emp_ID`)
			VALUES ('SUBMITTED', CURRENT_DATE(), {$_POST['totalworkhours']}, {$_SESSION['emp_ID']})";
$result= mysqli_query($conn, $query);
echo mysqli_error($conn);
unset($_SESSION['emp_ID']);
	
header("location:viewEmployeesTimeReports.php?id={$_SESSION['id']}");
?>