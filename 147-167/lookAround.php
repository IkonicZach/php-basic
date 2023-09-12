<?php
$str = "LOL";
$pass = "Pisi8834thu@";
$bol = preg_match('/O(?=O)/', $str); //positive look ahead
$bol = preg_match('/(?<=O)L/', $str); //positive look behind
$bol = preg_match('/O(?!O)/', $str); //negative look ahead
$bol = preg_match('/O(?<!1O)/', $str); //negative look ahead
$bol = preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w]))/', $pass);
echo $bol ? "True" : "False";
?>