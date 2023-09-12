<?php
$ary = [
    ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4, "Five"=>5],
    ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4, "Five"=>5],
    ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4, "Five"=>
        ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4, "Five"=>5],
        ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4, "Five"=>5],
        ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4, "Five"=>5]
    ]
];
// echo "<pre>" . print_r($ary, true) . "</pre>";
$enc = json_encode($ary);
$dec = json_decode($enc, true);
// print_r($dec);
foreach($dec as $v){
    foreach($v as $k=>$d){
        if(!is_array($d)){
            echo "Key is " . $k . " and value is " . $d . "<br>";
        }else{
            foreach($d as $kk=>$i){
            echo "Key is " . $kk . " and item is " . $i . "<br>";
            }
        }
    }
}
?>
