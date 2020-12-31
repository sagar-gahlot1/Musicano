<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Upload Videos</title>
  
  
</head>

<body>

  <div class="form">
    <h2>TYPE VIDEO DETAILS:</h2></br>
    <form method="post" enctype="multipart/form-data" >
<h3>VIDEO NAME:-</h3>
      <input type="file" name="file"/>
	<input type="submit" name="submit" value="UPLOAD!" />
    </form>
<br><a href="vid.php">SHOW VIDEOS</a>
  </div>
<?php  
	session_start();
	include("conn3.php");
	if(isset($_POST['submit']))
	{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"upvideos/".$name);
	$query= "INSERT INTO up_vid(V_ID,name)VALUES('','$name')";

  if(mysqli_query($conn,$query))
  {
	echo "<script>window.alert('Video successfully uploaded!')</script>";
	echo "<script>window.location.href='upload.php?upload'</script>";
  }
	echo "<br />".$name." has been uploaded";
}
?>
</body>
</html>