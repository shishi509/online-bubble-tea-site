<!DOCTYPE>
<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectionnote.php';
?>
<html>
	<head>
		<title>Read My Notes</title>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
<link rel="stylesheet" href="readnotes.css">
	</head>
<?php 
function getComments($conn){
	$sql = "SELECT * FROM work_notes";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)){
	echo "<div class='comment-box'><p>";
		echo $row['title']."<br>"."<br>";
		echo $row['datetime']."<br>"."<br>";	
		echo nl2br($row['note']); /*get line breaks*/

}}
	getComments($conn);
?>
