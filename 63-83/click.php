<?php
$count = 0;
$newCount = &$count;
if(isset($_GET['submit'])){
    $newCount = $count+1;
    echo $newCount;
}
function countUp(){

}
?>
<form action="" method="get">
    <button onclick="countClick()" type="submit" name="submit">Click me!</button>
</form>