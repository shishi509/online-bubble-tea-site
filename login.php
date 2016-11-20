<?php 
session_start();
if(isset($_POST['loginbtn'])){
	require 'dbconnectiontea.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM users";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)==1){
	$_SESSION['username']=$username;
	header('Location:welcome.php');
	}
	else
		echo "Account's invalid";
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
