<!DOCTYPE>
<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectionnote.php';
?>
<?php 
function getComments($conn){
	$sql = "SELECT * FROM work_notes";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)){
	echo "<div class='comment-box'><p>";
		echo $row['title']."<br>";
		echo $row['datetime']."<br>";	
		echo nl2br($row['note']); /*get line breaks*/

}}
	getComments($conn);
?>
