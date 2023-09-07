<?php

function readMyFile($fileName){
    // if(file_exists($fileName)){
    //     $h = fopen($fileName, mode: 'r');
    //     $size = filesize($fileName);
    //     $data = fread($h, $size);
    //     return $data;
    // }else{
    //     echo "File not found.";
    // }
    if(file_exists($fileName)){
        $data = file_get_contents($fileName);
        return $data;
    }
}
echo ReadMyFile('test.txt');
?>