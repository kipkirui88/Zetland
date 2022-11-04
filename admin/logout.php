<?php
ob_start();
session_start();

$_SESSION['username'] = null;
$_SESSION['email'] = null;


header("Location: login.php");
?>
