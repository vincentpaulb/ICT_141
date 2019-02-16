<?php

require("connector.php");


$query = "INSERT INTO location ( `loc_name`, `loc_address`) VALUES ( '{$_POST['locname']}' , '{$_POST['address']}' )";
$result = mysqli_query($conn, $query);

if(!$result){
	echo mysqli_error($conn);
}

else{
	header("location:home.php");
}

?>