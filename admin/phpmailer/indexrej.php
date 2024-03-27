<?php
include('../../config.php');
$admin=new Admin();
$oid=$_GET['oid'];
// $otp=$_SESSION['otp'];

$name = "";
$password="";
$query=$admin->ret("select * from `order` inner join `customer` on customer.c_id=order.c_id WHERE `o_id`='$oid'");
$row=$query->fetch(PDO::FETCH_ASSOC);
$name=$row['c_name'];
$email=$row['c_email'];



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
    $mail->Subject = 'MedEasy alerts';
    $mail->Body    = "<b>Hello..$name, Your order has been rejected, If you have any questions regarding this rejection, please do not hesitate to contact.</b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();


    echo 'Message has been sent';
    header("location: ../orders.php");
} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}