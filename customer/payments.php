<?php
include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['c_id'])){
    header('Location:index.php');
}
$cid=$_SESSION['c_id'];
$stmt=$admin->ret("SELECT * FROM `customer` where `c_id`='$cid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>MedEasy</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
  .medeasy-heading {
    background: linear-gradient(to right, #244cfd, #15e4fd);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>
</head>
<body>
    <!-- Preloader Starts -->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><a href="tel:+917120777351"><i class="fa fa-mobile"></i></span> call us now! +91 7120777351</h6>
                        <h6 class="mr-3"><span class="mr-2"><a href="mailto:medeasypharma23@gmail.com"><i class="fa fa-envelope-o"></i></span> medeasypharma23@gmail.com</h6>
                        <h6><span class="mr-2"><a href=https://goo.gl/maps/PSaBie6cNd3VWWK17><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                    </div>
                    <!-- <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="">
                        <h1 class="medeasy-heading">MedEasy</h1>
                    </a>
                </div>
                <?php include 'includes/header.php'; ?>
                <!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>   

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Payments</h1>
                    <a href="homepage.php">Home</a> <span>|</span> <a href="orders.php">Orders</a>
                    <!-- <a href="index.html">Home</a> <span>|</span> <a href="elements.html">Elements</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

        <section class="patient-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Your Payments</h2>
                        <p>
                        <font size="4" face="calibri" color="BLACK">Customer are able to access thier payment information for thier orders,as well as obtain the current status of thier payment.</font></p>
                    </div>
                </div>
            </div>
                  
            <div class="row justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <div class="table-responsive">
                            <h2 class="text-light">Your Payments for Orders</h2>
                            <table class="table table-dark col-lg-12">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Medicine</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    $st=$admin->ret("SELECT * FROM `payment` inner join `order` on order.o_id=payment.o_id inner join `medicine` on medicine.m_id=order.m_id inner join `purchase` on purchase.pr_id=medicine.pr_id where order.c_id='$cid' order by `pt_id`asc");
                                    while($ro=$st->fetch(PDO::FETCH_ASSOC)){
                                     ?>

                                    
                                    <tr>
                                        <td><?php echo $ro['pt_date']; ?></td>
                                        <td><?php echo $ro['m_title']; ?></td>
                                        <td><?php echo $ro['o_qty']; ?></td>
                                        <td><?php echo $ro['pt_total_amt']; ?></td>
                                        <td><?php echo $ro['pt_status']; ?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                            </table>
                        </div>
                        <div class="table-responsive mt-5">
                            <h2 class="text-light">Your Payments for Prescriptions</h2>

                            <table class="table table-dark col-lg-12">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Patient Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    $st=$admin->ret("SELECT * FROM `ps_payment` inner join `prescription` on prescription.ps_id=ps_payment.ps_id where prescription.c_id='$cid'");
                                    while($ro=$st->fetch(PDO::FETCH_ASSOC)){
                                     ?>

                                    
                                    <tr>
                                        <td><?php echo $ro['pp_date']; ?></td>
                                        <td><?php echo $ro['ps_patient_name']; ?></td>
                                        <td><?php echo $ro['pp_amount']; ?></td>
                                        <td><?php echo $ro['pp_status']; ?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved All rights reserved by MedEasy
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <!--  <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <script>
        function increment(ct_id) {


            var qty = document.getElementById(ct_id).value;
            qty = parseInt(qty) + 1;

            // if (qty > stock) {

            //     alert('out of stock');
            // } else {
                document.getElementById(ct_id).value = qty;
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("cart").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "controller/update_cart.php?ct_id=" + ct_id + '&qty=' + qty, true);
                xmlhttp.send();

            // }

        }


        function decrement(ct_id) {

            var qty = document.getElementById(ct_id).value;
            qty = parseInt(qty) - 1;
            if (qty > 0) {

                document.getElementById(ct_id).value = qty;
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("cart").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "controller/update_cart.php?ct_id=" + ct_id + '&qty=' + qty, true);
                xmlhttp.send();

            }

        }
    </script>


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
