<?php
	include('conn2.php');
	session_start();
	if (!isset($_SESSION['beginr_id']) ||(trim ($_SESSION['beginr_id']) == '')) {
	header('location:index2.php');
    exit();
	}

	$query=mysqli_query($conn,"SELECT * FROM beginner WHERE beginr_id='$_SESSION[beginr_id]' ")or die(mysqli_error($conn));
	$row=mysqli_fetch_array($query);
	$user_name=$row['user_name'];
	$password=$row['password'];
	$email=$row['email'];
	$phone=$row['phone'];
	$beginr_name=$row['beginr_name'];

	if(isset($_POST['submit'])){

		$beginr_id=$_GET['beginr_id'];
		$beginr_name_edit=mysqli_real_escape_string($conn,$_POST['beginr_name']);
		$user_name_edit=mysqli_real_escape_string($conn,$_POST['user_name']);
		$password_edit=mysqli_real_escape_string($conn,$_POST['password']);
		$email_edit=mysqli_real_escape_string($conn,$_POST['email']);
		$phone_edit=mysqli_real_escape_string($conn,$_POST['phone']);

	$update_query=mysqli_query($conn,"UPDATE beginner SET beginr_name='$beginr_name_edit',user_name='$user_name_edit',password='$password_edit',email='$email_edit',phone='$phone_edit' WHERE beginr_id='$beginr_id' ")or die(mysqli_error($conn));
	echo "<script>window.alert('Record successfully updated!')</script>";
	echo "<script>window.location.href='edit_details.php?beginr_id=$_SESSION[beginr_id]'</script>";
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
    <a href="beginr_id=<?php echo $_SESSION['beginr_id']; ?>">WELCOME! <?php echo $row['beginr_name']; ?></a>
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
			<h4><font color="white">Hi there, </font><font color="orangered"><?php echo $beginr_name; ?></font></h4>
			</td>
			</tr>
	<tr>
		<td><b><font color="white">Details</font></b></td>
	</tr>
	<form name="form_edit" method="post" action="">
	<tr>
		<td><font color="white">Your Name:</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="beginr_name" value="<?php echo $beginr_name;?>"  /></td>
	</tr>

	<tr>
		<td><font color="white">Username:</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name" value="<?php echo $user_name;?>"  /></td>
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
		<!--<td><button name="submit" type="button" id="send_msg" class="button button2">Update</button></td>-->
		<td><input type="submit" name="submit" class="button button2"></td>
	</tr>
	</form>

	<tr>

		<td><input type="button" value="Back to Profile" class="button button2" onclick="window.location.href='profile.php?beginr_id=<?php echo $_SESSION['beginr_id']; ?>' "></a></td>
	</tr>
</table>
</br></br></br>
</center>
</body>
</html>

