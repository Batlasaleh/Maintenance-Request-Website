<?php

session_start();
session_destroy();
unset($_SESSION['name']);
$_SESSION['message']="You are logged out";
header('location: logout.php');
?>
