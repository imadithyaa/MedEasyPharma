<?php
include '../../config.php';
$admin=new Admin();
$psid=$_GET['ps_id'];
$st=$admin->cud("DELETE FROM `prescription` where `ps_id`='$psid'","deleted");
echo "<script>alert('Prescrption record deleted successfully!!');window.location='../prescriptions.php';</script>";

?>