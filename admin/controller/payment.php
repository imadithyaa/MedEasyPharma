<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['send'])){
    $ptid=$_POST['ptid'];
    $status=$_POST['status'];

    $stmt2=$admin->ret("SELECT * FROM `payment` where `pt_id`='$ptid'");
    $row=$stmt2->fetch(PDO::FETCH_ASSOC);
    $oid=$row['o_id'];

    $stmt=$admin->cud("UPDATE `order` SET `o_status`='Completed' WHERE `o_id`='$oid'","saved");
    $stmt=$admin->cud("UPDATE `payment` SET `pt_updated_date`=Now(),`pt_status`='$status' WHERE `pt_id`='$ptid'","saved");
    if($status=="Paid"){
        echo "<script>alert('Payment status updated succesfully!!!!');window.location='../phpmailer/index2.php?pid=$ptid';</script>";
        } else {
        echo "<script>alert('Payment status updated succesfully!!!!');window.location='../phpmailer/index3.php?pid=$ptid';</script>";
        }
}
if(isset($_POST['okay'])){
    $id=$_POST['id'];
    $status=$_POST['status'];

    $stmt2=$admin->ret("SELECT * FROM `ps_payment` where `pp_id`='$id'");
    $row=$stmt2->fetch(PDO::FETCH_ASSOC);
    $psid=$row['ps_id'];

    $stmt=$admin->cud("UPDATE `prescription` SET `ps_status`='Completed' WHERE `ps_id`='$psid'","saved");
    $stmt=$admin->cud("UPDATE `ps_payment` SET `pp_updated_date`=Now(),`pp_status`='$status' WHERE `pp_id`='$id'","saved");
    echo "<script>alert('Payment status updated succesfully!!');window.location='../payments.php';</script>";
}
?>