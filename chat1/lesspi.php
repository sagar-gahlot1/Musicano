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

    <source src="LVF/1.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">

    <p><h2>1</h2>
	

Acquire a piano. Most teachers recommend that you purchase an actual piano to keep and practice on at home. Pianos vary widely in style, size, and cost; for most people, a medium-sized upright piano is ideal, as it takes up less space than a grand piano and has much better sound than the most compact styles. Bear in mind that although it's possible to find pianos for cheap and sometimes even for free, it is dangerous and difficult to move a piano from place to place.[1] Be sure you have a professional delivery service lined up to help you move your instrument. Keep in mind that after you move the piano it will take a couple hours or a day for the strings to acclimate so avoid playing it for a while.
<li>When you acquire a used piano for little or no money off the private market, it's likely that you'll need to get it tuned and possibly even repaired before it will be usable. Check your local business listings to find someone who's willing to make a house call and assess your piano's condition.</li>
<li>It's acceptable to purchase a high-quality electronic keyboard if you must (for example, if you live in a tiny studio apartment), but it isn't recommended. You'll have more trouble learning proper posture and hand positioning than you would with an actual piano, and you'll never be able to exert as much control over the sound of a keyboard as you can with a decent piano. There are some electric pianos, though, that have their keys weighted to feel like a real piano. This would be ideal but it may be just as expensive as getting a real piano. If you're dead set on an electric one for whatever reason this is the way to go.</li></p>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/2.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>2</h2>
Acquire accessories. Once your piano is set in place and has been tuned and examined by a professional, it's time to get a bench or stool (which are adjustable but lack the storage space found with many benches) and some music to play. Many pianos come with a bench; otherwise, they can be found at thrift stores and music stores. Try to get an adjustable bench, as bench height is very important to ensuring proper posture. Don't use a dining room chair or an ottoman as a substitute unless it naturally places you at the ideal height for playing.
<li>Ask your local music store for recommendations on basic, easy-to-play music books. It's likely the clerk will know of at least a couple of books you can use. Try to get one book that encapsulates beginner advice in the front and contains scales and arpeggios, and one book with simple, complete songs to practice, such as old folk songs.</li>
<li>If you have trouble keeping a rhythm, buy a metronome. A metronome sits either atop your piano or just beside it and ticks like a loud clock at a pace you set for it. It's a useful aid for maintaining a steady tempo as you begin to get better at playing.</li></p>
</br></br></br>
</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/3.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>3</h2>

Set up for proper posture. Sit on your piano bench with your music books on the sill of the piano, above the keyboard. Point your forearms towards the keys until they're parallel to the floor. If your bench is at the proper height, your fingers should gently arc downward and rest on the tops of the keys, without you having to bend your wrists or raise or lower your arms. Adjust the bench height until you feel no strain in your arms or shoulders when you sit at the piano. Make sure your shoulders and upper body is relaxed as well.
<li>Rest your feet flat on the ground, a comfortable distance apart, with the toes pointing straight ahead. Sit with your feet in a firm stance. Sit with a straight back - your shoulders shouldn't hunch forward, and your spine should be straight. Scoot in until your hands rest on the keys without having to stretch your arms. You should be able to move your feet forward to the pedals and back again without putting any strain on your upper legs. While you hold this position your entire body should be relaxed.</li>
<li>If you don't have an adjustable piano bench, or it won't adjust high enough to make you comfortable, it's acceptable to use pads or pillows to further raise the height of your seat. Just be sure they're even in terms of thickness, and stable enough that you won't have to worry about them slipping as you play.</li></p>

</blockquote>





<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/4.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>4</h2>

