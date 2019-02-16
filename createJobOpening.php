<?php

require("connector.php");
require("uservalidity.php");



$locquery = "SELECT * FROM department JOIN location ON department.loc_ID = location.loc_ID";
$result = mysqli_query($conn, $locquery);

$jobpos = "SELECT job_position_ID, job_position_name FROM job_position";
$result2 = mysqli_query($conn, $jobpos);
?>

<!DOCTYPE html>
<html>

	<title>HRSystem - Create Employee</title>

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

	<div class="container">
		<div class="row">	
			<a href="home.php" style="font-size: 15px; font-family: Century; font-weight: bold; text-decoration: none;"> Back </a>

			<br>
			<br>
		

			<form action="submitJobOpening.php" method="POST">
				<h2 style="font-family: Century; font-weight: bold;">New Job Opening</h2>
				<br>
				<h4 style="font-family: Century; font-weight: bold;">Job Position:</h4>
				<select name = "jobposID">
					<?php
						while($row = mysqli_fetch_assoc($result2)){
							echo "<option value='{$row['job_position_ID']}'> {$row['job_position_name']}</option>";
						}
					?>
				</select>

				<h4 style="font-family: Century; font-weight: bold;">Department</h4>
				<select name = "dept_ID">
					<?php
						while($row = mysqli_fetch_assoc($result)){
							echo "<option value='{$row['dept_ID']}'> {$row['dept_name']}, {$row['loc_address']}</option>";
						}
					?>	
				</select>

				<h4 style="font-family: Century; font-weight: bold;">Job Requirements</h4>
				<input type="text" name="jobrequire"> <br>

				<br>
				<br>
				<input style="font-family: Century;" type="submit" value="Submit">

				<br>
				<br>

				<?php
					if(isset($_SESSION['error'])){
						echo "<p style='color:red'> {$_SESSION['error']} </p>";
					unset($_SESSION['error']);
					}
				?>

			</form>
		</div>
	</div>
	
</body>
</html>