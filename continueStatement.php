<?php

for($i = 0; $i <=100; $i+=5){
    if($i == 50){
        echo "!!!!!!ALERT!!!!!!! i value is 50!!! <br>";
        continue;
    }else{
        echo "i value is $i <br>";
    }
}
?>