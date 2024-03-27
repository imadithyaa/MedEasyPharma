<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['signin'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];
    $profilepic="upload/".basename($_FILES['profilepic']['name']);
    move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic);
    $status="registered";
    $stmt=$admin->cud("INSERT INTO `customer`(`c_name`, `c_email`, `c_phone`, `c_profile_pic`, `c_address`, `c_city`, `c_state`, `c_pin`, `c_password`, `c_created_date`, `c_status`) 
    VALUES ('$name','$email','$phone','$profilepic','$address','$city','$state','$pin','$password',Now(),'$status')","saved");
    echo "<script>alert('Registration successful!!');window.location='../index.php';</script>";
}

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `customer` where `c_email`='$email' and `c_password`='$password'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $num=$stmt->rowCount();
    if($num>0){
        $cid=$row['c_id'];
        $_SESSION['c_id']= $cid;
        echo "<script>alert('Login successful!!');window.location='../homepage.php';</script>";

    } else {
        echo "<script>alert('Login Unsuccessful!!');window.location='../index.php';</script>";
    }

}
?>