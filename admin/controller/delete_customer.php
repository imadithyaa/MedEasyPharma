<?php
include '../../config.php';
$admin=new Admin();
$cid=$_GET['c_id'];
$st=$admin->cud("DELETE FROM `customer` where `c_id`='$cid'","deleted");
echo "<script>alert('Customer record deleted successfully!!');window.location='../customer.php';</script>";

?>