<?php
$file = "write.txt";
$handler = fopen($file, mode:'a');
fwrite($handler, "\nI hope you are well.");
fclose($handler);
?>