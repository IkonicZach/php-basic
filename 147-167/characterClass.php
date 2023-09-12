<?php
$var = "cha ma lh kwr";

$bol = preg_match("/[0-9]/", $var);

echo $bol? "True" : "False";
?>