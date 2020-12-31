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

    <source src="LVP/1.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">

    <p><h2>1</h2>
	
Buy or rent a flute from a music store. If your school lets you use theirs, take that opportunity to try it and see if you like playing the flute before you spend money on one of your own. If that is not an option, consider renting one. This will give you the time to be certain that you enjoy the flute enough to purchase one.
<li>If you're sure you are going to enjoy it, rent-to-own or buying are 2 good options. If you are taking lessons, it's a good idea to consult with your teacher about the type of flute that would be good for you.</li>
<li>Beginner and intermediate flutes can cost from $100 to over $3,000. Good quality student flutes cost from $800 to $2,100. Beginners should get an open-hole student flute that has removable plugs. Over time, they should remove the plugs. This will improve the sound. Research and then purchase or rent a reputable brand. Cheap flutes are poorly made and hard to play. You can also rent a flute from a music store recommended by your music teacher.</li></p>
<li>Some flutes have an extra key at the end. This is called the B foot flute. It is slightly longer. More advanced players should think about purchasing a B foot flute.</li></p>
<li>Expensive, professional flutes are for more experienced flute players. They can range from $1,000 to $10,000+. They are usually hand made from precious metals such as gold, platinum and the most common, silver. This is for players that want a career in music.</li></p>
<li>Before you buy one, get some advice from other players and/or teachers to you help select an instrument that would be good for you (taking your level and your budget into account).</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/2.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>2</h2>
Consider taking lessons from a good private flute teacher. Ask your band director or a music shop employee for a recommendation. A good teacher will help you to progress from beginner to a more advanced level.</br></br></br></br></br></br></li></p>

</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/3.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>3</h2>

