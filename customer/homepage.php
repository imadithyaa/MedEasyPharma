<?php
include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['c_id'])){
    header('Location:index.php');
}
$cid=$_SESSION['c_id'];
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
    <div class="preloader">
        <div class="spinner"></div>
    </div>
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
                    <a href="homepage.php"><h1 class="medeasy-heading">MedEasy</h1>

                    </a>
                </div>
                <?php include 'includes/header.php'; ?>
                <!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!--<h4>Caring for better life</h4>-->
                    <h1>Caring for you and your family's health</h1>
                    <p>Good health is not just the absence of disease, but a state of complete physical, mental, and social well-being.</p>
                    <a href="medicines.php" class="template-btn mt-3">Shop now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
    <h2><center>Features</center></h2>
        <div class="container lg-12 mt-3">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="assets/images/feature1.png" alt="">
                        <h3>User-friendly interface</h3>
                        <!--<p class="pt-3">User-friendly interface that allows customers to easily search for and purchase medications.</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-md-0">
                        <img src="assets/images/feature2.png" alt="">
                        <h3>Customizable prescription refill</h3>
                        <!--<p class="pt-3">Ability to upload and store prescription information for easy refills</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature3.png" alt="">
                        <h3>Accurate up-to-date medication information</h3>
                        <!--<p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature4.png" alt="">
                        <h3>Quality Customer Service</h3>
                        <!--<p class="pt-3">The website offers quality customer service with 24/7 support.</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2>Welcome to our Medical Store</h2>
                        <p>
                        <font size="4" face="calibri" color="BLACK">
                        Welcome to MedEasy, your one-stop online pharmacy for all your medical needs. At MedEasy, we are committed to providing our customers with top-quality medications, healthcare products, and medical equipment at affordable prices.</font></p>
                        <p>
                        <font size="4" face="calibri" color="BLACK">With our user-friendly website, you can easily browse through our extensive range of products, place orders, and have them delivered right to your doorstep. Our experienced pharmacists are available 24/7 to answer any questions you may have and provide you with expert advice. At MedEasy, we prioritize your health and well-being, and we strive to make your shopping experience as seamless and stress-free as possible. Visit us today and experience the convenience of MedEasy.</font></p>
                        <a href="about.php" class="template-btn mt-3">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Department Area Starts -->
    <section class="department-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Latest Medicines</h2>
                        <!--<p>
                        <font size="3.5" face="calibri" color="BLACK">MedEasy known for providing affordable and top quality medicines to the customer.</font></p>-->
                    </div>
                </div>
            </div>
            <div class="row">
        <?php
        $st = $admin->ret("SELECT * FROM `medicine` inner join `purchase` on purchase.pr_id=medicine.pr_id");
        while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="col-lg-3 col-sm-6 p-3" id="card">
                <div class="single-doctor mb-3 mb-lg-0">
                    <div class="doctor-img">
                        <img src="../admin/controller/<?php echo $row['m_image']; ?>" style="width: 350px;height: 300px;overflow: hidden;object-fit: cover;" alt="" class="img-fluid">
                    </div>
                    <div class="content-area">
                        <div class="doctor-name text-center">
                        <h3><?php echo $row['m_title']; ?></h3>
                        <h6>Mfd: <?php echo $row['m_manufactured_date']; ?> - Exp: <?php echo $row['m_expiry_date']; ?></h6>
                        <h4>₹<?php echo $row['m_price']; ?></h4>
                    </div>
                    <div class="doctor-text text-center" style="height:200px">
                        <p><?php echo $row['m_discription']; ?>.</p>
                        <ul class="doctor-icon">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
    </div>
    </section>
    <!-- Department Area Starts -->

    <!-- Patient Area Starts -->
    <section class="patient-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Customers are saying</h2>
                        <!--<p>
                        <font size="3.5" face="calibri" color="BLACK">Customer feedback is a valuable tool for improving customer service and creating engaging experiences .</font></p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-13 d-flex">
                    <div class="single-patient">
                        <img src="assets/images/pat2.jpg" alt="">
                        <h3>Likitha Raj</h3>
                        <!--<h5>Doctor</h5>-->
                        <p class="pt-3">The MedEasy pharmacy website provides a user-friendly interface, making it easy for customers to navigate and find the information they need.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/pat3.jpg" alt="">
                        <h3>Shaheed</h3>
                        <!--<h5>Industrialist</h5>-->
                        <p class="pt-3">The website offers a wide range of prescription medications, ensuring that customers have access to the medications they require.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/pat4.jpg" alt="">
                        <h3>Karthik Shetty</h3>
                        <!--<h5>Industrialist</h5>-->
                        <p class="pt-3">Implement a seamless online prescription refill system, allowing customers to easily submit their prescription details and receive timely updates on their order status.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-13 d-flex">
                    <div class="single-patient">
                        <img src="assets/images/pat5.jpg" alt="">
                        <h3>Farahan jhonson</h3>
                        <!--<h5>Doctor</h5>-->
                        <p class="pt-3">Provide detailed information about the medications you offer, including descriptions, dosage instructions, and potential side effects. </p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/patient2.png" alt="">
                        <h3>Daniel</h3>
                        <!--<h5>Industrialist</h5>-->
                        <p class="pt-3">MedEasy pharmacy website provides educational resources and information about various medications, helping customers make informed decisions about their healthcare needs.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/pat1.webp" alt="">
                        <h3>Shannti krishna</h3>
                        <!--<h5>Industrialist</h5>-->
                        <p class="pt-3">MedEasy pharmacy website provides a secure and encrypted online platform for customers to submit their prescription orders, ensuring the privacy and confidentiality of their personal information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->

    <!-- Specialist Area Starts -->
    <!--<section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our specialisht</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>ethel davis</h3>
                                <h6>sr. faculty data science</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>dand mories</h3>
                                <h6>sr. faculty plastic surgery</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>align board</h3>
                                <h6>sr. faculty data science</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="assets/images/doctor4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>jeson limit</h3>
                                <h6>sr. faculty plastic surgery</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Specialist Area Starts -->

    <!-- Hotline Area Starts -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>+91 7120777351</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for any enquiries.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotline Area End -->

    <!-- News Area Starts -->
    <!-- <section class="news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Recent medical news</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <img src="assets/images/news1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 July 2018
                            </div>
                            <h3><a href="blog-details.html">chip to model coeliac disease</a></h3>
                            <p>Elementum libero hac leo integer. Risus hac part duriw feugiat litora cursus hendrerit bibendum per person on elit.Tempus inceptos posuere me.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mt-5 mt-md-0">
                        <div class="news-img">
                            <img src="assets/images/news2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 Oct 2018
                            </div>
                            <h3><a href="blog-details.html">Galectins An Ancient FaSi Future</a></h3>
                            <p>Elementum libero hac leo integer. Risus hac part duriw feugiat litora cursus hendrerit bibendum per person on elit.Tempus inceptos posuere me.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mt-5 mt-lg-0">
                        <div class="news-img">
                            <img src="assets/images/news3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 Sep 2018
                            </div>
                            <h3><a href="blog-details.html">Getting the Most Out of the CLARI</a></h3>
                            <p>Elementum libero hac leo integer. Risus hac part duriw feugiat litora cursus hendrerit bibendum per person on elit.Tempus inceptos posuere me.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- News Area Starts -->
    
    
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by MedEasy
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
