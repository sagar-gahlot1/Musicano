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
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="beginr_id=<?php echo $_SESSION['beginr_id']; ?>">WELCOME! <?php echo $row['beginr_name']; ?></a>
	    <a href="logout.php">Logout</a>
  </div>
</div>
<!DOCTYPE html>
<html>
<head>
	<title>User - Profile</title>
	<link rel="stylesheet" href="css/hoe.css">
	<script src="js/home.js"></script>
</head>
<body background="IMG22.jpg">
<center></br></br></br>
<table id="chat_room" align="center">
	<tr>
	<th><h4>Profile Settings - <a href="logout.php" onclick="return confirm_logout();">Logout</a> - - <a href="button.php">Home</a></td></h4></th>
	</tr>

			<tr>
			<td>
			<h4><font color="white">Hi there,</font> <font color="orangered"><?php echo $beginr_name; ?></font></h4>
			</td>
			</tr>
	<tr>
		<td><b><font color="white">Details</font></b></td>
	</tr>
	<tr>
		<td><font color="white">Username:</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $user_name;?>" disabled /></td>
	</tr>

	<tr>
		<td><font color="white">Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" value="<?php echo $password; ?>"  disabled /></td>
	</tr>

	<tr>
		<td><font color="white">Email:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" value="<?php echo $email; ?>" disabled /></td>
	</tr>

	<tr>
		<td><font color="white">Phone:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $phone; ?>" disabled /></td>
	</tr>

 	
	<tr>
		<td><input type="button" value="Edit Details" class="button button2" onclick="window.location.href='edit_details.php?beginr_id=<?php echo $_SESSION['beginr_id']; ?>' "></a></td>
	</tr>
</table>
</br></br></br>
</center>
</body>
</html>