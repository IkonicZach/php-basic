<?php
$str = "We don't have a \dog! You only have $5!";
echo $str;
echo "<br>";
$r = preg_quote($str, "W");
echo $r;
?>