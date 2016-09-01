<?php
	include 'dbconnectiontea.php';
?>		
<?php 
					function getSummary($conn){
						$sql = "SELECT * FROM orders";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_assoc($result)){

					?> 
					<tr class="border" align="center">
					<td><input type="checkbox" name="remove[]"/></td>
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