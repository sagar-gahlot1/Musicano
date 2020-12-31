<?php
include("conn3.php");

$name=mysqli_real_escape_string($conn,$_POST['name']);
$V_Dur=mysqli_real_escape_string($conn,$_POST['V_Dur']);

if($name == "" || $V_Dur == ""){
echo "<script>window.alert('Video name and duration are required fields!')</script>";
}
else{
$insert_query=mysqli_query($conn,"INSERT INTO up_vid(name,V_Dur)VALUES('$name','$V_Dur')")or die(mysqli_error($conn));
echo "<script>window.alert('Video successfully uploaded!')</script>";
echo "<script>window.location.href='videos.php?upload'</script>";
}

?>