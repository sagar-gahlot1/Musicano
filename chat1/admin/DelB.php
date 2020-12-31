<?php
function insert_form()
{
include("c.php");

if ( $conn1->query("delete from begin where beginr_id = '" . $_GET["beginr_id"] . "'") === TRUE)
echo  "Record success fully deleted";
else 
echo " Error deleting record" . $conn1->error;

echo " Available records in table";

		$r = $conn1->query("select * from begin");
echo "<table border= '2' cellpadding='3' bgcolor ='red' width='95%' align='center'>";
echo "<tr>";
echo "<th>Beginner ID</th>";
echo "<th>Beginner Name</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Phone</th>";
echo "<th>User Name</th>";
echo "</tr>";
		while($row = $r->fetch_assoc())
		{
		echo "<tr>";
		echo "<td>" . $row["beginr_id"] . "</td>";
		echo "<td>" . $row["beginr_name"] . "</td>";
		echo "<td>" . $row["address"] . "</td>";
		echo "<td>" . $row["email"] . "</td>";
		echo "<td>" . $row["phone"] . "</td>";
		echo "<td>" . $row["user_name"] . "</td>";
 echo "</tr>";	
}
$c->close();
}
if (isset($_GET['bsubmit']))
{
insert_form();
}
?>

