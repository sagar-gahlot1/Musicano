<?php
	session_start();
	include('conn2.php');
	
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"select * from `beginner` where user_name='$user_name' and password='$password'");
	
	if (mysqli_num_rows($query)<1){
		/* $_SESSION['message']="Login Error. Please Try Again"; */
		echo "<script>window.alert('Login Error. Please try again.')</script>";
		echo "<script>window.location.href='index2.php?attempt=failed'</script>";
		//header('location:index.php');
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['beginr_id']=$row['beginr_id'];
		header('location:button.php');
	}

?>