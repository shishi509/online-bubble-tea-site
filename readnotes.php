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
<body background="bg2.jpg">
<div class="content_area">
<div class="side_bar">
<p>Categories</p>
<?php  
function getCats($conn){
	$sql = "SELECT * FROM category";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)){
	echo "<div class='cats'>";
		echo '<a href="http://www.website.com/page.html">';
		echo $row['category_title']."<br>"."<br>";
		echo '</a>';
		echo "</div>";
}}
	getCats($conn);
?>

<p>Month</p>
</div>
<?php  
function getComments($conn){
	$sql = "SELECT * FROM work_notes";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)){
	echo "<div class='comment-box'><p>";
	echo "<div class='title'>";
		echo $row['title']."<br>"."<br>";
		echo "</div>";
	echo "<div class='time'>";
		echo $row['datetime']."<br>"."<br>";	
		echo "</div>";
		echo nl2br($row['note']); /*get line breaks*/
		echo "</div>";
}}
	getComments($conn);
?>
</div>
</body>
</html>