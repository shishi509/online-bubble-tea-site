<!DOCTYPE>
<?php
	date_default_timezone_get('Asia/Singapore');
	include 'dbconnectionnote.php';
?>
<html>
	<head>
		<title>Create New Entry</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });
</script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
<link rel="stylesheet" href="styleinsert_tea.css">
	</head>

<body bgcolor="#cce6ff">

	<form action="worknotes.php" method="post" enctype="multipart/form-data">
		<table align="center" width="700" border="2" bgcolor="#ffcce6">
			<tr align="center">
				<td colspan="7"><h2>Create New Entry Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Note Title:</b></td>
				<td><input type="text" name="title" size="60" required/>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Category:</b></td>
				<td>
				<select name="category" required>
					<option>Select a Category</option>
					<?php
					$sql = "SELECT * FROM category";
					$result = mysql_query($sql);
					if (!$result) {   die('Invalid query: ' . mysql_error());}
					while ($row_type = mysql_fetch_assoc($result)){
					$category_id = $row_type['category_id'];
					$category_title = $row_type['category_title'];
					echo "<option value='$category_id'>$category_title</option>";
}
					?>
				</select>	
				</td>
			</tr>				
			<tr>
				<td align="right"><b>Image:</b></td>
				<td><input type="file" name="image"/></td>
			</tr>			
			<tr>
				<td align="right"><b>Note:</b></td>
				<td><textarea name="note" cols="20" rows="10"></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Keywords: </b></td>
				<td><input type="text" name="keywords" size="50"required/></td>
			</tr>	
			<tr align="center">
				<td colspan="7" style="height:40px;"><input type="submit" name="insert_entry" value="Insert New Entry Now"/></td>
			</tr>
			<?php echo "<input type='hidden' name='datetime' value='".date('Y-m-d H:i:s')."'/>"; ?>
		</table>
	</form>
<ul style="list-style: none"><li><a href="readnotes.php">Open Notes</a></li></ul>
</html>
<?php
	if(isset($_POST['insert_entry'])){
	//getting the text data
	$title = $_POST['title'];
	$category = $_POST['category'];
	$note = $_POST['note'];
	$keywords = $_POST['keywords'];
	$datetime = $_POST['datetime'];
	//getting image2
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	move_uploaded_file($image_tmp,"images/$image");
	
	$insert_entry = "INSERT INTO work_notes (title,category,note,keywords,image,datetime) value ('$title','$category','$note','$keywords','$image','$datetime')";
	
	$insert_entry = mysql_query($insert_entry);
	if ($insert_entry){
		echo "<script>alert('A new entry has been inserted!')</script>";
		echo "<script>window.open('worknotes.php','_self')</script>";	
	}
	}
?>