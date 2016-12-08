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
<form method="post" action="login.php">
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
