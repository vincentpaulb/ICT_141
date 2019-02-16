<?php

require("connector.php");
require("uservalidity.php");

$sql = "SELECT * FROM benefit";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>

	<title>HRSystem - Benefits</title>

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
			<h2 style="font-family: Century; font-weight: bold; text-align: center;">BENEFITS</h2>
			<br>
			<table align="center">
				<tr>
					<th style="background-color: #ff6666;">Benefit ID</th>
					<th style="background-color: #ff6666;">Benefit Name</th>
					<th style="background-color: #ff6666;">Benefit Info</th>
				</tr>
	
				<?php	
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['benefit_ID']} </th>";
						echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['benefit_name']} </th>";
						echo "<th style='background-color: #e6f7ff; font-size: 15px;'> {$row['benefit_info']} </th>";
						echo "</tr>";
					}
				?>
	
			</table>
		</div>
	</div>

</body>
</html>