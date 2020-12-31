<?php
	include('conn2.php');
	session_start();
	if (!isset($_SESSION['arti_id']) ||(trim ($_SESSION['arti_id']) == '')) {
	header('location:index1.php');
    exit();
	}

	$query=mysqli_query($conn2,"SELECT * FROM arti WHERE arti_id='$_SESSION[arti_id]' ")or die(mysqli_error($conn2));
	$row=mysqli_fetch_array($query);
	$username=$row['username'];
	$password=$row['password'];
	$email=$row['email'];
	$phone=$row['phone'];
	$address=$row['address'];
	$artist_name=$row['artist_name'];

	if(isset($_POST['submit'])){

		$arti_id=$_GET['arti_id'];
		$artist_name_edit=mysqli_real_escape_string($conn,$_POST['artist_name']);
		$username_edit=mysqli_real_escape_string($conn,$_POST['username']);
		$password_edit=mysqli_real_escape_string($conn,$_POST['password']);
		$email_edit=mysqli_real_escape_string($conn,$_POST['email']);
		$phone_edit=mysqli_real_escape_string($conn,$_POST['phone']);
		$address_edit=mysqli_real_escape_string($conn,$_POST['address']);

	$update_query=mysqli_query($conn2,"UPDATE artist SET artist_name='$artist_name_edit',username='$username_edit',password='$password_edit',email='$email_edit',phone='$phone_edit',address='$address_edit' WHERE arti_id='$arti_id' ")or die(mysqli_error($conn2));
	echo "<script>window.alert('Record successfully updated!')</script>";
	echo "<script>window.location.href='edit.php?arti_id=$_SESSION[arti_id]'</script>";
	}

?>
<link rel="stylesheet" href="css/button (4).css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="js/jsg.js"></script>





<div style="width: 980px; margin: 0 auto; overflow: hidden;">
    <div style="float: left; width: 80%;">" " </div>
    <div style="float: right; width: 20%;"> " "</div>
</div>



<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="#home">home</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="arti_id=<?php echo $_SESSION['arti_id']; ?>">WELCOME! <?php echo $row['artist_name']; ?></a>
	    <a href="logout.php">Logout</a>
  </div>
</div>
<!DOCTYPE html>
<html>
<head>
	<title>Public Chat - Edit Details</title>
	<link rel="stylesheet" href="css/hoe.css">
	<script src="js/home.js"></script>
</head>
<body background="IMG22.jpg">
<center></br></br></br>
<table id="chat_room" align="center">
	<tr>
	<th><h4>Edit Details - <a href="logout.php" onclick="return confirm_logout();">Logout</a> - - <a href="button.php">Home</a></h4></th>
	</tr>

			<tr>
			<td>
			<h4><font color="white">Hi there, </font><font color="orangered"><?php echo $artist_name; ?></font></h4>
			</td>
			</tr>
	<tr>
		<td><b><font color="white">Details</font></b></td>
	</tr>
	<form name="form_edit" method="post" action="">
	<tr>
		<td><font color="white">Your Name:</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="artist_name" value="<?php echo $artist_name;?>"  /></td>
	</tr>

	<tr>
		<td><font color="white">Username:</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" value="<?php echo $username;?>"  /></td>
	</tr>

	<tr>
		<td><font color="white">Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" value="<?php echo $password; ?>"   /></td>
	</tr>

	<tr>
		<td><font color="white">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $email; ?>"  /></td>
	</tr>

	<tr>
		<td><font color="white">Phone:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" value="<?php echo $phone; ?>" /></td>
	</tr>
	
	<tr>
		<td><font color="white">Address:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $address; ?>" /></td>
	</tr>

	<tr>
		<!--<td><button name="submit" type="button" id="send_msg" class="button button2">Update</button></td>-->
		<td><input type="submit" name="submit" class="button button2"></td>
	</tr>
	</form>

	<tr>

		<td><input type="button" value="Back to Profile" class="button button2" onclick="window.location.href='prof.php?arti_id=<?php echo $_SESSION['arti_id']; ?>' "></a></td>
	</tr>
</table>
</br></br></br>
</center>
</body>
</html>

