<!DOCTYPE html><head><script type="text/javascript" src="./js/cart.js"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="./css/style.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head><body><?phpinclude("./templates/filter.php");include("./functions.php");session_start();	?>	<?php	/*if(isset($_POST['submit'])){	$type=$_POST['selectqty'];	for($i=1;$i<$type;$i++)	{		$type=$type+$type;	}}*/?>	<div class="container">	<div class="row">		<div class="col-md-4 col-md-offset-4">		<br>		<br>		<br>		<br>		<br>		<br><table class="table table-hover table-striped">	<tbody>		<th>Item</th>		<th>Quantity</th>		<th>Price</th>		<th>Action</th>	<?phpif (isset($_SESSION["cart"])) {	$whereIn=implode(',', $_SESSION["cart"]);	$value="";	$qty="";	$query="SELECT * FROM food_items WHERE id IN($whereIn)";	include("./connections.php");	if ($result){ 	while ($row=mysqli_fetch_array($result)){ 			$id=$row["id"]; 			$name=$row["Title"]; 			$price=$row["price"]; 	 		?> 		<tr id="farrukh">			<td>				<?php echo"$name" ?>			</td>			<td>			<form action="" method="post">				<select name="selectqty" class="form-control" <?php echo"onchange='mainInfo($id,this.value)'";  ?> style="width: 60px;">					<option value=1>1</option>					<option value=2>2</option>					<option value=3>3</option>					<option value=4>4</option>					<option value=5>5</option>				</select>			</td>										<td>				<?php 								echo"RS.$price/-";				 ?>			</td>			<td>				<?php  echo "<a href='?remove=$id'>Remove</a><br/>"; ?>			</td>		</tr>				<?php							$value=$value+$price; 		} ?> 		<tr> 			<td colspan="4" style="font-size: 22px; text-align: right;"> 				<?php echo "<b>Total</b> = <b>RS.$value/-</b>";	 ?> 			</td> 		</tr> 		<tr> 			<td style="text-align: right;"> 				<?php echo "<a href='./delete.php' class='btn btn-default'>Empty cart</a>"; ?> 			</td> 			<td> 				<?php echo "<button type='submit' name='submit' class='btn btn-default'>Update cart</a>"; ?> 			</td> 			<td> 				<?php echo "<a href='./checkout.php' class='btn btn-default'>Checkout</a>"; ?> 			</td> 		</tr> 		</form> 		<?php  	}}else{	echo "You havent added anything to cart";	}?>	</tbody></table></div></div></div><script src="js/jquery-2.1.1.js"></script><script src="js/jquery.mixitup.min.js"></script><script src="js/main.js"></script> <!-- Resource jQuery --></body><?phpif (isset($_GET["remove"])) {	foreach ($_SESSION["cart"] as $key => $val) {		if ($val==$_GET["remove"]) {		unset($_SESSION["cart"][$key]);		}	}}?></html>