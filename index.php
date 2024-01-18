<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = 'aaronverdoold770@gmail.com';

    // Set email subject
    $subject = 'New Form Submission';

    // Build email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Build email body
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Message:\n$message";

    // Send email
    mail($to, $subject, $mailBody, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>

