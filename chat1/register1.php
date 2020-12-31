<?php
include("conn1.php");

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$artist_name=mysqli_real_escape_string($conn,$_POST['artist_name']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$expert_in=mysqli_real_escape_string($conn,$_POST['expert_in']);

if($username == "" || $password == ""){
echo "<script>window.alert('Username and Password are required fields!')</script>";
echo "<script>window.location.href='index1.php?registered'</script>";
}
else{
$insert_query=mysqli_query($conn,"INSERT INTO arti(username,password,email,phone,artist_name,address,expert_in)VALUES('$username','$password','$email','$phone','$artist_name','$address','$expert_in')")or die(mysqli_error($conn));
$insert_query=mysqli_query($conn1,"INSERT INTO art(username,artist_name)VALUES('$username','$artist_name')")or die(mysqli_error($conn1));
echo "<script>window.alert('Account successfully created! You can now login with your credentials.')</script>";
echo "<script>window.location.href='index1.php?registered'</script>";
}

?>