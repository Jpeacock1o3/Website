<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Example of email notification
    $to = "jadenrpeacock@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header('Location: https://jadenpeacock.com'); // Redirect to homepage
        exit(); // Stop further execution
    } else {
        echo "Failed to send message.";
    }

    // Alternatively, you can save the data to a database or a file
}
?>
