<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectiontea.php';
	include 'summary_fun.php';

?>
<?php
if (empty($_POST) === false){
	$errors=array();
	$tea = $_POST['tea'];
	$size = $_POST['size'];
	$sugar = $_POST['sugar'];
	if (empty($tea)===true ){
		$errors[]= 'Please select your tea!';
	}
	else { 
		if (empty($sugar)===true) {
			$errors[]= 'Please select the sugar level of your tea!';
		}
		if (empty($size)===true) {
			$errors[]= 'Please select the size of your tea!';
		}
	}
		if (empty($errors)=== true){
		header('Location: order_summary.php');

	}
}
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
<?php 
		if (isset($_GET['submit'])===true) {
				echo '<p>Thanks for contacting us!</p>';
			} else {
		if (empty($errors)=== false){
		foreach ($errors as $error){
			echo '<li>'.$error. '</li>';
			echo '<br>';
		}
	}
?>
			<?php echo "<form method='POST' action='".setSummary($conn)."'>
				<p><b>Select Your Bubble Tea:</b></p>
				<br>
				<ul class='grid'>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Honey Green Tea'/>
	  				<img src='images/greentea.jpg'><br>
	  				Honey Green Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Assam Black Tea'/>
	  				<img src='images/blacktea.jpg'><br>
	  				Assam Black Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Yakult Green Tea'/>
	  				<img src='images/yakulttea.jpg'><br>
	  				Yakult Green Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Hazelnut Milk Tea'/>
	  				<img src='images/hazelnuttea.jpg'><br>
	  				Hazelnut Milk Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Chocolate Milk Tea'/>
	  				<img src='images/choctea.jpg'><br>
	  				Chocolate Milk Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Honey Milk Tea'/>
	  				<img src='images/honeytea.jpg'><br>
	  				Honey Milk Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Konjac Jelly Milk Tea'/>
	  				<img src='images/kongjacjelly.jpg'><br>
	  				Konjac Jelly Milk Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Black Tea Macchiato'/>
	  				<img src='images/blackmacchiato.jpg'><br>
	  				Black Tea Macchiato
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Green Tea Macchiato'/>
	  				<img src='images/greenmacchiato.jpg'><br>
	  				Green Tea Macchiato
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='KOI Cafe'/>
	  				<img src='images/koicafe.png'><br>
	  				KOI Cafe
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Peach Green Tea'/>
	  				<img src='images/peachgreen.jpg'><br>
	  				Peach Green Tea
					</label>
					</li>
					<li>
					<label>
	  				<input type='radio' name='tea' value='Honey Aloe Vera'/>
	  				<img src='images/honeyaloevera.jpg'><br>
	  				Honey Aloe Vera
					</label>
					</li>
				</ul>
				<br>
				<b>Size:</b>
				<input type='radio' name='size' value='S'/> Small
				<input type='radio' name='size' value='M'/> Medium
				<input type='radio' name='size' value='L'/> Large
				<br>
				<br>
				<b>Sugar Level:</b>
				<input type='radio' name='sugar' value='0% Sugar'/> 0%
				<input type='radio' name='sugar' value='25% Sugar'/> 25%
				<input type='radio' name='sugar' value='50% Sugar'/> 50%
				<input type='radio' name='sugar' value='75% Sugar'/> 75%
				<input type='radio' name='sugar' value='100% Sugar'/> 100%
				<br>
				<br>
				<b>Toppings:</b>
				<input type='checkbox' name='topping[]' value='Pearls'> Pearls
				<input type='checkbox' name='topping[]' value='Jelly'> Jelly
				<input type='checkbox' name='topping[]' value='Grass Jelly'> Grass Jelly
				<input type='checkbox' name='topping[]' value='Mango Pudding'> Mango Pudding
				<input type='checkbox' name='topping[]' value='Aloe Vera'> Aloe Vera
				<br>
				<br>

				<br>
				<input type='submit' name='ordersubmit' value='Add to Cart'>
				</form>";			
?>
			<?php
			}
			?> 

				</div>
			</div>
			</div>	
		</div>

</body>
</html>
