<?php

//$_GET['submit'];
//$_POST['submit'];

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Welcome! <span style='color: blue'>$username</span>.\nYour password is <span style='color: grey'>$password.</span>";
}

?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type="text" name="username" placeholder="Enter username"><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <button type="submit" name="submit">Register</button><br>
</form>