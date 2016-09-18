<?php
/*insert summary*/
function setSummary($conn) {
 if(isset($_POST['ordersubmit'],$_POST['tea'], $_POST['size'], $_POST['sugar'])){
	 @$tea = $_POST['tea'];
	 @$size = $_POST['size'];
	 @$sugar = $_POST['sugar'];
	 @$topping = $_POST['topping'];
	 @$quantity = $_POST['quantity'];
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
	$bubbleprice=0.3*$Ntoppings;
	if ($size=="S"){
		$teaprice=2.8;
	}
	elseif ($size=="M"){
		$teaprice=3.5;
		}
		else {
		$teaprice=3.9;
		}
	$unitprice=$teaprice+$bubbleprice;	 
	 $sql = "INSERT INTO orders (tea, size, sugar, toppings, Ntoppings, unitprice, quantity)  
	 VALUES ('$tea', '$size', '$sugar', '$toppings', '$Ntoppings', '$unitprice', '$quantity')";
	 $result = mysql_query($sql);
 }
}
?>