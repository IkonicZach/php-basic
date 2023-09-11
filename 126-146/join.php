<?php
include("functions.php");
define("DB_HOST","localhost");
define("DB_NAME", "newDB");
define("DB_USER", "Zach");
define("DB_PASS", "1123");

$q ="SELECT 
        ur.name AS User_name,
        ur.id AS User_id,
        COUNT(tuto.id) AS Total_tuto
    FROM
        users AS ur
    JOIN
        tutorials AS tuto
    ON
        ur.id = tuto.created_by
    WHERE 
        ur.creator = 1
    GROUP BY
        tuto.created_by
    ";
$r = mysqli_query(connect(), $q);
foreach($r as $values){
    debugger($values);
}
?>