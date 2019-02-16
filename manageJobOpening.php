<?php

require("connector.php");


$query = "SELECT * FROM applicant 
			JOIN job_opening ON applicant.job_order_ID = job_opening.job_order_ID";
$result = mysqli_query($conn, $query);

$_SESSION['id'] = $_GET['id'];
?>


<html>

<head>

</head>

<body>
	<a href="jobOpenings.php"><--- back</a>
	<?php
	if(isset($_SESSION['error'])){
		echo "<p style='color:red'> {$_SESSION['error']} </p>";
		unset($_SESSION['error']);
	}
	?>
	<h1>Manage Applicants</h1>
	<p> for Job order no. <?php echo $_SESSION['id']; ?> </p>
	<br><br>
	
	<table align="center">
	<tr>
	<th>Applicant ID</th>
	<th>Applicant Full Name</th>
	<th>Status</th>
	</tr>
	
	<?php	
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<th> {$row['applicant_ID']} </th>";
			echo "<th> {$row['applicant_name']} </th>";
			echo "<th> {$row['applicant_status']} </th>";
			if($row['applicant_status'] == "Applicant"){
				echo "<th> <a href='assignApplicant.php?id={$row['applicant_ID']}'> Assign for interview </a> </th>";
			}
			else if($row['applicant_status'] == "Assigned" && $_SESSION['user_level'] >= 2){
				echo "<th> <a href='hireApplicant.php?id={$row['applicant_ID']}'> Hire Applicant</a> </th>";
			}
			echo "</tr>";
		}
	?>
	</table>
</body>

</html>