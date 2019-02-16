<?php

require("connector.php");

$query = "SELECT * FROM time_report JOIN employee ON time_report.emp_ID = employee.emp_ID
			JOIN payroll ON payroll.time_report_ID = time_report.time_report_ID
			WHERE time_report.time_report_ID = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$array = mysqli_fetch_array($result);

?>


<<!DOCTYPE html>
<html>

	<title>HRSystem - Create Location</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="background.css">

</head>

<body id="bg">
	<br>
	<br>	
	<br>
	<br>

	<div class="container">
		<div class="row">	
			<a href="viewEmployeesTimeReports.php" style="font-size: 15px; font-family: Century; font-weight: bold; text-decoration: none;"> Back </a>

			<br>
			<br>
			<br>

			<h2 style="font-family: Century; font-weight: bold;">Time Report </h2>
			<br>


			<?php
				echo "<p style='font-family: Century;'> <strong>Employee Name: </strong> {$array['emp_name']} </p>";
				echo "<p style='font-family: Century;'> <strong>Status: </strong> {$array['report_status']}</p>";
				echo "<p style='font-family: Century;'> <strong>Total Work Hours: </strong> {$array['total_work_hours']} hr/s</p>";
				echo "<p style='font-family: Century;'> <strong>Date Issued: </strong> {$array['report_date_issued']}</p>";	
	
				if($_SESSION['user_level'] >= 3 && $array['report_status'] != "APPROVED"){
					echo "<a href=approveTimeReport.php?id={$_GET['id']}>Approve </a>";
				}
	
				if($array['time_report_ID'] != NULL){
					echo "<br>";
					echo "<h3 style='font-family: Century;'> <strong>Payroll Info</strong> </h3>";
					echo "<br>";
					echo "<p style='font-family: Century;'> <strong>Gross Pay: </strong> P{$array['gross_pay']}</p>";
					echo "<p style='font-family: Century;'> <strong>Total Adjustments: </strong> P{$array['total_adjustments']}</p>";
					echo "<p style='font-family: Century;'> <strong>Net Pay: </strong> P{$array['net_pay']}</p>";
				}
			?>

		</div>
	</div>
	
</body>
</html>