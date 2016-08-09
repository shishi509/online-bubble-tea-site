<?php
	include 'dbconnectiontea.php';
/*getting the bubble tea types*/

function getTypes($conn){
	$sql = "SELECT * FROM type";
	$result = mysql_query($sql);
	if (!$result) {   die('Invalid query: ' . mysql_error());}
	while ($row_type = mysql_fetch_assoc($result)){
		$type_id = $row_type['type_id'];
		$type_title = $row_type['type_title'];
		echo "<li><a href = '#'> $type_title </a></li>";
}
}
?>