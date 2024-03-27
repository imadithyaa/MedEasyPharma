<?php
include '../../config.php';
$admin=new Admin();
$pid=$_GET['pr_id'];
$st=$admin->cud("DELETE FROM `purchase` where `pr_id`='$pid'","deleted");
echo "<script>alert('Stocks record deleted successfully!!');window.location='../stocks.php';</script>";

?>