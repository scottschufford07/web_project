<?php
session_start();
session_unset($_SESSION["cart"]);
header("location: ./cart.php");
?>