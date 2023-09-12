<?php
$var= "cha ma lh kwr";
//"/xx/'", "+xx+'", "#xx#'", "%xx%'", "!xx!", 
$bol = preg_match("+CHA+i",$var); //case sensitive off

echo $bol ? "The string has it." : "The string doesn't have it.";
?>