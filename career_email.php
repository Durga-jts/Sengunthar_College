<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])){
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];

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

   $mail->Subject = 'Career Form';
   $mail->Body = 'Name: ' . $name . '<br>Gender: ' . $gender . '<br>Email: ' . $email . '<br>Phone: ' . $phone . '<br>DOB: ' . $dob;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if(!$mail->send()) {
    //    echo 'Message could not be sent.';
    //    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
        header('Location: career.php');
    exit();
   }
}
?>