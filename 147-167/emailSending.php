<?php
$to = "gus@localhost";
$subject = "PHP test message";
$message = "Testing PHP mailing system.";
$header = "From: sayargyi";
mail($to, $subject, $message, $header);
?>