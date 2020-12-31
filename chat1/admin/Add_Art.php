<html>
<head> <title> form conection with database </title> </head>
<body background="IMG22.jpg">>

<font size = "6pt" color= "white" >
<a href="front.php">Back</a>
<center>
<div class="form">
<i><h3> NEW STUDENT ENTRY FORM </h3></i>
<form name="form_record" method = "post"  action="AddA.php">
<table border=2>
<tr><td>
<font color="white">Artist ID </td><td><input type="text" name="arti_id"/></td></tr>
<tr><td>
<font color="white">Artist Name: </td><td><input type="text" name="artist_name"/></td></tr>
<tr><td>
<font color="white">User Name: </td><td><input type="text" name="username"/></td></tr>
<tr><td>
<font color="white">Password: </td><td><input type="password" name="password"/></td></tr>
<tr><td>
<font color="white">Email: </td><td><input type="email" name="email"/></td></tr>
<tr><td>
<font color="white">Phone: </td><td><input type="phone" name="phone"/></td></tr>
<tr><td>
<font color="white">Address: </td><td><input type="text" name="address"/></td></tr>
<tr><td>
<font color="white">Expert In: </td><td><select name="expert_in" style="width:240px; height:35px;">
		<option>Guitar</option>
		<option>Drum</option>
		<option>Flute</option>
		<option>Piano</option>
	  </select></td></tr>
<tr><td colspan=2>

<button>ADD RECORD</button>
</tr>
</table>
</center>
</form>
</div>
</body>
</html>
