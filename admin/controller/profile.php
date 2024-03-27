<?php
include '../../config.php';
$admin=new Admin();
$aid=$_SESSION['a_id'];
if(isset($_POST['ndp'])){
    $profilepic="upload/".basename($_FILES['dp']['name']);
    move_uploaded_file($_FILES['dp']['tmp_name'],$profilepic);
    
    $stmt=$admin->cud("UPDATE `admin` SET `a_profile_pic`='$profilepic' WHERE `a_id`='$aid'","saved");
    echo "<script>alert('Profile updated successful!!');window.location='../profile.php';</script>";
}
if(isset($_POST['up'])){
    $np=$_POST['np'];
    $cp=$_POST['cp'];
    if($np==$cp){
    $stmt=$admin->cud("UPDATE `admin` SET `a_password`='$cp' WHERE `a_id`='$aid'","saved");
    echo "<script>alert('Password updated successful!!');window.location='../profile.php';</script>";
    } else {
        echo "<script>alert('Passwords are not matching!!');window.location='../profile.php';</script>";
    }
}
?>