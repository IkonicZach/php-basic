<?php
if(isset($_POST['submit'])){
    $gender = $_POST['rad'];
    echo "Confirm your gender, $gender ?";
}
?>
<form action="" method="post">
    <h3>Choose your gender</h3>
    <input type="radio" name="rad" value="male"> Male <br>
    <input type="radio" name="rad" value="female"> Female <br>
    <input type="radio" name="rad" value="gay"> Gay <br>
    <button type="submit" name="submit">Confirm</button>
</form>