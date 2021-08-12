<?php
require("constants.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysqli_error());
mysqli_query($con,"/*!40101 SET NAMES 'UTF8' */") or die("Error: " . mysqli_error());
mysqli_select_db($con,DB_NAME) or die("Cannot select DB");
?>
    
	
	