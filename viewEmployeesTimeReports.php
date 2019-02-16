<?php

require("connector.php");

$query = "SELECT employee.emp_ID AS ID, time_report.emp_ID, emp_name, time_report.time_report_ID, report_status, payroll_ID FROM employee 
			LEFT JOIN time_report ON time_report.emp_ID = employee.emp_ID
			LEFT JOIN payroll ON payroll.time_report_ID = time_report.time_report_ID";
$result = mysqli_query($conn, $query);


?>



<!DOCTYPE html>
<html>

	<title>HRSystem - Time Reports</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="view.css">

</head>

<body id="bg">

	<br>
	<br>	
	<br>
	<br>
	<br>
	<br>


	<div class="container">
		<div class="row">	
			<a href="home.php" style="font-size: 15px; font-family: Century; font-weight: bold; text-decoration: none;"> Back </a>

			<br>
			<br>
			<h2 style="font-family: Century; font-weight: bold; text-align: center;">TIME REPORTS</h2>
			<br>
			<table align="center">
				<tr>
					<th style="background-color: #ff6666;">Employee ID</th>
					<th style="background-color: #ff6666;">Full Name</th>
					<th style="background-color: #ff6666;">Time Report</th>
					<th style="background-color: #ff6666;">Info</th>
				</tr>
	
				<?php	
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['ID']} </th>";
						echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['emp_name']} </th>";
						if($row['time_report_ID'] == NULL){
							echo "<th style='background-color: #66b3ff; font-size: 15px;'> None</th>";
				
						}
						else{
							echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['report_status']} </th>";
							echo "<th style='background-color: #e6f7ff; font-size: 15px;'> <a style='font-size: 15px; text-decoration: none; color: #992600;' href='TimeReportInfo.php?id={$row['time_report_ID']}&payrollID={$row['emp_ID']}'>View</th>";
						}
						if($_SESSION['user_level'] == 2){
						echo "<th style='background-color: #e6f7ff; font-size: 15px;'> <a href='createTimeReport.php?id={$row['ID']}'>Create Time Report</th>";
						}
			
						echo "</tr>";
					}
				?>
	
			</table>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

</body>
</html>