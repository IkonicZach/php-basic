<?php
function createFile($fileName){
    $h = fopen($fileName, mode:'w');
    fclose($h);
}
createFile('text.txt');

function writeFile($fileName, $data){
    $h = fopen($fileName, mode:'w');
    fwrite($h, $data);
    fclose($h);
}
writeFile('text.txt', 'I am text.');

function appendFile($fileName, $data){
    $h = fopen($fileName, mode:'a');
    fwrite($h, $data);
    fclose($h);
}
appendFile('text.txt', 'Who are you?');

function readMyFile($fileName){
    $h = fopen($fileName, mode:'r');
    $size = filesize($fileName);
    $data = fread($h, $size);
    fclose($h);
    return $data;
}
echo readMyfile('text.txt');
?>