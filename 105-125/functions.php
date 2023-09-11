<?php
$mine = "Athu San";
$her = "Ahsu";
$trim = trim($mine);
$str = "My name is %s and her name is %s.";

$file = "test.txt";
$h = fopen($file, mode: 'w');

printf("My name is %s and her name is %s.",$mine, $her);
fprintf($h,"My name is %s and her name is %s",$mine, $her);
echo "<br>" . lcfirst($str);
echo "<br>" . ucwords($str);
echo "<br>" . strtoupper($str);
echo "<br>" . strtolower($str);
echo "<br>" . strlen($trim);

?>