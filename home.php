<?php

require("connector.php");


$query = "SELECT user_fname, user_lname FROM user WHERE user.user_ID = {$_SESSION['id']}";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);

if(!$result){
	echo mysqli_error($conn);
	exit();
}

?>


<!DOCTYPE html>
<html>

	<title>HRSystem - Home</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="home.css">

</head>


<body id="bg">

	<div class="container">
		<div class="row">
			<div class="col-sm-7">
			</div>
			<div class="col-sm-5">
				<br>
				<span style="font-size: 15px; font-family: Century; font-weight: bold;"> Hello,  <?php echo "{$user['user_fname']}" ; ?></span> 
				<span>  |  </span>
				<span ><a style="font-size: 15px; font-family: Century; font-weight: bold; text-decoration: none; color: black;"href='logout.php'>Logout</a></span>
				<hr>
				<br>
			</div>
			<div>
			</div>
		<div>
	</div>

	<br>

	<?php
		if($_SESSION['user_level'] >= 3){
			
			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='createDept.php?id={$_SESSION['id']}'>Create Department </a></button>"; 

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='createLocation.php?id={$_SESSION['id']}'>Create Location </a></button>"; 

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='createJobPosition.php?id={$_SESSION['id']}'>Create Job Position</a></button>"; 

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='createBenefits.php?id={$_SESSION['id']}'>Create Benefits </a></button>"; 

			echo "<br><br><br>";
			
			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='viewDept.php?id={$_SESSION['id']}'>View Departments </a></button>"; 
			
			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='viewLocation.php?id={$_SESSION['id']}'>View Locations </a></button>"; 

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='viewJobPosition.php?id={$_SESSION['id']}'>View Job Positions </a></button>";

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='viewBenefits.php?id={$_SESSION['id']}'>View Benefits </a></button>"; 

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='viewEmployeesTimeReports.php?id={$_SESSION['id']}'>View Time Reports</a></button>";

			echo "<br><br><br>";
		}
		
		if($_SESSION['user_level'] == 2){
			echo "<button ype='button' class='btn btn-info'><a style='text-decoration: none;' href='viewEmployeesTimeReports.php?id={$_SESSION['id']}'>View Employees</a></button>"; 
		}
		
		if($_SESSION['user_level'] >= 1 && $_SESSION['user_level'] != 2){
			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='viewEmployees.php?id={$_SESSION['id']}'>View Employees </a></button>";
			
			echo "<br><br><br>";
			
			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='createEmployee.php?id={$_SESSION['id']}'>Add Employee </a></button>"; 

			echo " | ";

			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='createJobOpening.php?id={$_SESSION['id']}'>Add Job Opening </a></button>"; 
			
			echo "<br><br><br>";
			
			echo "<button type='button' class='btn btn-info'><a style='text-decoration: none;' href='jobOpenings.php?id={$_SESSION['id']}'>Manage Job Openings</a></button>"; 
			
			echo "<br><br><br>";
		}
		
		
		
		if(isset($_SESSION['error'])){
			echo "<p style='color:red'> {$_SESSION['error']} </p>";
			unset($_SESSION['error']);
		}
		
		echo "<br><br>";
		if(isset($_SESSION['msg'])){
			echo "<p style='color:green;'> {$_SESSION['msg']} </p>";
			unset($_SESSION['msg']);
		}
	?>
	
</body>
