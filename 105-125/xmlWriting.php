<?php
$array = array(
    "name"=>"Athu",
    "age"=>"20",
    "job"=>"intern",
);
$str ="";
$str .="<code>";
foreach ($array as $key=>$v){
    $str.="<".$key.">";
    $str.=$v;
    $str.="</".$key.">";
}
$str .="</code>";

$h = fopen("test.xml", "w");
fprintf($h, "%s", $str);
?>