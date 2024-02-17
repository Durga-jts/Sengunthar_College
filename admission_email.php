<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])){
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$fname = $_POST['user_first_name'];
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

// echo 'First Name: ' . $fname . '<br>';
// echo 'Last Name: ' . $lname . '<br>';
// $resume = $_FILES['resume'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true); // true enables exceptions

// $mail->SMTPDebug = 4; 

    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'durga.jorimts@gmail.com'; // SMTP username
    $mail->Password   = 'qzwpwtbjgxgabcyz'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587; // TCP port to connect to


   // Sender and recipient settings
    $mail->setFrom($email, $name);
    $mail->addAddress('durgasd2001@gmail.com');
    $mail->addAddress('info@senguntharpharmacycollege.org');
    $mail->addAddress('admissions@senguntharpharmacycollege.org');

    // $mail->addAttachment('Resume_Durga-2024.pdf');

   // Content
   $mail->isHTML(true); // Set email format to HTML

   $mail->Subject = 'Admission Form';
   $mail->Body = 'First Name: ' . $fname . '<br>Last Name: ' . $lname . '<br>Date Of Birth: ' . $dob . '<br>Gender: ' . $gender . '<br>Course: ' . $course . '<br>Email: ' . $email . '<br>Phone Number: ' . $phone . '<br>Guardian Name: ' . $guardian . '<br>Guardian Occupation: ' . $guardian_occ . '<br>Address: ' . $address . '<br>City: ' . $city . '<br>State: ' . $state . '<br>Pincode: ' . $pincode . '<br>Country: ' . $country ;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if(!$mail->send()) {
    //    echo 'Message could not be sent.';
    //    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
        header('Location: admission.php');
    exit();
   }
}
?>