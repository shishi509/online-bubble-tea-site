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
<link rel="stylesheet" href="styles/loginoverlay.css">
</head>
<body>
	<!--Main container starts here-->
	<div class="main_wrapper">		
		<!--Nevigation bar starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="orders.php">Order Online</a></li>
				<li><a href="news.php">News</a></li
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
						<th>Product (s)</th>
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
						<?php deleteOrders($conn);?>
						<td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
						<td><input type="submit" name="continue" value="Continue Ordering"/></td>
						<td>
						<div class="w3-container">
						  <button type= "button" onclick="document.getElementById('id01').style.display='block'" class="w3-btn" name="checkout">Checkout</button>
						  <div id="id01" class="w3-modal">
						    <div class="w3-modal-content">
						      <div class="w3-container">
						        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
									<?php 
									session_start();
									if(isset($_POST['loginbtn'])){
										require 'dbconnectiontea.php';
										$username=$_POST['username'];
										$password=$_POST['password'];
										$sql = "SELECT * FROM users WHERE BINARY username=BINARY '$username' AND BINARY password=BINARY '$password'";
										$result = mysql_query($sql);
										$values = mysql_fetch_array($result);
										if($username=$values['username']){
										$_SESSION['username']=$username;
										header('Location:welcome.php');
										}
										else 	
										echo "Your account or password is invalid";
										
									}
									if(isset($_GET['logout'])) {
										session_unregister('username');
									}
									?>
									<h2>Log in to order</h2>
									<form method="post">
										<table cellpadding="2" cellspacing="2" border="0">
											<tr>
												<td>Username</td>
												<td><input type="text" name="username"/></td></tr>
											<tr>
												<td>Password</td>
												<td><input type="password" name="password"/></td></tr>
											<tr>
												<td>&nbsp;</td>
												<td><input type="submit" name="loginbtn" value="Log in"/></td></tr>
										</table>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
						</td>
					</tr>
			<br>
			</div>
		</div>
	</div>
</body>
</html>
