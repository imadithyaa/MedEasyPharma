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
                    <a href="homepage.php">
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
                    <h1>Edit Profile</h1>
                    <a href="homepage.php">Home</a> <span>|</span> <a href="profile.php">Profile</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <div class="whole-wrap">
        <div class="container col-xl-11">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-md-4">
                    <h3 class="mb-30 title_color text-center">Profile pic</h3>

                        <div class="justify-content-center" style="margin-left:20%">
                        <?php if($row['c_profile_pic']==""){ ?>
                        <img src="images/dp.jpg" alt="" class="img-fluid" style="border-radius:50%;overflow:hidden;object-fit:cover;width:250px;height:250px">
                        <?php } else { ?>
                        <img src="controller/<?php echo $row['c_profile_pic']; ?>" alt="a" class="img-fluid" style="border-radius:50%;overflow:hidden;object-fit:cover;width:250px;height:250px">
                        <?php } ?>
                        </div>
                        <form method="post" action="controller/profile.php" enctype="multipart/form-data">
                        <div class="d-flex justify-content-center w-100 mt-3" style="gap:20px;width:400px">
                            <label class="mt-2">Change profile</label>
                            <input type="file" name="dp" required value="<?php echo $row['c_profile_pic']; ?>" class="form-control w-50">
                            <button class="btn btn-primary p-2" name="ndp">Upload</button>
                        
                        </div>
                        </form>
                    </div>
                    <div class="col-md-8 mt-sm-20 left-align-p ">
                        <div class="col-lg-10 offset-lg-1 align-self-center">
                            <div class="card mt-3 mb-3 bg-light">
                                <div class="col-lg-12 p-3">
                                    <h3>Customer Profile</h3>
                                    <form method="post" action="controller/profile.php">
                                    <div class="d-flex" style="gap:50px">
                                        <div class="d-flex w-100" style="gap:23px">
                                            <label class="mt-2">Name</label>
                                            <input type="text" value="<?php echo $row['c_name']; ?>" class="form-control w-100" name="name" required>
                                        </div>
                                        <div class="d-flex w-100" style="gap:20px">
                                            <label class="mt-2">Phone</label>
                                            <input type="number" value="<?php echo $row['c_phone']; ?>" class="form-control w-100" name="phone" required>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex mt-3" style="gap:50px">
                                    <div class="d-flex w-100" style="gap:25px">
                                            <label class="mt-2">Email</label>
                                            <input type="email" value="<?php echo $row['c_email']; ?>" class="form-control w-100" name="email" required>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="d-flex w-100 mt-3" style="gap:7px">
                                            <label class="mt-2">Address</label>
                                            <input type="text" value="<?php echo $row['c_address']; ?>" class="form-control w-100" name="address" required>
                                        </div>
                                    <div class="d-flex mt-3" style="gap:20px">
                                        <div class="d-flex w-100" style="gap:37px">
                                            <label class="mt-2">City</label>
                                            <input type="text" value="<?php echo $row['c_city']; ?>" class="form-control w-100" name="city" required>
                                        </div>
                                        <div class="d-flex w-100" style="gap:20px">
                                            <label class="mt-2">State</label>
                                            <input type="text" value="<?php echo $row['c_state']; ?>" class="form-control w-100" name="state" required>
                                        </div>
                                        <div class="d-flex w-100" style="gap:20px">
                                            <label class="mt-2">Pin</label>
                                            <input type="number" value="<?php echo $row['c_pin']; ?>" class="form-control w-100"name="pin" required>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3" style="gap:50px">
                                        <div class="d-flex w-100" style="gap:20px">
                                            <input type="submit" name="update" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-sm-20 left-align-p ">
                        <div class="col-lg-8 offset-lg-1 align-self-center">
                            <div class="card mt-3 mb-3 bg-light">
                                <div class="col-lg-12 p-3">
                                    <h3>Change Password</h3>
                                    <form method="post" action="controller/profile.php">
                                    <div class="d-flex mt-3" style="gap:50px">
                                    <div class="d-flex w-100" style="gap:25px">
                                            <label class="mt-2 w-25">New Password</label>
                                            <input type="text" class="form-control w-100" required name="np">
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="d-flex w-100 mt-3" style="gap:35px">
                                            <label class="mt-2">Confirm Password</label>
                                            <input type="password" class="form-control w-100" name="cp" required>
                                        </div>
                                    
                                    <div class="d-flex mt-3" style="gap:50px">
                                        <div class="d-flex w-100" style="gap:20px">
                                            <input type="submit" name="up" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
    </div>

    
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
