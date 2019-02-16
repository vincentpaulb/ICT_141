<?php

require("connector.php");

$query = "SELECT * FROM job_opening JOIN department ON job_opening.dept_ID = department.dept_ID JOIN location ON department.loc_ID = location.loc_ID";
$result = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html>

	<title>HRSystem - Employees</title>

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
	<h1 style="font-family: Century; font-weight: bold;">Job Openings<h2>
	
	<br>
	<center>
	<h3 style="font-family: Century;">Job Postion Number</h3>
	<span style="font-family: Century; font-size: 15px;">1 - Network Administrator</span>
	<span style="font-family: Century; font-size: 15px;">| 2 - Secretary</span>
	<span style="font-family: Century; font-size: 15px;">| 3 - Janitor</span>
	<span style="font-family: Century; font-size: 15px;">| 4 - Security Guard</span>
	</center>

	<br>
	
	<table align="center">
	<tr>
	<th style="background-color: #ff6666;">Job Order Number</th>
	<th style="background-color: #ff6666;">Job Position Number</th>
	<th style="background-color: #ff6666;">Job Requirement</th>
	<th style="background-color: #ff6666;">Department</th>
	<th style="background-color: #ff6666;">Location</th>
	</tr>
	
	<?php	
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<th style='background-color: #e6f7ff; font-size: 15px;'> <a href='manageJobOpening.php?id={$row['job_order_ID']}'> {$row['job_order_ID']} </a> </th>";
			echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['job_position_ID']} </th>";
			echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['job_require']} </th>";
			echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['dept_name']} </th>";
			echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['loc_name']} </th>";
			echo "</tr>";
		}
	?>
	</table>
</body>

</html>