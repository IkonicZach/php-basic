<?php
//for loop
for($i = 0; $i < 10 ; $i++){
    echo $i+1 . "<br>";
}

echo "-----------------------------------<br>";

//while loop
$a = 10;
while($a > 0){
    echo $a . "<br>";
    $a -= 2;
}

echo "-----------------------------------<br>";

//do while loop(do at least once)
$b = 0;
do{
    echo "Value = $b <br>";
    $b += 5;
}while($b <= 10)
?>