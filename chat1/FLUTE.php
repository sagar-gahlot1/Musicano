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
<link rel="stylesheet" href="buton.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="jsg.js"></script>





<div style="width: 980px; margin: 0 auto; overflow: hidden;">
    <div style="float: left; width: 80%;">Left Column</div>
    <div style="float: right; width: 20%;">Right Column</div>
</div>






<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="button.php">home</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
  <a href="profile.php">EDIT</a>
    <a href="profile.php?beginr_id=<?php echo $_SESSION['beginr_id']; ?>">WELCOME! <?php echo $urow['beginr_name']; ?></a>
	    <a href="logout.php">Logout</a>
  </div>
</div>






<form>
<input  CLASS="MYBUTTON" type="button" value="LESSON 1" onclick="window.location.href='lessfl.php'" />
<input class="MyButton" type="button" value="LESSON 2" onclick="window.location.href='home.php'" />
<input class="MyButton" type="button" value="LESSON 3" onclick="window.location.href='home.php'" />
<input class="MyButton" type="button" value="LESSON 4" onclick="window.location.href='home.php'" />
<input class="MyButton" type="button" value="LESSON 5" onclick="window.location.href='home.php'" />
</form>







<div class="wrapper">
<div class="videowrapper">
<video autoplay controls autoplay loop width="760" height="auto" >

    <source src="output_free.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
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
