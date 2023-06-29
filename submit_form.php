<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create email content
$subject = "New Contact Form Submission";
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message";

// Set recipient email address
$recipient = "flaivindsouza6@gmail.com";

// Set headers
$headers = "From: $name <$email>";

// Send email
$mailSent = mail($recipient, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  // Redirect to a success page
  header("Location: contact_success.html");
  exit();
} else {
  // Redirect to an error page
  header("Location: contact_error.html");
  exit();
}
?>
