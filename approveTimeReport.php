<?php

require("connector.php");

$query = "UPDATE time_report SET `report_status` = 'APPROVED' WHERE time_report_ID = {$_GET['id']}";
$result = mysqli_query($conn, $query);

header("location:viewEmployeesTimeReports.php?id={$_SESSION['id']}");

?>