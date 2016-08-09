<?php
/*insert summary*/
function setSummary($conn) {
 if(isset($_POST['ordersubmit'])){
	 $name = $_POST['name'];
	 $mobile = $_POST['mobile'];
	 $address = $_POST['address'];
	 $postcode = $_POST['postcode'];
	 $tea = $_POST['tea'];
	 $size = $_POST['size'];
	 $sugar = $_POST['sugar'];
	 $topping = $_POST['topping'];
	 $remarks = $_POST['remarks'];
	 $datetime = $_POST['datetime'];
	 $interested = $_POST['interested'];
	 $sql = "INSERT INTO orders (name, mobile, address, postcode, tea, size, sugar, topping, remarks, interested)  
	 VALUES ('$name', '$mobile', '$address', '$postcode', '$tea', '$size', '$sugar', '$topping', '$remarks', '$interested')";
	 $result = mysql_query($sql);
 }
}

function getSummary($conn){
	$sql = "SELECT * FROM orders";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)){
	echo "<div class='summary-box'><p>";
		echo $row['name']."<br>";		
		echo $row['tea']."<br>";
		echo $row['size']."<br>";	
	    echo $row['sugar']. "<br>";
		echo $row['topping']. "<br>";
		echo nl2br($row['remarks']); /*get line breaks*/
	echo "</p>
	</div>";
 }
}