Assemble the flute. Before you can play your flute, you need to learn how to assemble it. You can do so as follows:
<li>The flute has 3 parts. The part that goes on the left side is the head joint and has the mouthpiece or lip-plate on it. The part with most of the keys is called the body. The left side of the body (where the head joint goes into) is called the barrel or tenon, and the end piece on the right is called the foot joint.</li></p>
<li>When putting the parts together, do not grab the rods and keys of your flute. This can bend them out of shape.</li></p>
<li>First put the foot joint on by holding the barrel of the flute. Hold the end of the foot joint and then do a twist and push motion, and the foot joint should slide right on! Now align the rods of of the foot joint with the middle of the keys on the body.</li></p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/4.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>4</h2>
Align the head joint. Grab the barrel and the head joint. Use the same motion, twist and push. Now align the bore (or the mouth hole) with the first key of the body.
<li>For beginners: The top of the flute is called the cap - it holds and adjusts the cork and adjusts the tuning of the flute. Do not keep twisting it and do not take the cap off and take cork out! If you feel the flute is out of tune, ask a teacher or someone who works at store that sells musical instruments to help you.</li></p>
<li>For those who do not have a teacher and would like to check if the cork is in the correct position, take your cleaning rod and flip it around. The bottom of the rod should have an etched line, stick this into the head joint and look in the hole of the mouthpiece - the etched line should be right in the middle.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/5.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>5</h2>
Learn how to blow into your flute. At first, producing a sound from your flute can be a little tricky, so you should practice the correct blowing method before you attempt to play any notes.
<li>This is one of the most important part of playing the flute well! Keep your shoulders relaxed, head up and breathe from your stomach. In terms of your posture, just imagine a string pulling you up from your belly button. Your stomach is going to stick out, but this is the correct way to breathe.</li></p>
<li>Take deep breaths, not just shallow ones!</li></p>
<li>Don't just blow, you must have the correct embouchure (or position of your lips) to play correctly. Think of spitting out a sunflower seed! Try it! Try it again and freeze after you spit the seed out. That is how small the hole of your mouth needs to be while you blow.</li></p>
<li>Next, here is how to make a sound. Blow across the mouthpiece like blowing across a bottle. Sound is produced by the breaking of your airstream on the edge of the embouchure hole. Half your breath should travel above the hole, and half should travel down through the flute.</li></p>
<li>Try to keep the corner of your lips firm but not tight!! You will know when they are too tight, because the corners of your mouth will become tired and sore.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/6.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>6</h2>
Learn how to hold the flute. Hold the flute with your mouth on the embouchure (lip hole) and the remainder of the instrument pointing to your right hand side, in a horizontal fashion.
<li>Let's start with the right hand. Shake your hand out and let it relax naturally by your side. Bring it up it so it's naturally curved. Notice where your thumb rests naturally on your hand. Some thumbs are comfortable resting between the pointer finger and the middle finger, or under the pointer finger, or under just under the middle finger. Just make note of where your thumb lands. Now, open the "mouth" and put it on your flute. Remember where your thumb landed naturally? Well place it on your flute and your fingers should hover above it. Now place your pointer finger down on the first key; this will be called 1, the next key is where your middle finger is placed, this is 2, your ring finger is the next key, this is 3, and your pinky should rest on the flat half circle key. 9 times out of 10 the pinky will be pressed down as you learn different notes and fingerings.</li></p>
<li>The left hand is a little harder. Same as the right hand, shake it out and let it drop naturally to the side. Then bring it up to face you. Open the "mouth" and bring the flute to your hand. Rest your thumb on the circle thumb key (for now, the rectangle key is also a thumb key - it is the B natural key, you will learn this as you get a fingering chart). Skip the top key and place you pointer finger on the second key, this is called 1 as well. Skip the next key and then place you middle finger down on 2. Your ring finger goes on the key next to your middle finger called 3. Now you pinky will hover over the key sticking out of you flute.</li></p>
<li>Keep your LH pinky hovering over the key! Get into this habit, don't let it hang below or press down. As you learn fingerings you will press this key for certain notes.</li></p>
<li>Keep in mind that this finger placement will feel awkward and unnatural at first. This is completely normal. With practice, it will begin to feel more comfortable.</li></p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/7.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>7</h2>
Consult a fingering chart to help you learn the notes. In order to learn how to play specific notes, you should consult a flute fingering chart, which will guide you through the proper placement of your fingers for each note.
<li>Fingering charts make use of pictures and diagrams, which make it easier to visualize the finger placement for each individual note. Most instruction books for the flute will contain a fingering chart, but you can also find these charts online.</li></p>
<li>Practice playing each note until you get it sounding just right. When playing a note on the flute it should not sound like you're just blowing or whistling - it should be a full, steady tone.</li></p>
<li>Once you have mastered playing each note individually, you can practice playing multiple notes in a row. It doesn't matter if it doesn't sound musical - the point of this exercise is to learn how to transition smoothly from one note to the next.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/8.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>8</h2>
Maintain the correct posture while playing. It is essential that you maintain the correct posture while playing the flute, as this will allow you to improve your air capacity and produce more consistent tones.
<li>Stand or sit up as straight as possible, with your chin raised and your eyes looking straight ahead. This opens your body up and allows you to produce clearer, longer notes.</li></p>
<li>Stand with your two feet planted on the ground and the left foot slightly in front of the right. Your body should be at an angle, this is a more natural position than keeping your body facing straight ahead. Also your shoulders will not be in a awkward position when you're reading music. Keep most of your weight on the right foot/back foot. Try not to stick your hip out too much or keep your neck and back in odd positions.This will only lead to tension and pain, which will interfere with your playing.</li></p>
<li>Remember to keep your body relaxed and avoid tensing up as you play so you will produce a smoother, richer sound.</li></p>
<li>If you're using a music stand, make sure that you keep it at eye level. If the stand is too low, it will cause you to bend your neck and tuck your chin, which will restrict your airway and cause neck pain.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/9.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>9</h2>
Practice for 20 minutes everyday. Practice makes perfect. But keep in mind that it's much better to practice for short periods everyday especially at the beginning. It takes stamina to play the flute and you can build up your stamina over time. As you get more advanced, start to increase your practice time.
<li>Make your practice goal-oriented, as this will help you to remain focused. Keep these goals small but concrete. For example, aim to perfect the transition from a B to an A note.</li></p>
<li>If you practice for long periods of time and infrequently, your body will be overtaxed and feel stiff. You will definitely feel frustrated. Your body will feel better if you practice everyday and slowly increase your time.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/10.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>10</h2>
Stretch after practicing. You should always stretch after your practice session as it will relieve tension and prevent stiffness after playing, leaving you in better shape for your next practice session. Some good exercises are as follows:
<li>Bend your knees slightly and crouch down with your arms extended behind you, as if you're skiing. Then swing your arms upwards. Repeat 5-10 times to stretch out your arms and shoulders.</li></p>
<li>Inhale and draw your shoulders upwards towards your ears and stay in this position for several seconds. Release your shoulders downwards as you exhale. Repeat several times to release tension and pain in the shoulders and neck.</li></p>
<li>Stand with your hands down by your sides and shake your arms and hands as if they were made out of rubber. This will help to loosen the joints in the arms and hands.</li></p>
<li>There are many other stretches you can do to relieve tension or body aches - just do what feels right for you!

</li></p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/11.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>11</h2>
Don't give up! Learning to play the flute takes a while. Don't get discouraged if you can't make a sound when you first get it. Be patient, keep practicing, and get the assistance of a good teacher. Soon you'll be making beautiful music!</br></br></br></br></br></br></p>

</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVP/12.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>12</h2>

Clean your flute. Your flute should have come with a wood/metal/or plastic rod that looks like an oversized threading needle. Thread a silky swab through the top or purchase a cleaning flute flag, this will remove condensation from the inside of your flute. Occasionally, polish it with a cloth but don't use silver polish. A simple microfiber cloth is all you need.
<li>Never leave your cleaning swab inside your flute, this will cause the moisture to ruin the pads of your flute.</li></p>
<li>Take your flute apart the same way you put it together. Grab the tenon and twist and pull out the head joint. Then grab the tenon and the bottom of the foot joint and twist and pull. Now take your cleaning rod/flag and swab the inside of each piece and it place back into the case. Finally, put each piece back into the flute case where they belong and will be protected!</li></p>

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
