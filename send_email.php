<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = "Spellz49@gmail.com";
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";
    
    // Debugging code to check if variables are set correctly
    echo "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message<br>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Failed to send message.";
    }
}
?>
