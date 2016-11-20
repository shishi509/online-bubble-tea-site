<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
<body>
	<!--Main container starts here-->
	<div class="main_wrapper">		
		<!--Nevigation bar starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="orders.php">Order Online</a></li>
				<li><a href="promotions.php">News</a></li
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
		<div id="content_area">
			<form action="user_register.php" method="post" enctype="multipart/form-data">
			<table align="center" width="1000">
		<tr align="center">
			<td colspan="6"><h2>Create an Account</h2></td>
		</tr>
		<tr>
			<td align="right">Username: </td>
			<td><input type="text" name="username"/></td>
		</tr>
		<tr>
			<td align="right">Password: </td>
			<td><input type="password" name="password"/></td>
		</tr>
		<tr>
			<td align="right">Email: </td>
			<td><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td align="right">Mobile: </td>
			<td><input type="text" name="mobile"/></td>
		</tr>
		<tr>
			<td align="right">Address: </td>
			<td><textarea cols="20" rows="4" name="address"></textarea></td>
		</tr>
		<tr>
			<td align="right">Postcode: </td>
			<td><input type="text" name="postcode"/></td>
		</tr>
		<tr align="center">
			<td colspan="6"><input type="submit" name="register" value="Create Account"/></td>
		</tr>
		</table>
		</form>
		</div>
		</div>
	</div>  
</body>
</html>