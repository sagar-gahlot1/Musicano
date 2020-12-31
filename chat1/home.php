<?php
	include('conn2.php');
	session_start();
	if (!isset($_SESSION['beginr_id']) ||(trim ($_SESSION['beginr_id']) == '')) 
	{
	header('location:index2.php');
    exit();
	}
	
	$uquery=mysqli_query($conn1,"SELECT * FROM `beginnr` WHERE beginr_id='".$_SESSION['beginr_id']."'");
	$urow=mysqli_fetch_assoc($uquery);
?>
<!DOCTYPE html>
<html>
<head>
<title>Public Chat</title>
<link rel="stylesheet" href="css/hme.css">
<script src="jquery-3.1.1.js"></script>	
<script src="js/home.js"></script>
<script type="text/javascript">

$(document).keypress(function(e){ //using keyboard enter key
	displayResult();
	/* Send Message	*/	
	
		if(e.which === 13){ 
				if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
					}
				});
			}	

			/* $("form").submit(); 
			 alert('You press enter key!'); */
		} 
	}
); 


$(document).ready(function(){ //using send button
	displayResult();
	/* Send Message	*/	
		
		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
					}
				});
			}	
		});
	/* END */
	});
	
	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
			}
		});
	}
</script>

</head>

<body background="IMG22.jpg">
<table id="chat_room" align="center">
	<tr>
	<th><h4>Hi, <a href="profile.php?beginr_id=<?php echo $_SESSION['beginr_id']; ?>"><?php echo $urow['beginr_name']; ?></a>  - <a href="logout.php" onclick="return confirm_logout();">Logout</a></h4></th>
	</tr>
	<?php
		$query=mysqli_query($conn1,"select * from `chat_room`");
		$row=mysqli_fetch_array($query);
	?>
				<div>
				<tr>
				<td><b><?php echo $row['chat_room_name']; ?></b></td><br><br>
				</tr>
				</div>
			<tr>
				<td>
				<div class='scroll' id="result" ></div>
				<form class="form">
					<!--<input type="text" id="msg">--><br/>
					<textarea id="msg" rows="4" cols="85"></textarea><br/>
					<input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
					<button type="button" id="send_msg" class="button button2">Send</button>
				</form>
				</td>
			</tr>

</table>

</body>
</html>