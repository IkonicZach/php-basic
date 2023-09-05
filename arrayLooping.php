<?php
$games = array("League", "Efootball", "Cities Skylines", "Rust", "Bioshock");

for($i = 0; $i < count($games); $i++){
    echo $games[$i] . "<br>";

}

$ary = array(
    array("One", "Two", "Three", "Four"),
    array("Five", "Six", "Seven"),
    array("Eight", "Nine")
);

for($i = 0; $i < count($ary); $i++){
    print_r($ary[$i]);

}
?>