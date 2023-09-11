<?php
$str = "you gay";
$str = md5($str);
$str = sha1($str);
$str = crypt($str, $str);

echo $str;
?>