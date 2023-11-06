<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "Charlibossubom@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Replace the email headers as needed //
    $headers = "From: $name";

    // Send email //
    mail($to, $subject, $body, $headers);

    // Redirect after form submission //
    header("Location: thank-you.html");
}
?>