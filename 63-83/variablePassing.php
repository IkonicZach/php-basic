<?php
$a = 15;
$b = &$a;

$b = 10;
$a = 5;

echo "a = $a <br>";
echo "b = $b <br>";

//passing by reference
$num = 20;
function func(&$num){
    $num = 50;
    echo $num;
}
func($num);
echo "<br>";
echo $num;
?>