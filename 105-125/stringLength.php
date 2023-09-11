<?php
$str = "enee menee mynee moee nee";

echo strlen($str) . "<br>";
echo strpos($str,"menee") . "<br>"; //first occurence
echo strrpos($str,"enee") . "<br>"; //last occurence
echo stripos($str,"Mynee") . "<br>"; //ignore case
?>