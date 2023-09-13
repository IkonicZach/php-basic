<?php
function register($name, $email, $pass){

}
function nameCheck($name){
    if(strlen($name) >= 6){
        $bol = preg_match('/^(\w)+$/', $name);
        return $bol;
    }else{

    }
}
function emailCheck($email){

}
function passCheck($pass){

}
$bol=nameCheck("ll");
echo $bol? "True" : "False";
?>