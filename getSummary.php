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
					<td><?php echo "<input type='checkbox' name='remove[]' value='".$row['id']."'/>"; ?></td>
					<td><?php 
							echo $row['tea']."-";
							echo $row['size'];
							echo "<br>";
							echo $row['toppings']; 
							?></td>
					<td><?php echo "<input type='text' size='2' name='qty' value='".$row['quantity']."'/>"; ?></td>
	
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
							$quantity = $row['quantity'];
							$unitprice*=$quantity;
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
						$sql = "DELETE FROM orders WHERE id='$remove_id'";
						$result = mysql_query($sql);
						header("Location: order_summary.php");
						}
					}
}
					if (isset($_POST['continue'])) {
						header("Location: orders.php");
					}
					?>

