<?php
    $from_email = "support@digiswitch.tech";
    $to = "support@digiswitch.tech";
    $subject = "New Contact Form Message";
    
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $post_name = $_POST['name'];
        $post_email = $_POST['email'];
        $post_message = $_POST['message'];
    
        // Input validation
        if (empty($post_name) || empty($post_email) || empty($post_message)) {
            header('Location: contact-us.php?msg=error_missing_fields');
            exit;
        }
    
        $contact_name = filter_var($post_name, FILTER_SANITIZE_STRING);
        $contact_email = filter_var($post_email, FILTER_SANITIZE_EMAIL);
        $contact_message = strip_tags($post_message);
    
        // Message body
        $message = "
        New enquiry:
        <br>
        Name: $contact_name
        <br>
        Email address: $contact_email
        <br>
        Message: <br> $contact_message
        ";
    
        // Headers
        $headers = "From: $from_email\r\n";
        $headers .= "Reply-To: $from_email\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            header('Location: https://digiswitch.tech/contact-us.php?msg=message_sent');
            exit;
        } else {
            header('Location: https://digiswitch.tech/contact-us.php?msg=error_sending_email');
            exit;
        }
    }
?>