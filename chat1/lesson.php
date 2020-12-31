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
<link rel="stylesheet" href="css/bu.css">
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
  <a href="#search">EDIT</a>
    <a href="profile.php?beginr_id=<?php echo $_SESSION['beginr_id']; ?>">WELCOME! <?php echo $urow['beginr_name']; ?></a>
	    <a href="logout.php">Logout</a>
  </div>
</div>



<form>
<input  CLASS="MYBUTTON" type="button" value="LESSON 1" />
</form>


<div class="wrapper">
<div class="videowrapper">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/1(1).mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">

    <p><h2>1</h2>
		<object data="admin/note1.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
	<a href="admin/note1.txt">no support?</a>
	</object>
	
</p>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/2.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>2</h2>
	<object data="admin/note2.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note2.txt">no support?</a>
    </object>

</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/3.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>3</h2>
	    <object data="admin/note3.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note3.txt">no support?</a>
    </object>
</p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/4.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>4</h2>
	        <object data="admin/note4.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note4.txt">no support?</a>
    </object>
</p>


</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/5.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>5</h2>
	        <object data="admin/note5.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note5.txt">no support?</a>
    </object> 
</p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/6.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>6</h2>
	        <object data="admin/note6.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note6.txt">no support?</a>
    </object> 
</p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/7.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>7</h2>
        <object data="admin/note7.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note7.txt">no support?</a>
    </object> 	
</p>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/8.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>8</h2>
	<object data="admin/note8.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note8.txt">no support?</a>
    </object>    
</p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/9.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>9</h2>
	        <object data="admin/note9.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note9.txt">no support?</a>
    </object>  
 </p>


</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/10.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>10</h2>
	        <object data="admin/note10.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note10.txt">no support?</a>
    </object> 
</p>
</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/11.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>11</h2>
	        <object data="admin/note11.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note11.txt">no support?</a>
    </object> 
</p>
</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/12.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>12</h2>
        <object data="admin/note12.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note12.txt">no support?</a>
    </object> 
	</p>
</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/13.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>13</h2>
	        <object data="admin/note13.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note13.txt">no support?</a>
    </object> 
</p>
</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVG/14.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>14</h2>
	        <object data="admin/note14.txt" type="text/plain" width="900"  style="height:150px; font-size:24em;">
    <a href="admin/note14.txt">no support?</a>
    </object> 
</p>
</blockquote>

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
