<?php
	session_start();
	include('conn1.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"select * from `arti` where username='$username' and password='$password'");
	
	if (mysqli_num_rows($query)<1){
		/* $_SESSION['message']="Login Error. Please Try Again"; */
		echo "<script>window.alert('Login Error. Please try again.')</script>";
		echo "<script>window.location.href='index1.php?attempt=failed'</script>";
		//header('location:index.php');
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['arti_id']=$row['arti_id'];
		header('location:home2.php');
	}

?>