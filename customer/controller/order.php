<?php
include '../../config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['order'])){
    $adrs=$_POST['adrs'];
    $ct=$_POST['ct'];
    $st=$_POST['st'];
    $pin=$_POST['pin'];
    $phone=$_POST['phone'];
    $tot=$_POST['tot'];
    $stmtt=$admin -> ret("SELECT * from `cart` inner join `medicine` on medicine.m_id=cart.m_id where cart.c_id='$cid'");
    while($r= $stmtt->fetch(PDO::FETCH_ASSOC)){
        $mid=$r['m_id'];
        $qty=$r['ct_qty'];
        $price=$r['m_price'];
        $total=$price*$qty;
        $stmt1=$admin->cud("INSERT INTO `order`(`o_date`, `c_id`, `m_id`, `o_qty`, `o_phone`, `o_address`, `o_city`, `o_state`, `o_oin`, `o_total_amt`,  `o_status`) VALUES (Now(),'$cid','$mid','$qty','$phone','$adrs','$ct','$st','$pin','$tot','Placed')","saved");

        $stmt3=$admin->cud("DELETE FROM `cart` WHERE `c_id`='$cid'","deleted");
    echo "<script>alert('Your Order has been placed!!!');window.location='../orders.php';</script>";
}



}
?>