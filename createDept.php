<?php

require("connector.php");

if($_SESSION['user_level'] <= 1){
		$_SESSION['error'] = "You're not permitted to create departments.";
		header("location:home.php");
}



$locquery = "SELECT * FROM location";
$result = mysqli_query($conn, $locquery);

?>

<!DOCTYPE html>
<html>

	<title>HRSystem - Create Department</title>

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
	<br>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="row">	
			<a href="home.php" style="font-size: 15px; font-family: Century; font-weight: bold; text-decoration: none;"> Back </a>

			<br>
			<br>
			<br>

			<form action="submitDept.php" method="POST">

				<h4 style="font-family: Century; font-weight: bold;">New Department Name</h4>
				<input type="text" required name="deptname"> <br>
			
				<h4 style="font-family: Century; font-weight: bold;">Location</h4>
				<select name = "locID">
				<?php
					while($row = mysqli_fetch_assoc($result)){
						echo "<option style='font-family: Century;' value='{$row['loc_ID']}'> {$row['loc_name']}, {$row['loc_address']}</option> <br>";
						}
				?>
				</select>
				<br>
				<br>
				<input style="font-family: Century;" type="submit" value="Submit">

				<br><br>

				<?php
					if(isset($_SESSION['error'])){
						echo "<p style='color:red'> {$_SESSION['error']} </p>";
						unset($_SESSION['error']);
					}
				?>
			</form>
	

		<div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>

</body>
</html>