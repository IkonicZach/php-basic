<?php
$str = "enee menee mynee moee nee";

$sub = substr($str,5,5);
$count = str_word_count($str);
$chunk = chunk_split($str, 3, ".");
echo $count . "<br>";
echo $sub . "<br>";
echo $chunk . "<br>";
?>