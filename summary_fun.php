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
	 $sql = "INSERT INTO orders (tea, size, sugar, toppings, Ntoppings, unitprice)  
	 VALUES ('$tea', '$size', '$sugar', '$toppings', '$Ntoppings', '$unitprice')";
	 $result = mysql_query($sql);
 }
}
?>