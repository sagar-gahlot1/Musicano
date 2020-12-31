<?php
	session_start();
	if (isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
	}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Watch Videos</title>
  
  
</head>

<body background="img/abcde.jpg">

<?php
include("conn3.php");
if(isset($_GET['V_ID']))
{
	$V_ID=$_GET['V_ID'];
	$sql="SELECT * FROM `up_vid` where V_ID=$V_ID";
	$query=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($query))
	{
		$name=$row['name'];
	}
	echo"<h2>You Are Watching ".$name."</h2></br></br>";
	echo"<video width='400' controls><source src='upvideos/".$name."' type='video/webm'></video>";
}
else
{
	echo"Error";
}
?>
</body>
</html>