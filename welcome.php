<?php 
session_start();
echo 'Welcome '.$_SESSION['username'];
echo '<br><a href="login.php?action=logout">Logout</a>';
?>