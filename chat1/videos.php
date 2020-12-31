<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Upload Videos</title>
  
  
</head>

<body background="img/IMG1.jpg">
<link rel="stylesheet" href="cssd.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="jsg.js"></script>


<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="log.php">home</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="About.php">About</a>
  </div>
</div>

<div class="img">
<img src="LOGO.PNG" alt="Smiley face" height="250" width="400" >
</div>


  <div class="form">
  
<br>
<br>
    <h1><font color="white">TYPE VIDEO DETAILS:</font></h1></br></br></br></br></br></br>
    <form method="post" enctype="multipart/form-data" >
<h3><font color="white">VIDEO NAME:-</font></h3></br></br></br>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="file" name="file"/>
	<input type="submit" name="submit" value="UPLOAD!" /></br></br>
    </form>
<br><a href="vid.php"><font color="blue"><h2> &nbsp &nbsp &nbsp &nbsp SHOW VIDEOS</h2></font></a>
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
	echo "<script>window.location.href='videos.php?upload'</script>";
  }
	echo "<br />".$name." has been uploaded";
}
?>

  
  <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">
			
				<h3>Musicano<span>logo</span></h3></br></br>

				<p class="footer-links">
					<a href="button.php">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="About.php">About</a>
					·
					<a href="FAQ.php">Faq</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">musicano &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Gla University</span> Mathura, Uttar pradesh</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91-7654678904</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:music@company.com">music@musicano.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Provide the notes and help to leaning music.Giving a platform to new rising stars.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
</body>
</html>