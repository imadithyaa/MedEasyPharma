<?php
include '../../config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['ndp'])){
    
    $dp="upload/".basename($_FILES['dp']['name']);
    move_uploaded_file($_FILES['dp']['tmp_name'],$dp);

    $stmt=$admin->cud("UPDATE `customer` SET `c_profile_pic`='$dp' WHERE `c_id`='$cid'","saved");
    echo "<script>alert('Profile picture updated successfully!!');window.location='../profile.php';</script>";
}

if(isset($_POST['update'])){
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];

    $stmt=$admin->cud("UPDATE `customer` SET `c_name`='$name',`c_email`='$email',`c_phone`='$phone',`c_address`='$address',`c_city`='$city',`c_state`='$state',`c_pin`='$pin',`c_updated_date`=Now() WHERE `c_id`='$cid'","saved");
    echo "<script>alert('Profile updated successfully!!');window.location='../profile.php';</script>";
}
if(isset($_POST['up'])){
    $np=$_POST['np'];
    $cp=$_POST['cp'];
    if($np==$cp){
    $stmt=$admin->cud("UPDATE `customer` SET `c_password`='$cp' WHERE `c_id`='$cid'","saved");
    echo "<script>alert('Password updated successful!!');window.location='../profile.php';</script>";
    } else {
        echo "<script>alert('Passwords are not matching!!');window.location='../profile.php';</script>";
    }
}
?>