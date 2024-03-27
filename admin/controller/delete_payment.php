<?php
include '../../config.php';
$admin=new Admin();
$ptid=$_GET['pt_id'];
$st=$admin->cud("DELETE FROM `payment` where `pt_id`='$ptid'","deleted");
echo "<script>alert('Payment record deleted successfully!!');window.location='../payments.php';</script>";

?>