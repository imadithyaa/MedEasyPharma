<?php 
include '../../config.php';
$admin=new Admin();
echo $otp=$_SESSION['otp'];
echo $enteredotp=$_POST['otp'];
if($otp==$enteredotp){
    header('location:../createpassword.php');
}else{
    echo "<script>alert('OTP did not match');window.location='../index.php';</script>";
}

?>