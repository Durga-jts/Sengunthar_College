<?php
    $first_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    // $subject = $_POST['subject'];
    $message = $_POST['message'];


    //...................................//
    // Recipient email address
    $to = "durga.jorimts@gmail.com";
    //......................................//
    $email_subject = "Contact Form Submission - $email";
    //...............................................//
    $email_message = "First Name: $first_name\n";      
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";
    //...........//
        if (mail($to, $email_subject, $email_message)) {
        //not to reload
        $previous = $_SERVER['HTTP_REFERER'];
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        // Email delivery failed
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
   
?>