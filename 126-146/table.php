<?php
include("functions.php");

$q = "CREATE TABLE tuto(
    id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) UNIQUE NOT NULL,
    created_at date,
    updated_at date
    );";

$r = mysqli_query(connect(),$q);
echo $r ? "Table created successfully!" : "Table creation failed."


?>