<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course_class = $_POST['course_class'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    // $resume = $_POST['resume'];


    //...................................//
    // Recipient email address
    $to = "chandru735843@gmail.com,durga.jorimts@gmail.com";
    //......................................//
    $email_subject = "Career Form Submission - $email";
    //...............................................//
    $email_message = " Name: $name\n";
    $email_message .= "Email : $email\n";        
    $email_message .= "Course: $course_class\n";
    $email_message .= "Date of birth: $dob\n";
    $email_message .= "Gender: $gender\n";
    $email_message .= "Phone number:\n$phone";
    // $email_message .= "Resume:\n$resume";
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