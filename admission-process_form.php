<?php
    $name = $_POST['user_first_name'];
    $lname = $_POST['user_last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $course = $_POST['course_class'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_phone'];
    $guardian = $_POST['guardian_first_name'];
    $guardian_occ = $_POST['guardian_occupation'];
    $address = $_POST['std_address'];
    $city = $_POST['user_city'];
    $state = $_POST['user_state'];
    $pincode = $_POST['user_pincode'];
    $country = $_POST['user_country'];
    // $resume = $_POST['resume'];


    //...................................//
    // Recipient email address
    $to = "chandru735843@gmail.com,durga.jorimts@gmail.com";
    //......................................//
    $email_subject = "Admission Form Submission - $email";
    //...............................................//
    $email_message = "First Name: $name\n";
    $email_message .= "Last Name: $lname\n";        
    $email_message .= "Date of birth: $dob\n";
    $email_message .= "Gender: $gender\n";
    $email_message .= "Course: $course\n";
    $email_message .= "Email:\n$email";
    $email_message .= "Phone number:\n$phone";
    $email_message .= "Guardian:\n$guardian";
    $email_message .= "Guardian ocupation:\n$guardian_occ";
    $email_message .= "Address:\n$address";
    $email_message .= "City:\n$city";
    $email_message .= "State:\n$state";
    $email_message .= "Pincode:\n$pincode";
    $email_message .= "Country:\n$country";
    
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