Double check your hand position. You should be seated at the center of the keyboard. Each of your ten fingers should rest on one white key. Your right thumb rests on the white key just to the left of a group of two black keys in the middle of the keyboard, which is the C note. Each finger on your right hand rests on the next following white key, thus D, E, F, and G. Your left hand follows the same pattern one octave down, only reversed: the left pinky should rest on C, and the left thumb should rest on G. There should be two white keys (A and B) between your thumbs.
<li>The C note that anchors your right thumb is in the center of the keyboard, and as such is often called “middle ” It's common for beginning players to use a sticker or a piece of tape to mark middle C. Just be sure it's something you can eventually clean off as you get better.</li>
<li>Learning the notes at the center first is conventional because a pianist must normally sit at the center of the keyboard to be able to reach every high and low note without standing up and moving.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/5.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>5</h2>
Learn about the keyboard. The keyboard of a piano repeats its notes from top to bottom across several octaves. This means that the notes change from low (left side) to high (right side), but don't vary in pitch. There are twelve notes to the chromatic scale on the piano: seven white key notes (C, D, E, F, G, A, B) and five black key notes (C-sharp/D-flat, D-sharp/E-flat, F-sharp/G-Flat, G-sharp/A-flat, and A-sharp/B-flat). Playing the white key notes from C through B and back to C creates the C major scale; playing the black key notes from C-sharp (next to the white C key) through B-flat creates a pentatonic (five tone) scale.
<li>The piano is tuned for all major and minor keys using equal temperament tuning, making it a very versatile instrument.</li>
<li>It's easy to double-check a piano's tuning by playing pairs of the same note at different octaves. The notes should sound identical; if they don't, one or both of them is sharp or flat and needs to be re-tuned.</li></p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/6.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>6</h2>
2
Play some notes. Starting with middle C, gently but firmly push down on a key to produce a note. Take some time and try pushing slower and faster, softer and harder, until you have an idea of the kind of control you can exert over the sound of the piano. Play in a natural way that doesn't tighten up your hands. If you continue to practice every day, bad hand positioning can cause injuries, just like doing a sport.
<li>Play black keys as well. Usually, you will be gradually introduced to these early when taking lessons by playing in the keys of G Major (1 sharp) and F Major (1 flat) for starters.</li></p>
</br></br></br>
</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/7.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>7</h2>

Play scales. Try playing notes starting with the pinky C of your left hand, all the way up to the thumb C of your right hand. Play each white key in order. Once you reach your left thumb, play the next note (A) with your middle finger. Then the next (B), with your pointer finger and lastly the thumb to middle C to finish the scale. Practice this until it begins to get easier – do not stretch your fingers, since this can cause straining which can cause injuries.
<li>Try playing a different scale. Start on one of the other fingers of your left hand, and play notes up the keyboard until you reach the same note on your right hand. Adjust sour notes by using black keys where necessary.</li>
<li>In addition to learning scales from a teacher or book, it's important to keep experimenting with them on your own so that you begin to get a head for them as quickly as possible.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/8.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>8</h2>

Learn about harmony. Although it doesn't take a lot of practice to be able to bang out “Hot Cross Buns” on a piano keyboard, unlocking all of your instrument's potential requires learning to play multiple notes at once on it, using all your fingers and both your hands. To achieve a nice sound with multiple notes, you have to understand how harmonies work. This is a very in-depth topic that can't be covered in full here, but you can use these notes to help guide your practice.
<li>Playing more than one note at the same time is called harmonizing. The theories behind harmony can be very difficult to learn, but a good rule to start out with is to avoid playing many keys that are right next to each other.</li>
<li>The space between a harmony's notes is called its “interval.” The most common intervals in piano music are fifths, fourths, and thirds. To hear examples of these, play C and G, C and F, or C and E, respectively.</li>
<li>Harmony intervals go all the way up to the fourteenth interval, which is considered a compound interval since it crosses more than one octave. Harmonies can also be altered by introducing flat or sharp notes, adding support notes, and so on. However, you shouldn't have to worry too much about these more advanced styles for a while yet.</li></p>

</blockquote>




<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/9.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>9</h2>

