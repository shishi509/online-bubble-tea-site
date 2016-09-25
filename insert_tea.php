<!DOCTYPE>
<?php
	include 'dbconnectiontea.php';
?>
<html>
	<head>
		<title>Enter Tea</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });
</script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
<link rel="stylesheet" href="styleinsert_tea.css">
	</head>

<body bgcolor="#cce6ff">

	<form action="insert_tea.php" method="post" enctype="multipart/form-data">
		<table align="center" width="700" border="2" bgcolor="#ffcce6">
			<tr align="center">
				<td colspan="7"><h2>Insert New Product Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Name:</b></td>
				<td><input type="text" name="tea" size="60" required/>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product Type:</b></td>
				<td>
				<select name="tea_type" required>
					<option>Select a Type</option>
					<?php
					$sql = "SELECT * FROM type";
					$result = mysql_query($sql);
					if (!$result) {   die('Invalid query: ' . mysql_error());}
					while ($row_type = mysql_fetch_assoc($result)){
					$type_id = $row_type['type_id'];
					$type_title = $row_type['type_title'];
					echo "<option value='$type_id'>$type_title</option>";
}
					?>
				</select>	
				</td>
			</tr>				
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="tea_image"required/></td>
			</tr>			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="tea_des" cols="20" rows="10"></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Product Keywords</b></td>
				<td><input type="text" name="tea_keywords" size="50"required/></td>
			</tr>	
			<tr align="center">
				<td colspan="7" style="height:40px;"><input type="submit" name="insert_tea" value="Insert Product Now"/></td>
			</tr>
		</table>
		
	</form>

</html>
<?php
	if(isset($_POST['insert_tea'])){
	//getting the text data
	$tea = $_POST['tea'];
	$tea_type = $_POST['tea_type'];
	$tea_des = $_POST['tea_des'];
	$tea_keywords = $_POST['tea_keywords'];
	
	//getting image2
	$tea_image = $_FILES['tea_image']['name'];
	$tea_image_tmp = $_FILES['tea_image']['tmp_name'];
	
	move_uploaded_file($tea_image_tmp,"images/$tea_image");
	
	$insert_tea = "INSERT INTO products (tea,tea_type,tea_des,tea_keywords,tea_image) value ('$tea','$tea_type','$tea_des','$tea_keywords','$tea_image')";
	
	$insert_tea = mysql_query($insert_tea);
	if ($insert_tea){
		echo "<script>alert('A new bubble tea has been inserted!')</script>";
		echo "<script>window.open('insert_tea.php','_self')</script>";	
	}
	}
	
?>