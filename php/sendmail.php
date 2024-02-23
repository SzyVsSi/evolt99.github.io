<?php
$name = $_POST['txtName'];
$email = $_POST['txtMail'];
$subject = $_POST['txtSubject'];
$message = $_POST['txtMsg'];

$message = "$name \r\n\n" . $message;
$headers = "From: $email";

mail('realemail@gmail.com', $subject, $message, $headers);
?>