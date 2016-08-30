<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectiontea.php';
?>			
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles/style.css" media="all"/>
<link rel="stylesheet" href="styleordersummary.css">
</head>
<body>
	<!--Main container starts here-->
	<div class="main_wrapper">		
		<!--Nevigation bar starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="orders.php">Order Online</a></li>
				<li><a href="promotions.php">Promotions</a></li
				<li><a href="about_us.php">About Us</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
		</div>
		<!--Nevigation bar ends-->
		<!--Banner and logo starts-->
		<div id="header">
		<img id="logo" src="images/logo.jpg"/>
		</div>
		<!--Banner and logo ends-->
		<!--Content wrapper starts-->
		<div class="content_wrapper">
			<div id="summary">
			<br>
			<h2>Order Summary: </h2><br>
			<div id="order_summary">
			<form action="" method="POST" enctype="multipart/form-data">
				<table aligh="center" width="800" bgcolor="skyblue">
					<tr align="center">
						<th>Remove</th>
						<th>Product(s)</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
<?php 
					function getSummary($conn){
						$sql = "SELECT * FROM orders";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_assoc($result)){
						@$unitprice=$teaprice+$bubbleprice;
						$bubbleprice=0.3*$row['Ntoppings'];
						if ($row['size']=="S"){
							$teaprice=2.8;
						}
						elseif ($row['size']=="M"){
							$teaprice=3.5;
						}
						else {
							$teaprice=3.9;
						}
					?> 
					<tr align="center">
					<td><input type="checkbox" name="remove[]"/></td>
					<td><?php 
							echo $row['tea']."-";
							echo $row['size'];
							echo "<br>";
							echo $row['toppings']; ?></td>
					<td><input type="text" size="4" name="qty"/> </td>
					<td><?php echo $unitprice; ?></td>
					</tr>
					<?php } }  
					getSummary($conn);
					?>
			<br>
			</div>
		</div>
	</div>
</body>
</html>
