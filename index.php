<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "hr_system");


if(!$conn){
	$error = "Failed to connect to mysql/db!";
}

$query = "SELECT user_name, user_type, user_password, user_ID FROM user";
$result = mysqli_query($conn, $query);


if(!$result){
	echo mysqli_error($conn);
	exit();
}


if(isset($_POST['username']) && isset($_POST['password'])){

	while($row = mysqli_fetch_assoc($result)){
			if($_POST['username'] == $row['user_name'] && $_POST['password'] == $row['user_password']){
				if($row['user_type'] == "admin"){
					$_SESSION['user_level'] = 4;
				}
				else if($row['user_type'] == "HR Manager"){
					$_SESSION['user_level'] = 3;
				}
				
				else if($row['user_type'] == "HR Personel"){
					$_SESSION['user_level'] = 2;
				}
				
				else if($row['user_type'] == "Recruiter"){
					$_SESSION['user_level'] = 1;
				}
				else{
					$_SESSION['user_level'] = 0;
				}
				$_SESSION['user'] = $row['user_name'];
				$_SESSION['id'] = $row['user_ID'];
				header("location:home.php");
			}
			
	}
	if($_SESSION['user_level'] == 0){
		$_SESSION['error'] = "Invalid Username/Password!";
	}
}

?>

<!DOCTYPE html>
<html>

	<title>HRSystem - Login</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="login.css">

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
	<hr>

	<div class="container">
		<div class="row"> 
			
			<div class="col-sm-8">	
			</div>

			<div class="col-sm-4" style="border-left: double; border-right: double; height: 100%;">	

				<form action="index.php" method="POST" id="form">
					<p style="font-family: Century; font-size: 30px;">LOGIN</p>
					<br>

					<label style="font-family: Century;">Username</label>
						<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" id="icon"></i>
						</div>
						<input class="text" name="username" required type="text" placeholder="Enter Username"/>
					</div>
					<br>
					<label style="font-family: Century;">Password</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-key" id="icon"></i>
						</div>
						<input class="text" name="password" required type="password" placeholder="Enter Password"/>
					</div>

					<br>

					<?php
					if(isset($_SESSION['error'])){
						echo "<p style='color:red;'> {$_SESSION['error']} </p>";
						unset($_SESSION['error']);
					}
					?>

					<br>

					<input style="font-family: Century; font-size: 15px" class="btn" type="submit" value="Login" name="Login" />

					<br>
					<br>
				</form>
			</div>
		</div>
	</div>
	<hr>
</body>
</html>