<?php

$c = new mysqli("localhost", "root", "", "ADMIN");
if(!$c)
{
	die("connection failed" . mysqli_connect_error());
}
$conn=mysqli_connect("localhost","root","","artist");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
$conn1=mysqli_connect("localhost","root","","begin");
if(!$conn1){
	die("Connection failed: " . mysqli_connect_error());
}
$con=mysqli_connect("localhost","root","","chatme");
if(!$con){
	die("Connection failed: " . mysqli_connect_error());
}
?>