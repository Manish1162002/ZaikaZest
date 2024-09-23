<?php
ob_start();
include("include/header.php");
session_unset();
session_destroy();
header('Location:login.php');
?>