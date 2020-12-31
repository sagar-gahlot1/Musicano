<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Videos</title>
  
  
</head>

<body background="img/abcde.jpg">

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="jsg.js"></script>

<style>
/* Add a black background color to the top navigation */
.topnav {

    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
	
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 17px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

</style>

<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="log.php">home</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="About.php">About</a>
  </div>
</div>
</br>
</br>



<?php
session_start();
include("conn3.php");


	$sql="SELECT * FROM `up_vid`";
	$query=mysqli_query($conn,$sql);
	
	
	while($row=mysqli_fetch_array($query))
	{
			$V_ID=$row['V_ID'];
			$name=$row['name'];
						
		echo"<font color='black' size='5'><a href='sho.php?V_ID=$V_ID'>$name</a></font></br>";
	}
?>

</body>
</html>