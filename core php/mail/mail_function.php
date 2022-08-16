<?php
$to = "xyz@google.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: abc@gmail.com" . "\r\n" .
"CC: new@gmail.com";

mail($to,$subject,$txt,$headers);
?>