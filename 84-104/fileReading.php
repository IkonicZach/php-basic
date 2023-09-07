<?php
$file = "test.txt"; //file path delclare
$handler = fopen($file, mode:'r'); //file open (file.'mode')
$size = filesize($file); //getting file size
$data = fread($handler, $size); //reading file
echo $data;
?>