<?php
if (empty($_POST) === false){
	$errors=array();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	if (empty($name)===true || empty($email)===true || empty($message)===true){
		$errors[]= 'Name, email and message are required!';
	}else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
			$errors[]='That\'s not a valid email address';
		}
		if (ctype_alpha($name)===false){
			$errors[]='Name must only contain letters';
		}
	}
	if (empty($errors)=== true){
		mail('shirui_zhang@outlook.com', 'Contact from', $message, 'From:'.$email);
		header('Location: contact_thanks.html');
		exit();
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="stylecontact.css">
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
		<div class="form_field">
		<?php 
			if (isset($_GET['sent'])===true) {
				echo '<p>Thanks for contacting us!</p>';
			} else {
				if (empty($errors)=== false){
				foreach ($errors as $error){
					echo '<li>'.$error. '</li>';
					echo '<br>';
				}
				
			}
		?>
		<h2>Contact Us Form </h2>
		<br>
		<form class="form" action="" method="POST">
			<p class="name">
			<label for= "name">Name</label> </p>
			<p>	<input type="text" name="name" id="name" />
			</p>
			<p class="email">
			<label for= "email">Email</label> </p>
			<p> <input type="text" name="email" id="email"/>
			</p>
			<p class="message">
			<label for= "message">Message</label> </p>
			<p> <textarea name="message" placeholder="Write something to us..."></textarea>
			</p>
			<br>
			<p class="submit">
			<input type="submit" value="Send"/>
			</p>
		</form>
			<?php
			}
			?> 
		</div>
		</div>
	</div>  
</body>
</html>