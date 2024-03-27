<?php
include '../../config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['feedback'])){
    $msg=$_POST['message'];
    $id=$_POST['oid'];
    
    $stmt3=$admin->cud("INSERT INTO `feedback`(`f_date`, `f_discription`, `o_id`) VALUES (Now(),'$msg','$id')","deleted");
    echo "<script>alert('Your feedback has been submitted successfully, Thank you.');window.location='../orders.php';</script>";
}

if(isset($_POST['feed'])){
    $msg=$_POST['message'];
    $id=$_POST['id'];
    
    $stmt3=$admin->cud("INSERT INTO `feedback`(`f_date`, `f_discription`, `ps_id`) VALUES (Now(),'$msg','$id')","deleted");
    echo "<script>alert('Your feedback has been submitted successfully, Thank you.');window.location='../prescriptions.php';</script>";
}
?>