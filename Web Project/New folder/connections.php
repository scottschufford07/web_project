<?php

$server_name="localhost";
$username="root";
$password="";
$database="foodies";
$conn = mysqli_connect($server_name, $username, $password,$database);
if(!$conn){
	die("cnnnnnn".mysqli_connect_error());
}
$result=mysqli_query($conn,$query);
?>
