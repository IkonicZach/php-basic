<?php

function myFunc(){
    static $num = 0;
    $num++;
    echo $num;
}

myFunc(); echo "<br>";
myFunc(); echo "<br>";
myFunc(); echo "<br>";
myFunc(); echo "<br>";
myFunc(); echo "<br>";
?>