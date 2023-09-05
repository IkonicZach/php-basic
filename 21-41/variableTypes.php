<?php
    //integers
    $num1 = 1;
    $num2 = 2;
    echo $num1 + $num2 . "<br>";

    echo PHP_INT_MAX . "<br>";
    var_dump(PHP_INT_MIN);
    echo "<br>";

    //double
    $db1 = 10.10;
    $db2 = 34.5;
    echo $db1 + $db2 . "<br>";

    //boolean
    $bol = ""; /*blank string/ "0" string=false*/
    var_dump($bol);
    
    //NULL
    $a = "";
    $b = null; //null value doens't present on memory

    //string
    $name = "tomo chan";
    echo "<br>" . strlen($name);
?>