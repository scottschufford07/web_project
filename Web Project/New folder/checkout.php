<?php
session_start();
if (isset($_SESSION["log"])) {
$whereIn=implode(',', $_SESSION["cart"]);
$id=$_SESSION["log"];
$query="INSERT INTO orders (user_id,orderu) VALUES ('$id','$whereIn')";
include("connections.php");
if ($result) {
	echo "<script>alert('item ordred kindly print yr order out');</script>";
}
?>
<!DOCTYPE html>
<head>
<script type="text/javascript" src="./js/cart.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php
include("./functions.php");
	?>
	<header>
	<?php
	include("./templates/filter.php");
	?>
		<div class="container">
				<br>
		<br>
		<br>
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Thank You For using Our Service</h1>
					<p>check out</p>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<br>
		<br>
		<br>
<table class="table table-hover table-striped">
	<tbody>
		<th>Item</th>
		<th>Quantity</th>
		<th>Price</th>

	<?php
if (isset($_SESSION["cart"])) {
	$whereIn=implode(',', $_SESSION["cart"]);
	$value="";
	$qty="";
	$query="SELECT * FROM food_items WHERE id IN($whereIn)";
	include("./connections.php");
	if ($result){
 	while ($row=mysqli_fetch_array($result)){
 			$id=$row["id"];
 			$name=$row["Title"];
 			$price=$row["price"]; 	
 		?>
 		<tr id="saham">
			<td>
				<?php echo"$name" ?>
			</td>
			<td>
				1
			</td>
			<td>
				<?php echo"$price"; ?>
			</td>
		</tr>

				<?php
				
			$value=$value+$price;
 		} ?>
 		<tr>
 			<td colspan="4" style="font-size: 22px; text-align: right;">
 				<?php echo "<b>Total</b> = <b>$value</b>";	 ?>
 			</td>
 		</tr>
 		<?php 
 	}
}else{
	echo "You havent added anything to cart";
	}
?>
	</tbody>
</table>
</div>
</div>
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
<?php
if (isset($_GET["remove"])) {
	foreach ($_SESSION["cart"] as $key => $val) {
		if ($val==$_GET["remove"]) {
		unset($_SESSION["cart"][$key]);
		}
	}
}
unset($_SESSION["cart"]);
?>
</html>
<?php
}else header("location: ../Food Order/orders.php");?>