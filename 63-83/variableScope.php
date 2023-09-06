<?php
$v = 10;
function func(){
    global $v;
    echo $v;
}
func();
?>