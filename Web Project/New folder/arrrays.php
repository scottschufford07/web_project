<?php 
session_start();
$arrays = array($_SESSION["cart"]);
$name_str=NULL;
foreach ($arrays as $array) {
	$name_str = $array;
}
echo "$name_str";
?>