<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['insert'])){
    $date=$_POST['date'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $medname=$_POST['medname'];
    $qty=$_POST['qty'];
    $rate=$_POST['rate'];
    $bill=$_POST['bill'];
    $mdate=$_POST['mdate'];
    $edate=$_POST['edate'];

    $stmt=$admin->cud("INSERT INTO `purchase`(`pr_date`, `pr_dealer_name`, `pr_dealer_phone`, `m_title`, `pr_qty`, `pr_rate`, `pr_total_amt`, `pr_manufacturing_date`, `pr_expiry_date`, `pr_status`) 
    VALUES ('$date','$name','$number','$medname','$qty','$rate','$bill','$mdate','$edate','posted')","saved");
    echo "<script>alert('Inserted successfully!!');window.location='../stocks.php';</script>";
}
?>