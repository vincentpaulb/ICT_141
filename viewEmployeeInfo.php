<?php
require("connector.php");
require("uservalidity.php");

$sql = "SELECT * FROM employee 
		JOIN department ON department.dept_ID = employee.dept_ID 
		JOIN job_position ON employee.job_position_ID = job_position.job_position_ID
		WHERE emp_ID = {$_GET['id']}";
		
$result = mysqli_query($conn, $sql);

echo mysqli_error($conn);

$emp = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
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

	<div class="container">
		<div class="row">	
			<a href="viewEmployees.php" style="font-size: 15px; font-family: Century; font-weight: bold; text-decoration: none;"> Back </a>

			<br>
			<br>
			<br>

			<h2> Employee Info</h2> <br>
			<div class="container">
				<div class="row">
			<?php
			  	echo "<div class='col-sm-4'>";
				echo "<p style='font-family: Century;'><b>Full Name:</b> {$emp['emp_name']} </p>";
				echo "<p style='font-family: Century;'><b>Address:</b> {$emp['emp_address']} </p>";
				echo "<p style='font-family: Century;'><b>Contact Number:</b> {$emp['emp_contact_num']} </p>";
				echo "<p style='font-family: Century;'><b>Age:</b> {$emp['emp_age']} </p>";
				echo "<p style='font-family: Century;'><b>Gender:</b> {$emp['emp_sex']} </p>";
				echo "<p style='font-family: Century;'><b>Birthday:</b> {$emp['emp_birthday']} </p>";
				echo "<p style='font-family: Century;'><b>Email:</b> {$emp['emp_email']} </p>";
				echo "</div>";

				echo "<div class='col-sm-4'>";
				echo "<p style='font-family: Century;'><b>Father's Name:</b> {$emp['father_name']} </p>";
				echo "<p style='font-family: Century;'><b>Father's Occupation:</b> {$emp['father_occupation']} </p>";
				echo "<p style='font-family: Century;'><b>Mother's Name:</b> {$emp['mother_name']} </p>";
				echo "<p style='font-family: Century;'><b>Mother's Occupation:</b> {$emp['mother_occupation']} </p>";
				echo "<p style='font-family: Century;'><b>Marital Status:</b> {$emp['marital_status']} </p>";
				echo "<p style='font-family: Century;'><b>Employment Start Date:</b> {$emp['start_date']} </p>";
				echo "<p style='font-family: Century;'><b>Employment Status:</b> {$emp['emp_status']} </p>";
				echo "</div>";

				echo "<div class='col-sm-4'>";
				echo "<p style='font-family: Century;'><b>School Name:</b> {$emp['school_name']} </p>";
				echo "<p style='font-family: Century;'><b>School Address:</b> {$emp['school_address']} </p>";
				echo "<p style='font-family: Century;'><b>Year Graduated:</b> {$emp['school_year_graduated']} </p>";
				echo "<p style='font-family: Century;'><b>Department:</b> {$emp['dept_name']} </p>";
				echo "<p style='font-family: Century;'><b>Job Position:</b> {$emp['job_position_name']} </p>";
				echo "</div>";
			?>
				</div>
			</div>

		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>

</body>
</html>
