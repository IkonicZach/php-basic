<?php
$file = "write.txt";
$handler = fopen($file, mode: 'w');
fwrite($handler, "Hello.");
fclose($handler);
?>