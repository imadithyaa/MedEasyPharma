<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['insert'])){
    $prid=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $mdate=$_POST['mdate'];
    $edate=$_POST['edate'];
    $pic="upload/".basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'],$pic);

    $st=$admin->cud("INSERT INTO `medicine` (`pr_id`, `m_discription`, `m_image`, `m_price`, `m_manufactured_date`, `m_expiry_date`, `m_added_date`, `m_status`) VALUES ('$prid','$desc','$pic','$price','$mdate','$edate',Now(),'posted')","saved");
    echo "<script>alert('Inserted successfully!!');window.location='../medicines.php';</script>";
}
?>