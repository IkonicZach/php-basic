<?php
$file = "JSON.json";
$h = fopen($file, mode:'r');

$json = fread($h, filesize($file));

$array = json_decode($json);

foreach($array as $key=>$val){
    foreach ($val as $key => $val) {
        echo "Key is => " . $key . " and value is => " . $val . "<br>";
    }
}
?>