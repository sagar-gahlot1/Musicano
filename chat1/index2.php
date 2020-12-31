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
  <title>Beginner</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body background="img/IMG1.jpg">
<link rel="stylesheet" href="btt.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="jsg.js"></script>






<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="log.php">home</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="About.php">About</a>
  </div>
</div>



<div class="img">
<img src="LOGO.PNG" alt="Smiley face" height="250" width="400" >
</div>


<font color="white"><h1><i><li type="square">Musicano a learning website which also <br><br> &nbsp &nbsp &nbsp help to interaction with artist.</li><BR><br><li type="square">Musicano a learning website.</li></i></h1></font>
<font color="white"><h1><i></i></h1></font>


<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="indo1.php">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="register2.php" method="post">
					<input type="text" class="input" name="beginr_name" autocomplete="off" placeholder="Beginner Name">
					<input type="text" class="input" name="user_name" autocomplete="off" placeholder="User_name">
					<input type="password" class="input" name="password" autocomplete="off" placeholder="Password">
					<input type="email" class="input" name="email" autocomplete="off" placeholder="Email Address">
					<input type="phone" class="input" name="phone" autocomplete="off" placeholder="Phone Number">
					<input type="submit" class="button" value="Sign Up">
				</form><!--.login-form-->
				<div class="help-text">
					<p>By signing up, you agree to our</p>
					<p><a href="#">Terms of service</a></p>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

		</div><!--.tabs-content-->
	</div><!--.form-wrap-->


	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">
			
				<h3>Musicano<span>logo</span></h3>

				<p class="footer-links">
					<a href="log.php">Home</a>
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
					<p><a href="mailto:support@company.com">support@musicano.com</a></p>
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
