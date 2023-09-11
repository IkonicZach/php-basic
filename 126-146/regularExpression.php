<?php
$var= "cha ma lh kwr";
$bol = preg_match("/cha$/",$var);

echo $bol ? "The string has it." : "The string doesn't have it.";
?>