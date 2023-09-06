<?php
if(isset($_REQUEST['submit'])){ //$_REQUEST can accept bot POST and GET 
    echo "Clicked";
}
?>
<form action="" method="post">
    <input type="text" name="username">
    <button type="submit" name="submit">Upload</button>
</form>