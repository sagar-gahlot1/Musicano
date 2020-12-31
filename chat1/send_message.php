<?php
	include ('conn2.php');
	session_start();
	if(isset($_POST['msg'])){		
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
		mysqli_query($conn1,"insert into `chat` (chat_room_id, chat_msg, chat_date, beginr_id) values ('$id', '$msg' , '$date','".$_SESSION['beginr_id']."')") or die(mysqli_error());
	}
?>
	<?php
	if(isset($_POST['res'])){
		$id = $_POST['id'];
	?>
	<?php
		$query1=mysqli_query($conn1,"select * from `chat` left join `beginnr` on beginnr.beginr_id=chat.beginr_id where chat_room_id='$id' order by chat_date asc") or die(mysqli_error());
		while($row=mysqli_fetch_array($query1)){
	?>	
		<div>
			<?php echo $row['chat_date']; ?><br>
			<?php echo $row['beginr_name']; ?>:
			<?php echo $row['chat_msg']; ?><br>
		</div>
		<br>
	<?php
		}
	}	
?>


