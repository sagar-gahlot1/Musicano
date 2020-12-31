<?php
include("c.php");

$arti_id=mysqli_real_escape_string($conn,$_POST['arti_id']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$artist_name=mysqli_real_escape_string($conn,$_POST['artist_name']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$expert_in=mysqli_real_escape_string($conn,$_POST['expert_in']);


if($username == "" || $password == ""){
echo "<script>window.alert('Username and Password are required fields!')</script>";
}
else{
$insert_query=mysqli_query($conn,"INSERT INTO arti(arti_id,username,password,email,phone,artist_name,address,expert_in)VALUES('$arti_id','$username','$password','$email','$phone','$artist_name','$address','$expert_in')")or die(mysqli_error($conn));
echo "<script>window.alert('Account successfully created! You can now login with your credentials.')</script>";
echo "<script>window.location.href='front.php?registered'</script>";
}

?>