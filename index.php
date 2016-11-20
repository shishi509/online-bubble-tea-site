<!DOCTYPE>
<?php 
 include ("tea_type_fun.php");
?>
<html>
	<head>
		<title>ET Bubble Tea Shop</title>
	
	<link rel="stylesheet" href="styles/style.css" media="all"/>
	<link rel="stylesheet" href="styleindex.css" media="all"/>
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
			<div id="sidebar">
			<p style= "
			font-size: 20px; color: #008080; padding: 10px;">
			Our Products
			</p>
			<ul id="cats">
		   <?php 
			getTypes($conn);
			?>
			</ul>
			
			</div>
			<div id="content_area">
			</div>
		</div>
		<!--Content wrapper ends-->
		<div id="footer">This is footer!</div>

	</div>
	
	<!--Main container ends here-->
</body>
</html>

