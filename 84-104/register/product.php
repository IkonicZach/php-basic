<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location:index.php");
}

echo "<h1>Product Page</h1>";
include "links.php";

?>