<?php
include('../../config.php');
$admin=new Admin();
$email=$_GET['email'];
$otp=$_SESSION['otp'];

$name = "";
$password="";
$query=$admin->ret("select * from `customer` WHERE `c_email`='$email'");
$row=$query->fetch(PDO::FETCH_ASSOC);
$name=$row['c_name'];



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'medeasypharma23@gmail.com';                     // SMTP username
    $mail->Password   = 'srlskqzwdkokojiw';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('medeasypharma23@gmail.com', 'MedEasy');
    $mail->addAddress("$email", "$name");     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'MedEasy';
    $mail->Body    = "<b>Hello..$name, your OTP is $otp . </b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo 'Message has been sent';
    header("location: ../otpenter.php");
} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}