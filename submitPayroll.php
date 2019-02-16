<?php

require("connector.php");

$query = "SELECT total_work_hours FROM time_report WHERE time_report_ID = {$_GET['tr_ID']}";
$result = mysqli_query($conn, $query);
$array = mysqli_fetch_array($result);

$gross_pay = $_POST['basicpay'] + ($array['total_work_hours']  * $_POST['rate']);

$tax = $gross_pay * 0.12;

$total_deductions = $_POST['pagibig'] + $_POST['sss'] + $_POST['philhealth'];

$total_adjustments = $tax + $total_deductions;

$net_pay = $gross_pay - $total_adjustments;

$query = "INSERT INTO payroll (`emp_ID`, `time_report_ID`, `basic_pay`, `hour_rate`, `gross_pay`, `tax`, `pag_ibig`, `sss`, `philhealth`,
			`total_deductions`, `total_adjustments`, `net_pay`) VALUES ( {$_GET['emp_ID']}, {$_GET['tr_ID']}, {$_POST['basicpay']}, {$_POST['rate']},
				{$gross_pay}, {$tax}, {$_POST['pagibig']}, {$_POST['sss']}, {$_POST['philhealth']}, {$total_deductions}, {$total_adjustments}, 
				{$net_pay})";
$result = mysqli_query($conn, $query);
echo mysqli_error($conn);
?>