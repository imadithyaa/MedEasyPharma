<?php
include '../../config.php';
$admin=new Admin();
$mid=$_GET['m_id'];
$st=$admin->cud("DELETE FROM `medicine` where `m_id`='$mid'","deleted");
echo "<script>alert('Medicine record deleted successfully!!');window.location='../medicines.php';</script>";

?>