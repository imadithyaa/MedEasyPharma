<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['send'])){
    $psid=$_POST['psid'];
    $amnt=$_POST['amnt'];
    $msg=$_POST['msg'];
    $status=$_POST['status'];
    $stmt=$admin->cud("UPDATE `prescription` SET `ps_amount`='$amnt',`ps_response`='$msg',`ps_updated_date`=Now(),`ps_status`='$status' WHERE `ps_id`='$psid'","saved");
    if($status=="Accepted"){
        echo "<script>alert('Order status updated succesfully!!');window.location='../phpmailer/indexpresc.php?psid=$psid';</script>";
        } else {
        echo "<script>alert('Order status updated succesfully!!');window.location='../phpmailer/indexpresrej.php?psid=$psid';</script>";
        }
}
?>