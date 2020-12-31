<?php
include("conn2.php");

$user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$beginr_name=mysqli_real_escape_string($conn,$_POST['beginr_name']);


if($user_name == "" || $password == ""){
echo "<script>window.alert('Username and Password are required fields!')</script>";
echo "<script>window.location.href='index2.php?registered'</script>";
}
else{
$insert_query=mysqli_query($conn,"INSERT INTO beginner(user_name,password,email,phone,beginr_name)VALUES('$user_name','$password','$email','$phone','$beginr_name')")or die(mysqli_error($conn));
$insert_query=mysqli_query($conn1,"INSERT INTO beginnr(user_name,beginr_name)VALUES('$user_name','$beginr_name')")or die(mysqli_error($conn1));
echo "<script>window.alert('Account successfully created! You can now login with your credentials.')</script>";
echo "<script>window.location.href='index2.php?registered'</script>";
}

?>