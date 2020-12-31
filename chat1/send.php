<?php
	include ('conn2.php');
	session_start();
	if(isset($_POST['msg'])){		
		$msg = addslashes($_POST['msg']);
		$id = $_POST['id'];
		mysqli_query($conn1,"insert into `chat` (chat_room_id, chat_msg, chat_date, arti_id) values ('$id', '$msg' , '$date','".$_SESSION['arti_id']."')") or die(mysqli_error());
	}
?>
	<?php
	if(isset($_POST['res'])){
		$id = $_POST['id'];
	?>
<?php
		$query=mysqli_query($conn1,"select * from `chat` left join `art` on art.arti_id=chat.arti_id where chat_room_id='$id' order by chat_date asc") or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
	?>	
		<div>
			<?php echo $row['chat_date']; ?><br>
			<?php echo $row['artist_name']; ?>:
			<?php echo $row['chat_msg']; ?><br>
		</div>
		<br>
	<?php
		}
	}	
?>