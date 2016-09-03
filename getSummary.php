<?php
	include 'dbconnectiontea.php';
?>		
<?php 
					function getSummary($conn){
						$sql = "SELECT * FROM orders";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_assoc($result)){
						$id=$row['id'];
					?> 
					<tr class="border" align="center">
					<td><input type="checkbox" name="remove[]" value="<?php $row['id'];?>"/></td>
					<td><?php 
							echo $row['tea']."-";
							echo $row['size'];
							echo "<br>";
							echo $row['toppings']; 
							?></td>
					<td><input type="text" size="4" name="qty"/> </td>
					<td><?php echo $row['unitprice'];
						@$total+=$unitprice;
							  ?></td>
					</tr>
					<?php } }  ?>

<?php 
					function getSubtotal($conn){
					$sql = "SELECT * FROM orders";
						$result = mysql_query($sql);
						$total=0;
						while ($row = mysql_fetch_assoc($result)){
							$unitprice= $row['unitprice'];
							@$total += $unitprice;}
							echo $total;
					}


	?>

<?php     
					function deleteOrders($conn){
						$sql = "SELECT * FROM orders";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_assoc($result)){
						$id=$row['id'];}
					if(isset($_POST['update_cart'])) {
						foreach ($_POST['remove'] as $remove_id){
						$sql = "DELETE FROM orders WHERE id='$id'";
						$result = mysql_query($sql);
						}

					}
}
					?>