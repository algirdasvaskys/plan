<?php
header('Content-Type: application/json');

$to = "vaskys@engineer.com";  // Replace with the email where you want to receive submissions
$subject = "New Contact Form Submission";
$message = "Name: " . $_POST['name'] . "\n"
         . "Email: " . $_POST['email'] . "\n"
         . "Phone: " . $_POST['phone'] . "\n"
         . "Subject: " . $_POST['subject'] . "\n"
         . "Message: " . $_POST['message'];
$headers = "From: " . $_POST['email'];

$success = mail($to, $subject, $message, $headers);

echo json_encode(['success' => $success]);
?>
