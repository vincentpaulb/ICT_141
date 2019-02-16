<?php

require("connector.php");

if($_SESSION['user_level'] == 0){
		$_SESSION['error'] = "You're not permitted to create departments.";
		header("location:home.php");
}

$query = "SELECT user_name FROM user WHERE user.user_ID = {$_SESSION['id']}";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);


if($_SESSION['user'] != $user['user_name']){
	$_SESSION['error'] = "Invalid user login";
	header("location:index.php");
}

$query = "SELECT dept_ID, dept_name, location.loc_ID, location.loc_name FROM department JOIN location on department.loc_ID = location.loc_ID";
$resultdept = mysqli_query($conn, $query);


$query = "SELECT * FROM job_position";
$resultjob = mysqli_query($conn, $query);


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

			<h2 style="font-family: Century; font-weight: bold;">New Employee</h2>
			<br>

			<form action="submitEmployee.php" method="POST">

				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Employee Full Name</h4>
							<input type="text" required name="empname"> 
		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Full Address</h4>
							<input type="text" required name="empaddress"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Contact Number</h4>
							<input type="text" name="empnumber"> 
					
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Age</h4>
							<input type="text" required name="empage"> 
	
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Gender</h4>
							<select name="empsex"> 
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Birthday</h4>
							<input type="date" required name="empbirthday"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Email</h4>
							<input type="text" required name="empemail"> 
						</div>

						<div class="col-sm-4">	
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Father's Full Name</h4>
							<input type="text" name="fathername"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Occupation</h4>
							<input type="text" name="fatheroccupation"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Mother's Maiden Name</h4>
							<input type="text" name="mothername"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Occupation</h4>
							<input type="text" name="motheroccupation"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Marital Status</h4>
							<input type="text" name="maritalstatus"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Employment Start Date</h4>
							<input type="date" required name="empstartdate"> 

				
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Employment Status</h4>
							<select name="empstatus"> 
								<option value="Hired">Hired</option>
								<option value="Terminated">Terminated</option>
								<option value="Retired">Retired</option>
								<option value="Resigned">Resigned</option>
							</select>
						</div>
	
						<div class="col-sm-4">
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Name of School</h4>
							<input type="text" required name="schoolname"> 
		
			
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">School's Address</h4>
							<input type="text" required name="schooladdress"> 

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">School Year Graduated</h4>
							<input type="text" required name="schoolyear"> 


							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Department</h4>
							<select name="deptid">
								<option value="none">--</option>
								<?php
								while($row = mysqli_fetch_assoc($resultdept)){
									echo "<option value={$row['dept_ID']}> {$row['dept_name']}, {$row['loc_name']}</option>";
								}
								?>
							</select>

		
							<h4 style="font-size: 13px; font-family: Century; font-weight: bold;">Job Position</h4>
							<select name="jobposid">
							<option value="none">--</option>
								<?php
								while($row = mysqli_fetch_assoc($resultjob)){
									echo "<option value={$row['job_position_ID']}>{$row['job_position_name']}</option>";
								}
								?>
							</select>
						</div>
					</div>
				</div>

				<br>
				<br>
				<input style="font-family: Century;" type="submit" value="Submit">

			</form>

		</div>
	</div>
	
</body>


</html>