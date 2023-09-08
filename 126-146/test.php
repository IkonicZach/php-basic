<?php
define("DB_HOST","localhost");
define("DB_NAME", "testdb");
define("DB_USER", "Zach");
define("DB_PASS", "1123");

function connect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    echo mysqli_connect_errno() > 0? "Connection error.s" : "Connection success.";
    debugger($db);
}
function debugger($data){
    echo "<pre>" . print_r($data, true) . "</pre>";
}
debugger(connect());
?>