<?php
/*insert summary*/
function setSummary($conn) {
 if(isset($_POST['ordersubmit'])){
	 $tea = $_POST['tea'];
	 $size = $_POST['size'];
	 $sugar = $_POST['sugar'];
	 $sql = "INSERT INTO orders (tea, size, sugar)  
	 VALUES ('$tea', '$size', '$sugar')";
	 $result = mysql_query($sql);
 }
}

function getSummary($conn){
	$sql = "SELECT * FROM orders";
	$result = mysql_query($sql);
	if(isset($_POST['ordersubmit'])){
	while ($row = mysql_fetch_assoc($result)){
		echo $row['tea'];
		echo "<br>";
		echo $row['size']." size with ".$row['sugar']. " sugar<br>";
	    echo "<br>";/*get line breaks*/}
 }
}

?>