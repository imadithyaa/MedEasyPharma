<?php
include '../../config.php';
$admin=new Admin();
if(isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `admin` where `a_email`='$email' and `a_password`='$password'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $num=$stmt->rowCount();
    if($num>0){
        $aid=$row['a_id'];
        $_SESSION['a_id']= $aid;
        echo "<script>alert('Login successful!!');window.location='../dashboard.php';</script>";

    } else {
        echo "<script>alert('Login Unsuccessful!!');window.location='../index.php';</script>";
    }

}
?>