<?php
include '../../config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['submit'])){
    $oid=$_POST['id'];
    $tid=$_POST['tid'];
    $tot=$_POST['tot'];
    
    $stmt3=$admin->cud("INSERT INTO `payment`(`pt_date`, `o_id`, `pt_pay_mode`, `pt_total_amt`, `o_tid`, `pt_status`) VALUES (Now(),'$oid','upi','$tot','$tid','Done')","deleted");
    echo "<script>alert('Your payment has been initiated successfully, Thank you.');window.location='../payments.php';</script>";
}
if(isset($_POST['pay'])){
    $id=$_POST['id'];
    $tid=$_POST['tid'];
    $tot=$_POST['tot'];
    
    $stmt3=$admin->cud("INSERT INTO `ps_payment`(`pp_date`, `ps_id`, `pp_pay_mode`, `pp_amount`, `pp_tid`,`pp_status`) VALUES (Now(),'$id','upi','$tot','$tid','Done')","deleted");
    echo "<script>alert('Your payment has been initiated successfully, Thank you.');window.location='../payments.php';</script>";
}
?>