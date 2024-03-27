<?php
include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['a_id'])){
    header('Location:index.php');
}
$aid=$_SESSION['a_id'];
$stmt=$admin->ret("SELECT * FROM `admin` where `a_id`='$aid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MedEasy - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'includes/header.php'; ?>
          
            <div class="container-fluid pt-4 px-4">
            <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Stocks</h6>
                            <form action="controller/add_stock.php" method="post">
                               <div class="d-flex" style="gap:20px">
                                    <div class="row mb-3 w-100">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="date" class="form-control" id="inputEmail3" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 w-100">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control text-light" id="inputPassword3" placeholder="Dealer name" required>
                                        </div>
                                    </div>
                               </div>
                               <div class="d-flex" style="gap:20px">
                                    <div class="row mb-3 w-100">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Number</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="number" class="form-control text-light" id="inputEmail3" placeholder="Dealer number" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 w-100">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="medname" class="form-control text-light" id="inputPassword3" placeholder="Medicine name" required>
                                        </div>
                                    </div>
                               </div>
                               <div class="d-flex" style="gap:20px">
                                    <div class="row mb-3 w-100">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="qty" min="1" class="form-control text-light" placeholder="Quantity" id="inputEmail3" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 w-100">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Rate</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="rate" min="1" class="form-control text-light" id="inputPassword3" placeholder="Rate per unit" required>
                                        </div>
                                    </div>
                               </div>
                               <div class="d-flex" style="gap:20px">
                                    <div class="row mb-3 w-100">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Manufactured Date</label>
                                        <div class="col-sm-10">
                                            <input type="month" name="mdate" class="form-control text-light" id="inputEmail3" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 w-100">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Expiry Date</label>
                                        <div class="col-sm-10">
                                            <input type="month" name="edate" class="form-control text-light" id="inputPassword3" required>
                                        </div>
                                    </div>
                               </div>
                               <div class="d-flex" style="gap:20px">
                                    <div class="row mb-3 w-50">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="bill" min='1' placeholder="Bill Amount" class="form-control text-light" id="inputEmail3" required>
                                        </div>
                                    </div>
                               </div>

                                <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                            </form>
                        </div>
                    </div>
            </div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">MedEasy</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>