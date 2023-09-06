<?php
if(isset($_POST['submit'])){
    foreach($_FILES['files']['tmp_name'] as $file => $value){
        echo $_FILES['files']['name'][$file] . "<br>";
        echo $_FILES['files']['tmp_name'][$file] . "<br>";
        echo $_FILES['files']['size'][$file] . "<br>";
        echo $_FILES['files']['type'][$file] . "<br><br>";
    }

    move_uploaded_file($_FILES['files']['tmp_name'][$file],'uploads/'.$_FILES['files']['name'][$file]);
}
?>
<form action="" method="post" enctype="multipart/form-data"> 
    <input type="file" name="files[]" multiple><br>
    <button type="submit" name="submit">Upload</button>
</form>