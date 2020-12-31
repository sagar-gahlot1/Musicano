<?php
date_default_timezone_set("Asia/Calcutta");
$date=date('F j, Y h:i:a');

//mysqli procedural
$conn=mysqli_connect("localhost","root","","videos");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>