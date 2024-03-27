<?php
include '../../config.php';
$admin=new Admin();
$oid=$_GET['o_id'];
$st=$admin->cud("DELETE FROM `order` where `o_id`='$oid'","deleted");
echo "<script>alert('Your Order has been canceled successfully');window.location='../orders.php';</script>";

?>