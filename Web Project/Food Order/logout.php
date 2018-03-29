<?php
session_start();
session_unset($_SESSION["log"]);
header("location: ./index.php");
?>