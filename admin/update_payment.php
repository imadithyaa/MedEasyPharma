<?php
include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['a_id'])){
    header('Location:index.php');
}
$aid=$_SESSION['a_id'];
$stmt=$admin->ret("SELECT * FROM `admin` where `a_id`='$aid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

$ptid=$_GET['pt_id'];
$stmt2=$admin->ret("SELECT * FROM `payment` inner join `order` on order.o_id=payment.o_id inner join `medicine` on medicine.m_id=order.m_id inner join `purchase` on purchase.pr_id=medicine.pr_id inner join `customer` on customer.c_id=order.c_id where payment.pt_id='$ptid'");
$row2=$stmt2->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MedEasy - Admin</title>
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
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'includes/header.php'; ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Customer Profile</h6>
                            </div>
                                <img src="../customer/controller/<?php echo $row2['c_profile_pic']; ?>" alt="a" style="width:300px;height:300px;overflow:hidden;object-fit:cover">
                                <h5 class="mt-3"><?php echo $row2['c_name'] ?> </h5>
                            <form action="controller/payment.php" method="post" class="signin-form" enctype="multipart/form-data">
                            <div class="mt-2 d-flex text-center align-items-center justify-content-center" style="gap:10px">
                                <div class="w-50">
                                    <input type="hidden" name="ptid" value="<?php echo $ptid; ?>" >
                                    <select class="form-control bg-dark" required name="status">
                                        <option value="" hidden>Update Status</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" name="send" class="btn btn-danger">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Customer</h6>
                            </div>
                                <form action="controller/payment.php.php" method="post" class="signin-form">
                                <div class="p-3">
                                    <div class="d-flex">
                                        <label class="w-50 mt-2">Medicine</label>
                                        <input readonly type="text" name="name" required class="form-control bg-dark" value="<?php echo $row2['m_title'] ?>">
                                    </div>
                                    <div class="d-flex mt-3">
                                        <label class="w-50 mt-2">Qty</label>
                                        <input readonly type="text" name="np" required class="form-control bg-dark" value="<?php echo $row2['o_qty'] ?>">
                                    </div>

                                    <div class="d-flex mt-3">
                                        <label class="w-50 mt-2">Total Amount</label>
                                        <input readonly type="text" name="cp" required class="form-control bg-dark" value="<?php echo $row2['pt_total_amt'] ?>">
                                    </div>
                                    <div class="d-flex mt-3">
                                        <label class="w-50 mt-2">Transaction ID</label>
                                        <input readonly type="text" name="cp" required class="form-control bg-dark" value="<?php echo $row2['o_tid'] ?>">
                                    </div>

                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-centMedEasyer text-sm-start">
                            &copy; <a href="#"></a>, All Right Reserved. 
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