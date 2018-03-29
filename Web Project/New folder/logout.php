<?php
session_start();
session_unset($_SEESSION["log"]);
header("location: ./index.php");
?>