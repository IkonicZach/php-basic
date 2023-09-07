<?php
session_start();

echo "<h1>Index Page</h1>";
include "links.php";

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // echo "<p style = 'color:blue'>Username is $user and Password is $pass.</p>";

    if($user == "athu" && $pass == "1123"){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header("location: member.php");
    }
    else
        echo "<p style = 'color:red'>You are not a registered member.</p>";
}
?>
<form action="" method="post">
    Username <input type="text" name="username" placeholder="Enter your name "><br>
    Password <input type="password" name="password" placeholder="Enter your password"><br>
    <button type="submit" name="submit">Login</button>
</form>
