<?php
/*insert summary*/
function setSummary($conn) {
 if(isset($_POST['ordersubmit'])){
	 $tea = $_POST['tea'];
	 $size = $_POST['size'];
	 $sugar = $_POST['sugar'];
	 $topping = $_POST['topping'];
	 $toppings = ""; 
	 foreach ($topping as $topping1) {
	 	$toppings .= $topping1 . ", ";
	 }
	 $sql = "INSERT INTO orders (tea, size, sugar, toppings)  
	 VALUES ('$tea', '$size', '$sugar', '$toppings')";
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
		echo $row['toppings'];
 	}
	     echo "<br>";/*get line breaks*/}

 }
?>