<?php
include("c.php");

$beginr_id=mysqli_real_escape_string($conn1,$_POST['beginr_id']);
$user_name=mysqli_real_escape_string($conn1,$_POST['user_name']);
$password=mysqli_real_escape_string($conn1,$_POST['password']);
$email=mysqli_real_escape_string($conn1,$_POST['email']);
$phone=mysqli_real_escape_string($conn1,$_POST['phone']);
$beginr_name=mysqli_real_escape_string($conn1,$_POST['beginr_name']);


if($user_name == "" || $password == ""){
echo "<script>window.alert('Username and Password are required fields!')</script>";
}
else{
$insert_query=mysqli_query($conn1,"INSERT INTO beginner(beginr_id,user_name,password,email,phone,beginr_name)VALUES('$beginr_id','$user_name','$password','$email','$phone','$beginr_name')")or die(mysqli_error($conn1));
$insert_query=mysqli_query($con,"INSERT INTO beginnr(beginr_id,user_name,beginr_name)VALUES('$beginr_id','$user_name','$beginr_name')")or die(mysqli_error($con));
echo "<script>window.alert('Account successfully created! You can now login with your credentials.')</script>";
echo "<script>window.location.href='front.php?registered'</script>";
}

?>