<?php

require("connector.php");
require("uservalidity.php");

?>

<!DOCTYPE html>
<html>

	<title>HRSystem - Create Benefits</title>

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

			<form action="submitBenefits.php" method="POST">

				<h4 style="font-family: Century; font-weight: bold;">New Benefit Name</h4>
				<input type="text" required name="benefitname"> <br>
		
				<h4 style="font-family: Century; font-weight: bold;">Benefit Info</h4>
				<input type="text" required name="benefitinfo"> <br>

				<br>
				<input style="font-family: Century;" type="submit" value="Submit">

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