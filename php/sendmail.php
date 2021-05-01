<?php
$name = $_POST['txtName'];
$email = $_POST['txtMail'];
$subject = $_POST['txtSubject'];
$message = $_POST['txtMsg'];

$message = "$name \r\n\n" . $message;
$headers = "From: $email";

$sent = mail('szymon.nidecki@student.ucll.be', $subject, $message, $headers);
header("Location: http://r0790938.iswlabs.be/contact.html");
?>