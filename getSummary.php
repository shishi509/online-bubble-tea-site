<?php 
					function getSummary($conn){
						$sql = "SELECT * FROM orders";
						$result = mysql_query($sql);
						while ($row = mysql_fetch_assoc($result)){
						$bubbleprice=0.3*$row['Ntoppings'];
						if ($row['size']=="S"){
							$teaprice=2.8;
						}
						elseif ($row['size']=="M"){
							$teaprice=3.5;
						}
						else {
							$teaprice=3.9;
						}
						$unitprice=$teaprice+$bubbleprice;
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
					<td><?php echo $unitprice; 
						@$total+=$unitprice;
							  ?></td>
					</tr>
					<?php echo $total; 
					var_dump($total);?>
					<?php } }  ?>