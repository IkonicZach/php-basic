<?php
$str = "I don't want anyone , to pitty me.";
$ary = preg_split("//", $str, 5,PREG_SPLIT_NO_EMPTY);
echo "<pre>". print_r($ary, true) . "</pre>";
?>