<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n  Email: $email \n  Message: $message";
$recipient = "katrina@pristinepoochies.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://pristinepoochies.com/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
