<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectiontea.php';
	include 'getSummary.php';
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
			<h2>Order Summary: </h2>
			<div id="order_summary">
			<form action="" method="POST" enctype="multipart/form-data">
				<table aligh="center" width="800" bgcolor="white">
					<tr align="center">
						<th>Remove</th>
						<th>Product(s)</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
					<?php getSummary($conn);?>
					<tr align="right">
						<td colspan="3" ><b>Sub Total: </b></td>
						<td align="center"><b><?php 
						getSubtotal($conn);
?></b></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
						<td><input type="submit" name="continue" value="Continue Ordering"/></td>
						<td><button><a herf="checkout.php">Checkout</a></button></td>
					</tr>
			<br>
			</div>
		</div>
	</div>
</body>
</html>
