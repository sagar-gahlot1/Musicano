<?php
date_default_timezone_set("Asia/Calcutta");
$date=date('F j, Y h:i:a');

//mysqli procedural
$conn=mysqli_connect("localhost","root","","begin");

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
$conn1=mysqli_connect("localhost","root","","chatme");
if(!$conn1){
	die("Connection failed: " . mysqli_connect_error());
}
$conn2=mysqli_connect("localhost","root","","artist");

if(!$conn2){
	die("Connection failed: " . mysqli_connect_error());
}
?>