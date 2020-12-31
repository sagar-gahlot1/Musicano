<?php
	session_start();
	include('c.php');
	
	$Ad_name=$_POST['Ad_name'];
	$Ad_pass=$_POST['Ad_pass'];
	
	$query=mysqli_query($c,"select * from `administ` where Ad_name='$Ad_name' and Ad_pass='$Ad_pass'");
	
	if (mysqli_num_rows($query)<1){
		echo "<script>window.alert('Login Error. Please try again.')</script>";
		echo "<script>window.location.href='Login 1.php?attempt=failed'</script>";
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['Ad_id']=$row['Ad_id'];
		header('location:front.php');
	}

?>