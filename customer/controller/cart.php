<?php
include '../../config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['add'])){
    $mid=$_POST['mid'];
    $st=$admin->ret("SELECT * FROM `medicine` where `m_id`='$mid'");
    $ro=$st->fetch(PDO::FETCH_ASSOC);
    $amnt=$ro['m_price'];

    $st2=$admin->ret("SELECT * FROM `cart` where `m_id`='$mid' and `c_id`='$cid'");
    $ro2=$st2->fetch(PDO::FETCH_ASSOC);
    $n=$st2->rowCount();
    if ($n>0) {
         echo "<script>alert('Medicine is already exists in your cart!!');window.location='../cart.php';</script>";
    } else {
     $stmt=$admin->cud("INSERT INTO `cart`(`c_id`, `m_id`, `ct_qty`, `ct_amount`, `ct_added_date`, `ct_status`) VALUES ('$cid','$mid',1,'$amnt',Now(),'added')","saved");
    echo "<script>alert('Medicine added to cart successfully!!');window.location='../cart.php';</script>";
}
}
?>