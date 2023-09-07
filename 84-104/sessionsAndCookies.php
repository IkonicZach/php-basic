<?php
//COOKIES
function makeCookie(){
    setcookie('athu', 'athu not good rn', time()+ (3600*3),'/','', 0);
}
function sutereruCookie(){
    setcookie('athu', '', time() - (3600*3),'/','', 0);
}
function eatCookie(){
    if(isset($_COOKIE['athu']))
        echo $_COOKIE['athu'];
    else
        echo "There is no such cookie.";
}
// makeCookie();
eatCookie();
// sutereruCookie();

//SESSIONS
?>