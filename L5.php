<h1>ET Bubble Tea Shop</h1>
<form method="POST">
Customer Name
<input type='textbox' name="customer_name">
Mobile
<input type='textbox' name="textbox">
<br>
Delivery Region
<input type='radio' name="region" value='east'> East
<input type='radio' name="region" value='west'> West
<input type='radio' name="region" value='central'> Central
<br>
<select name="rest_type">
<option>Select your bubble tea</option>
<option>Milk Tea</option>
<option>Hazelnut Milk Tea</option>
<option>Caramel Milk Tea</option>
<option>Honey Milk Tea</option>
<option>Chocolate Milk</option>
<option>Ovaltine</option>
<option>Black Tea Latte</option>
</select>
<br>
Size
<input type='radio' name="size" value='S'> small
<input type='radio' name="size" value='M'> medium
<input type='radio' name="size" value='L'> large
<br>
Sugar Level
<input type='radio' name="sugar" value='0'> 0% sugar
<input type='radio' name="sugar" value='25'> 25% sugar
<input type='radio' name="size" value='50'> 50% sugar
<input type='radio' name="sugar" value='75'> 75% sugar
<input type='radio' name="size" value='100'> 100% sugar
<br>
Toppings<input type='checkbox' name='topping[]' value='pearls'> pearls
<input type='checkbox' name='topping[]' value='jelly'> jelly
<input type='checkbox' name='topping[]' value='suger'> grass jelly
<input type='checkbox' name='topping[]' value='suger'> mango pudding
<input type='checkbox' name='topping[]' value='suger'> aloe vera
<br>
<textarea rows='5' cols='40'name="description" placeholder="additional remarks.."></textarea>
<br>
<input type='checkbox' name="interested" value='good'> I'm interested in ET bubble tea promotions!
<br>
<input type='submit' name="submit" value='Submit'>
<?php
$input =$_POST;
var_dump($_POST);
$interested=isset($_POST['interested']);
?>