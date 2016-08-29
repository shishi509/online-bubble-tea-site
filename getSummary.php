<?php
function getSummary($conn){
	$sql = "SELECT * FROM orders";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)){
		echo $row['tea'];
		echo "<br>";
		echo $row['size'].", ".$row['sugar']. "<br>";
		echo $row['toppings'];
 	}
 }

 ?>