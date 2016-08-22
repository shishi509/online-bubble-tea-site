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
	 $remarks = $_POST['remarks'];
	 $sql = "INSERT INTO orders (name, mobile, address, postcode, tea, size, sugar, remarks)  
	 VALUES ('$name', '$mobile', '$address', '$postcode', '$tea', '$size', '$sugar', '$remarks')";
	 $result = mysql_query($sql);
 }
}

function getSummary($conn){
	$sql = "SELECT * FROM orders";
	$result = mysql_query($sql);
	if(isset($_POST['ordersubmit'])){
	while ($row = mysql_fetch_assoc($result)){
		echo "Thank you " .$row['name']." for ordering from ET Bubble Tea"."<br>";
		echo "Your order is: ".$row['tea']." in ".$row['size']." size with ".$row['sugar']. " sugar<br>";
	    echo nl2br("Your remark is: ".$row['remarks']."<br>");
	    echo "<br>";/*get line breaks*/
	    echo "<br>";}
 }
}

?>