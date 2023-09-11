<?php
$file = "mine.txt";
try{
    if(file_exists($file))
        echo "File exists." . "<br>";
    else{
        throw new Exception("File does't exist.");
    }
}catch(Exception $E){
    exit($E->getMessage());
}
$h = fopen($file, mode: 'r');
echo  "LMAO";
?>