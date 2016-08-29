<?php
/*insert summary*/
function setSummary($conn) {
 if(isset($_POST['ordersubmit'])){
	 @$tea = $_POST['tea'];
	 @$size = $_POST['size'];
	 @$sugar = $_POST['sugar'];
	 @$topping = $_POST['topping'];
	 if (isset($_POST['topping'])) {
	 @$toppings = ""; 
	 foreach ($topping as $topping1) {
	 	$toppings .= $topping1 . "<br>";
	 }
	 }
	 else {
	 	$toppings = '';
	 }
	 $quantity = $_POST['quantity'];
	 $sql = "INSERT INTO orders (tea, size, sugar, toppings)  
	 VALUES ('$tea', '$size', '$sugar', '$toppings')";
	 $result = mysql_query($sql);
 }
}
?>