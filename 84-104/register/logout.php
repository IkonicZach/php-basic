<?php
session_start();
//session_destroy();

unset($_SESSION['username']);
unset($_SESSION['password']);

header(("location:index.php"));

echo "<h1>Logout Page</h1>";
include "links.php";
?>
