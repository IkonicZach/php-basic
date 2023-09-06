<?php
if(isset($_POST['submit'])){
    if(isset($_POST['color'])){
        $colors = $_POST['color'];
        foreach ($colors as $color){
            echo $color . "<br>";
        }
    }
}
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    Red : <input type="checkbox" name="color[]" value="red"><br>
    Green : <input type="checkbox" name="color[]" value="green" checked><br>
    Blue : <input type="checkbox" name="color[]" value="blue"><br>
    Black : <input type="checkbox" name="color[]" value="black"><br>
    Purple : <input type="checkbox" name="color[]" value="purple"><br>

    <input type="submit" name="submit" value="Choose">
</form>