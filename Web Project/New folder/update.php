<?php
session_start();
if ($_GET["i"] && $_GET["yu"]) {
		$mult=$_GET["i"];
		$multi=$_GET["yu"];
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
 			if ($id==$mult) {
 			$price=$price*$multi;
 		}
 			echo "
 			<tr>
			<td>
				$name 
			</td>
			<td>
				<select name='selectqty' class='form-control' onchange='mainInfo($id,this.value)' style='width: 60px;'>
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
					<option value=6>6</option>
				</select>
			</td>
			<td>
				$price
			</td>
			<td>
				<a href='?remove=$id'>Remove</a><br/>
			</td>
			</tr>
			";
	}
}
}
}
?>
