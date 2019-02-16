<?php

require("connector.php");

if($_SESSION['user_level'] <= 1){
		$_SESSION['error'] = "You're not permitted to create departments.";
		header("location:home.php");
}



$locquery = "SELECT * FROM location";
$result = mysqli_query($conn, $locquery);

?>

<html>


<head>
</head>


<body>
	<?php
	echo "<form action='submitPayroll.php?emp_ID={$_GET['emp_ID']}&tr_ID={$_GET['tr_ID']}' method='POST'>";
	?>
	
		<h4>Basic Pay</h4>
		<input type="number"step="0.01" name="basicpay"> <br>

		<h4>Rate Per Hour</h4>
		<input type="number" step="0.01" name="rate"> <br>
		
		<h4>Pag-ibig</h4>
		<input type="number" step="0.01" name="pagibig"> <br>
		
		<h4>SSS</h4>
		<input type="number" step="0.01" name="sss"> <br>
		
		<h4>philhealth</h4>
		<input type="number" step="0.01" name="philhealth"> <br>
		
		<br>
		<input type="submit" value="Submit">

		<br><br>

	</form>

</body>

</html>