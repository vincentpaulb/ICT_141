<?php

require("connector.php");

if($_SESSION['user_level'] <= 1){
		$_SESSION['error'] = "You're not permitted to create departments.";
		header("location:home.php");
}



$locquery = "SELECT * FROM employee JOIN department ON employee.dept_ID = department.dept_ID WHERE emp_ID = {$_GET['id']} ";
$result = mysqli_query($conn, $locquery);

echo mysqli_error($conn);
$array = mysqli_fetch_array($result);

$_SESSION['emp_ID'] = $_GET['id'];
?>

<html>


<head>
</head>


<body>
	<h2>Employee Info</h2>
	<?php
	echo "<p>Name: {$array['emp_name']}<p>";
	echo "<p>Status: {$array['emp_status']}<p>";
	echo "<p>Department: {$array['dept_name']}<p>";
	?>

	<form action="submitTimeReport.php" method="POST">
		
		<h4>Total Work Hours</h4>
		<input type="text" name="totalworkhours"> <br>


		<br>
		<input type="submit" value="Submit">

		<br><br>

		<?php
			if(isset($_SESSION['error'])){
				echo "<p style='color:red'> {$_SESSION['error']} </p>";
				unset($_SESSION['error']);
			}
		?>

	</form>

</body>

</html>