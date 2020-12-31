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

<link rel="stylesheet" href="css/but.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="jsg.js"></script>






<div class="topnav">

  <a><i><b>MUSICANO</b></i></a>
  <a class="active" href="button.php">home</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="beginr_id=<?php echo $_SESSION['beginr_id']; ?>">WELCOME! <?php echo $urow['beginr_name']; ?></a>
	    <a href="logout.php">Logout</a>
  </div>
</div>


<form>
<input  CLASS="MYBUTTON" type="button" value="LESSON 1" />
</form>


<div class="wrapper">
<div class="videowrapper">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVD/1.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">

    <p><h2>1</h2>
	
Get familiar with the basic drum kit. Each kit is different, using different kinds of drums that make up a set. There are different brands, sizes, sticks used, and different tunings among other slighter modifications that will affect the overall sound of each instrument. Still, many drum kits employ basically the same fundamental pieces. Most basic kits include:
<li>A bass drum, which makes the low-pitched booming sound when struck by a weighted mallet operated by a foot pedal.</li>
<li>A snare drum, usually located to the non-dominant side of the drummer and played with the drummer's non-dominant stick. The snare is a tight, bright drum with a band of rattling metal beads under the drum head. Typically, the snare is known for its crisp "click" sound followed by the "resonating shuffle" of the beads.</li></p>
<li>There are many types of tom-tom drums, but the most common three are the Floor Tom (the deepest of the three), the Mid-Tom (the medium of the three), and the High-Tom (the most high-pitched of the three). A very basic kit may only have the floor tom, while others may have many. They're tuned differently to create an array of different deeper noises for fills.</li></p>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVD/2.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>2</h2>
Learn the different kinds of cymbals. There are many different kinds of cymbals, varying in type, shape, and sound. A cymbal is a round, metal object that resonates when struck. The four most commonly used types of cymbals are the hi-hat, the ride, the splash, and the crash.
<li>The hi-hat is a pair of cymbals mounted on a foot pedal. The foot pedal is usually played by the left foot and controls the cymbals, bringing them together when pressed and bringing them apart when released. You can strike the cymbal when it is apart or closed, and you can shut the cymbals with your feet at different rates of speed, each creating a different sound.</li></p>
<li>The ride cymbal creates a more subtle and deeper sound than the other cymbals because it is used to play very repetitively throughout most music. The cymbal will usually resonate from one strike to another, featuring a very long reverberating "finish" to the sound.</li></p>
<li>The splash is a cymbal that creates a metallic "splashing" sound, similar to the sound a water splash makes. It dies quickly after peaking and is typically used in basic fills to ornament your beat.</li></p>
<li>The crash is similar to the splash, but usually generates a loud and long, sustained sound. Listen for the crash at the end of measures in pop music or especially in periods of heightened drama in orchestral music.</li></p>
</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVD/3.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>3</h2>

Get comfortable holding the drum sticks. There are two main ways to hold drum sticks, called the matched grip and the traditional grip.
<li>In the matched grip, you hold the sticks between your thumb and index finger a few inches from the bottom of the sticks. Wrap your remaining fingers around the sticks. Be sure the back side of your hands are facing up rather than facing to the side. This method is the most common way of holding sticks, allowing you plenty of wrist control and comfort.</li></p>
<li>In the traditional grip, you'll hold the stick in your non-dominant hand by resting the stick in the cradle between your thumb and index finger and on top of your ring finger. Wrap your thumb, index and middle fingers around the stick. Hold the other stick using a matched grip. Some jazz drummers use a traditional grip to offer a different kind of control on the snare drum, playing intricate rhythms on it as part of fills.</li></p>
</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVD/4.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>4</h2>

Research starter kits. If you are interested in drumming, price many different new and used options before you spend the money on a set. Talk to the people at the stores and they should steer you in the right direction. Start out with a cheap, new set or a used set until you finally decide if you are going to stick with it.
<li>You can also consider joining your school band to have access to the equipment and lessons to help you learn. You might even ask in your band department if you'd be allowed to practice a few times on a kit because you're interested in the drums. The music folk are generally friendly people, and it can't hurt to ask.</li></p>
</br></br></br></br>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVD/5.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>5</h2>

Try a variety of drumsticks. There are a lot out there, but there is no right or wrong stick. 5A is a good stick weight for beginners.
<li>Have your drum teacher or the people at the store give you some pointers on how to hold the sticks, how to hit the drum properly, how to adjust the drums to fit your stature, and how to set up your kit at home. You can also find a lot of this information for free on the internet.</li></p>
</br></br></br></br>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVD/6.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>6</h2>
Learn to sit at the kit with the proper posture. Good posture will make you more comfortable during practice and help you reach the drums more easily. You'll sound better and enjoy playing more by improving your posture.
<li>Sit up straight and keep your elbows in. Stay in tight to the kit, keeping the floor pedals at a comfortable distance from you.</li></p>
</br></br></br></br>
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
