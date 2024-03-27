<?php
include '../../config.php';
$admin=new Admin();
$ctid=$_GET['ct_id'];
$st=$admin->cud("DELETE FROM `cart` where `ct_id`='$ctid'","deleted");
echo "<script>alert('Medicine removed from the cart');window.location='../cart.php';</script>";

?>