Study sheet music. The language of sheet music notation may seem difficult at first, but with a teacher or good guidebook and some practice, most people pick up the basics of it in just a few weeks. Being able to read sheet music opens up a whole world of compositions for you to learn and practice. Again, reading sheet music is a fairly involved procedure that won't be reviewed in full here; however, the very basics have been outlined below as a reference.
<li>Music notes are represented by filled-in or empty oval marks (called heads), with or without other marks (stems, which are straight lines, and hooks, which come off of stems) on a set of horizontal lines called a staff that starts at a particular note, which must be memorized based on the clef, or symbol, at the front of the staff.</li>
<li>Different styles of note represent different lengths. A hollow head without a stem is a whole note; a filled-in head with a stem and a hook is an eighth note, which lasts one-eighth as long as a whole note. Your teacher or guidebook can explain all the different notes in greater detail.</li>
<li>Each note is placed from left to right the same way we read a book, and from high to low based on how high or low on the instrument it is. Notes placed along the same vertical line are meant to be played together.</li>
<li>To add structure and regularity, the notes are divided into measures or bars, which are noted by vertical lines through the staff. Each bar is to be played in the same length of time; thus, a few long notes or many shorter notes may fit into any given bar, but they must always add up to the same total.</li>
<li>Two numbers next to the clef at the start of the music make up the time signature. A time signature shows how many of what length of note are to be played per bar. The common 4/4 time signature, for example, indicates that four quarter notes are to be played per bar.</li>
<li>There are special symbols for pauses in play, called “rests.” Rests are written into bars and read just like notes.</li></p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/10.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>10</h2>

Practice using your hands independently. Many piano compositions require you to play one rhythm with one hand, and another with the other hand. In particular, your left hand will generally be playing low, backing notes, while your right hand picks out a higher melody. Like patting your head while you rub your stomach, this technique takes a little time to pick up. Practice by playing a melody with your right hand, and playing whole note harmonies with your left. (It is important to note that this technique won't work well for more advanced pieces)
</p>
</br></br></br>
</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/11.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>11</h2>

Practice moving your hands. Eventually, you'll have to leave the middle C area of the keyboard and venture out towards the edges. Get used to the idea by sometimes playing your practice drills an octave lower or higher than normal. Sit as normal, and don't scoot down the bench – in a concert, you wouldn't have time to scoot from the low end to the high end. Instead, lean your torso slightly sideways (without bending your back or twisting), and stretch or contract your arms to reach the notes.
<li>Try changing positions on the fly. Play something simple, like a scale or arpeggio, from a lower position than usual, and jump your hands up to continue it through a second octave. If you start with your left hand, let it cross lightly over your right and hold position above the proper keys just before you need it for the second octave. As you play those notes, draw your right hand back to its higher position as well.</li></p>

</blockquote>


<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/12.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>12</h2>

Learn to use the pedals. Long before the electric guitar, pianos were using effects pedals to change the sound quality of the music coming from the strings, with one model having 6. There are two or three pedals on most modern pianos, each of which has an important function. In classical compositions, special notation is used to show you when and how to use which pedal. Your piano teacher can explain them to you.
<li>The soft pedal (also called "una corda") is usually on the left. It softens not only the volume, but also the tone color of the note being played. The soft pedal is used extensively in Beethoven's compositions, among others.</li>
<li>The sustaining pedal is on the right. It lifts the dampening elements off of the strings, allowing notes to ring, resonate, and blend much more easily. Clever use of the sustaining pedal can connect harmonies and notes in interesting and emotionally evocative ways, and it is commonly seen in compositions dating from the Romantics of the 19th century onward.</li>
<li>The third, central pedal is usually the sostenuto pedal if found on a grand piano. The sostenuto sustains notes, but only holds down the current note being played. On an upright piano, it's likely that the central pedal (when there is one) selectively holds down certain notes, normally in the lower register.</li>
<li>If you are playing on an upright piano, the central pedal is usually the "silent piano" pedal. It dulls the sound of your piano, so if you’re practicing early in the morning or late at night, or in an apartment, you won't distract your neighbors.</li></p>

</blockquote>



<div class="wrapper5">
<div class="videowrapper5">
<video autoplay controls autoplay loop width="460" height="auto" >

    <source src="LVF/13.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
</div>
</div>
<blockquote cite="https://www.huxley.net/bnw/four.html">
    <p><h2>13</h2>


Practice more. The piano is one of the most difficult instruments to master, but also one of the most rewarding: the sound it makes is distinctive and impressive, and the skills required to play it well transfer easily to any of a number of other instruments. The key to getting good at playing the piano is to practice as much as possible, whenever possible. Plan to devote at least half an hour every day to playing it; if you can spend an hour or more, that's even better. Even if you feel as though you're making no headway, practice will eventually lead to improvement.</p>
</br></br></br>
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
