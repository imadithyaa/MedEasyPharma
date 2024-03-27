<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['send'])){
    $oid=$_POST['oid'];
    $status=$_POST['status'];
    $stmt=$admin->cud("UPDATE `order` SET `o_updated_date`=Now(),`o_status`='$status' WHERE `o_id`='$oid'","saved");
    if($status=="Accepted"){
    echo "<script>alert('Order status updated succesfully!!');window.location='../phpmailer/index.php?oid=$oid';</script>";
    } else {
    echo "<script>alert('Order status updated succesfully!!');window.location='../phpmailer/indexrej.php?oid=$oid';</script>";
    }
}
?>