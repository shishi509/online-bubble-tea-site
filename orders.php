<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectiontea.php';
	include 'summary_fun.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles/style.css" media="all"/>
<link rel="stylesheet" href="styleorders.css">
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
			<div id="content_area">
				<div id="form_field">
				<h2>Order Your Bubble Tea</h2>
				<br>

			<?php echo "<form method='POST' action='".setSummary($conn)."'>
				<b>Customer Name:</b>
				<input type='textbox' name='name'>
				<b>Mobile:</b>
				<input type='textbox' name='mobile'>
				<br>
				<br>
				<b>Delivery Address:</b>
				<input type='textbox' name='address'>
				<b>Postcode:</b>
				<input type='textbox' name='postcode'>
				<br>
				<br>
				<select name='tea'>
				<option>Select your bubble tea</option>
				<option>Milk Tea</option>
				<option>Hazelnut Milk Tea</option>
				<option>Caramel Milk Tea</option>
				<option>Honey Milk Tea</option>
				<option>Chocolate Milk</option>
				<option>Ovaltine</option>
				<option>Black Tea Latte</option>
				</select>
				<br>
				<br>
				<b>Size:</b>
				<input type='radio' name='size' value='S'/> Small
				<input type='radio' name='size' value='M'/> Medium
				<input type='radio' name='size' value='L'/> Large
				<br>
				<br>
				<b>Sugar Level:</b>
				<input type='radio' name='sugar' value='0%'/> 0%
				<input type='radio' name='sugar' value='25%'/> 25%
				<input type='radio' name='sugar' value='50%'/> 50%
				<input type='radio' name='sugar' value='75%'/> 75%
				<input type='radio' name='sugar' value='100%'/> 100%
				<br>
				<br>
				<b>Toppings:</b>
				<input type='checkbox' name='topping[]' value='pearls'> Pearls
				<input type='checkbox' name='topping[]' value='jelly'> Jelly
				<input type='checkbox' name='topping[]' value='grass jelly'> Grass Jelly
				<input type='checkbox' name='topping[]' value='mango pudding'> Mango Pudding
				<input type='checkbox' name='topping[]' value='aloe vera'> Aloe Vera
				<br>
				<br>
				<textarea rows='5' cols='40'name='remarks' placeholder='additional remarks..'></textarea>
				<br>
				<br>
				<input type='checkbox' name='more' value='on'> I have more orders!
				<br>
				<br>
				<input type='hidden' name='datetime' value='".date('Y-m-d H:i:s')."'>
				<input type='submit' name='ordersubmit' value='Order Now'>
				</form>";			
?>
				</div>
			</div>
			<div id="summary">
			<br>
			<h4>Order Summary: </h4><br>
<?php
				getSummary($conn);		
?>	
			<br>
			<input type='submit' name='confirm' value='Confirm and Pay Now'>
			</div>
			</div>	
		</div>

</body>

