<?php
$s = $_SERVER['HTTP_USER_AGENT'];

$ary = explode("    ", $s);

foreach($ary as $v)
    echo $v . "<br>";
?>