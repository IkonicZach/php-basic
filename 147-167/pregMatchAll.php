<?php
$str = "I usually don't give up. But when I do, that's because it is 8:30 pm.";
preg_match_all("/(\d+:+\d+)\s*(am|pm)/", $str, $matches, PREG_SET_ORDER);

echo "<pre>" . print_r($matches, true) . "</pre>"
?>