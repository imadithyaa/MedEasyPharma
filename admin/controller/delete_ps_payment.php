<?php
include '../../config.php';
$admin=new Admin();
$ppid=$_GET['pp_id'];
$st=$admin->cud("DELETE FROM `ps_payment` where `pp_id`='$ppid'","deleted");
echo "<script>alert('Prescrption payment record deleted successfully!!');window.location='../payments.php';</script>";

?>