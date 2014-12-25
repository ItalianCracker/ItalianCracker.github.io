<?php 
$name = $_POST['name'];
$email = $_POST['email'];

$to "tjach10@yahoo.com";
$subject ="Email from site";
$body ="Email from site";

mail ($to, $subject, $body);
echo "Your message was sent";
?> 