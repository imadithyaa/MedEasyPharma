<?php
include '../../config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $msg=$_POST['message'];
    $file="upload/".basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'],$file);
    $stmt3=$admin->cud("INSERT INTO `prescription`(`ps_date`, `c_id`, `ps_patient_name`, `ps_age`, `ps_gender`, `ps_file`, `ps_discrption`,`ps_status`) VALUES (Now(),'$cid','$name','$age','$gender','$file','$msg','uploaded')","saved");
    echo "<script>alert('Your prescription has been submitted succussfully ');window.location='../prescriptions.php';</script>";
}
?>