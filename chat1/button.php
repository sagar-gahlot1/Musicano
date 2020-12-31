<?php
	include('conn2.php');
	session_start();
	if (!isset($_SESSION['beginr_id']) ||(trim ($_SESSION['beginr_id']) == '')) 
	{
	header('location:index2.php');
    exit();
	}
	
	$uquery=mysqli_query($conn,"SELECT * FROM `beginner` WHERE beginr_id='".$_SESSION['beginr_id']."'");
	$urow=mysqli_fetch_assoc($uquery);
?>

<link rel="stylesheet" href="buto.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="js/jsg.js"></script>





<div style="width: 980px; margin: 0 auto; overflow: hidden;">
    <div style="float: left; width: 80%;">" " </div>
    <div style="float: right; width: 20%;"> " "</div>
</div>


<form>
<input  CLASS="MYBUTTON" type="button" value="UPLOAD VIDEO" onclick="window.location.href='videos.php'" />
<input  CLASS="MYBUTTON1" type="button" value="ENTER CHATROOM" onclick="window.location.href='home.php'" />

</form>







<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="#home">home</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="profile.php">EDIT</a>
    <a href="beginr_id=<?php echo $_SESSION['beginr_id']; ?>">WELCOME! <?php echo $urow['beginr_name']; ?></a>
	    <a href="logout.php">Logout</a>
  </div>
</div>
<div class="img">
<img src="LOGO.PNG" alt="Smiley face" height="42" width="42" >
</div>

<div class="container">
  <img src="img123.jpg" alt="" />
  <p class="title">GUITAR</p>
  <div class="overlay"></div>
  <div class="button"><a href="home1.php"> START LEARNING  </a></div>
</div>



<div class="container1">
  <img src="4161_piano.jpg" alt="" />
  <p class="title">PIANO</p>
  <div class="overlay"></div>
  <div class="button"><a href="PIANO.php"> START LEARNING </a></div>
</div>

<div class="container11">
  <img src="maini2.jpg" alt="" />
  <p class="title">FLUTE</p>
  <div class="overlay"></div>
  <div class="button"><a href="FLUTE.php"> START LEARNING </a></div>
</div>

<div class="container0">
  <img src="Drum-playing-wallpapers.jpg" alt="" />
  <p class="title">DRUM</p>
  <div class="overlay"></div>
  <div class="button"><a href="DRUM.php"> START LEARNING </a></div>
</div>




<div style=color:white;padding:30px"></div>

<div style="padding:30px 30px 250px"></div>







	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">
			
				<h3>Musicano<span>logo</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
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

				<p class="footer-company-name">musicano &copy; 2019</p>
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






	








