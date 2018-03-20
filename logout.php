<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
unset($_SESSION['aa']);
unset($_SESSION['bb']);
unset($_SESSION['cc']);
session_destroy();
header("location:index.php");
?>