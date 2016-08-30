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
	 	$toppings .= $topping1 . "/";
	 }
	 }
	 else {
	 	$toppings = '';
	 }
	 $Ntoppings = count($topping);
	 $sql = "INSERT INTO orders (tea, size, sugar, toppings, Ntoppings)  
	 VALUES ('$tea', '$size', '$sugar', '$toppings', '$Ntoppings')";
	 $result = mysql_query($sql);
 }
}
?>