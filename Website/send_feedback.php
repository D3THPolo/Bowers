<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $opinion = $_POST['opinion'];

    // Email details
    $to = 'joshuabowers204@gmail.com';  // Your email
    $subject = 'New Feedback Submission';
    $message = "Name: $name\nEmail: $email\nFeedback:\n$opinion";
    $headers = 'From: no-reply@yourdomain.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Feedback submitted successfully!';
    } else {
        echo 'There was an error sending your feedback.';
    }
}
?>
