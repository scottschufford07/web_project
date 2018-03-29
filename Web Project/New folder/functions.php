<?php
function lists(){
	$query="SELECT * FROM food_items";
	include("./connections.php");
	if ($result) {
		while ($row=mysqli_fetch_array($result)) {
			$id=$row["id"];
			$title=$row["Title"];
			$img=$row["Img"];
			$price=$row["price"];
			echo "<li class='mix' style='padding:10px; margin-left:15px;'><p class='bold'>$title</p><br><img src='img/$img' alt='Image 5'><br><b class='bold'><a href='#''>Price Rs.$price/-</a></b><a href='./index.php?id=$id' class='add-to-cart'>
						Order
					</a></li>";
		}
	}
}
?>
