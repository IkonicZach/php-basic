<?php
//function with no parameter
function hi(){
    for($i = 0; $i < 10; $i++){
        echo "Hi <br>";
    }
}
hi();
//function with a parameter
function hehe($num){
    for($i = 0; $i < 10; $i++){
        echo "hehe <br>";
    }
}
hehe(10);
//function with parameters
function plus($num1, $num2){
    echo $num1 + $num2;
}
plus(10,20);
//function with default parameter
function mul($num1 = 0, $num2 = 0){
    echo $num1 * $num2;
}
mul();
?>