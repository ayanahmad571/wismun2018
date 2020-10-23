<?php
date_default_timezone_set('Asia/Dubai');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbsmun";
/*
$servername = "184.168.224.175";
$username = "ph14319782749";
$password = "vqQn76!9";
$dbname = "WISMUN_18";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 
 
 
  ($conn->set_charset("utf8"));
 date_default_timezone_set('Asia/Dubai');



 ?>
<?php 
foreach($_POST as $key=>$v){
	$_POST[$key] = $conn->escape_string(stripslashes($v));
}

foreach($_POST as $rrr){
	if(trim($rrr) == ''){
		die('Don\'t enter Blank Values');
	}
}
?>

