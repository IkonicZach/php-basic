<?php
    function doIt(){
        echo "Hello";
    }
    $v = "do";

    //checking function exists or not
    $bol = function_exists($v);
    if($bol){
        echo "Function exist.";
    }else{
        echo "Function does't exist.";
    }
?>