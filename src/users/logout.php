<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include("../include/url_users.php");

session_start();
session_destroy();

printf("Successfully logged out");

/* Redirect to current page */
header('Location: ' . $_SERVER['HTTP_REFERER']);
//header("location:../index.php");

?>
