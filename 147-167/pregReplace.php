<?php
$var = "PHP@gmail.com";

// $bol = preg_match("/[A-Z]/i", $var);
// $result = preg_replace('/[[:alpha:]]/',"$", $var);
// $result = preg_replace('/[[:digit:]]/',"dig", $var);
// $result = preg_replace('/[[:alnum:]]/',"$", $var);
// $result = preg_replace('/[[:space:]]/',"_", $var);
// $bol = preg_match("/9.9/", $var);
// echo $bol ? "True" : "False";
// echo $result;

// $bol =  preg_match('/p\w{2}p/i', $var);
// echo $bol ? "True" : "False";

// $result = preg_match("/[a-z]+@[a-z]+\.[a-z]{3}/i", $var);
// echo $result ? "True" : "False";

$var = "All copyrights reserved Spectrm @ 2022";

// $result = preg_replace("/[[:digit:]]+/", "2003",  $var);
// $result = preg_replace("/Copy/i", "doggy",  $var);
$result = preg_replace(
    array('/copyrights/i', '/[0-9]+/'),
    array('doggyrights', '2001'),
    $var
);

echo $result;


?>