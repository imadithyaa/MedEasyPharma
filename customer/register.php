<!doctype html>
<html lang="en">
  <head>
  	<title>MedEasy | Customer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Customer Registration</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-14">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/med_bg3.jpg);">
			             </div>
						<div class="login-wrap p-4 p-md-5">
			      	        <div class="d-flex">
			      	        	<div class="w-100">
			      	        		<h3 class="mb-4">Sign Up</h3>
			      	        	</div>
			      	        </div>
						<form action="controller/logreg.php" method="post" class="signin-form" enctype="multipart/form-data">
                            <div class="d-flex" style="gap:20px">
                                <div class="form-group mb-3 w-100">
			      		        	<label class="label" for="name">Name</label>
			      		        	<input name="name" type="text" class="form-control" placeholder="Name" required>
			      		        </div>
                                  <div class="form-group mb-3 w-100">
			      		        	<label class="label" for="name">Email</label>
			      		        	<input name="email" type="email" class="form-control" placeholder="Email" required>
			      		        </div>
                            </div>  

                            <div class="d-flex" style="gap:20px">
                              <div class="form-group mb-3 w-100">
			      		    	<label class="label" for="name">Phone No</label>
			      		    	<input name="phone" type="number" class="form-control" placeholder="Phone no" required>
			      		    </div>
                              <div class="form-group mb-3 w-100">
                              <label class="label" for="password">Password</label>
		                      <input name="password" type="password" class="form-control" placeholder="Password" required>
			      		    </div>
                            </div> 
                            <div class="d-flex" style="gap:20px">
                              <div class="form-group mb-3 w-100">
			      		    	<label class="label" for="name">Address</label>
			      		    	<input name="address" type="text" class="form-control" placeholder="Address" required>
			      		    </div>
                              <div class="form-group mb-3 w-100">
			      		    	<label class="label" for="name">City</label>
			      		    	<input name="city" type="text" class="form-control" placeholder="City" required>
			      		    </div>
                            </div>
                            <div class="d-flex" style="gap:20px">
                              <div class="form-group mb-3 w-100">
			      		    	<label class="label" for="name">State</label>
			      		    	<input name="state" type="text" class="form-control" placeholder="State" required>
			      		    </div>
                              <div class="form-group mb-3 w-100">
			      		    	<label class="label" for="name">Pincode</label>
			      		    	<input name="pin" type="text" class="form-control" placeholder="Pincode" required>
			      		    </div>
                            </div>
		                    <div class="form-group mb-3 w-100">
                            <label class="label" for="name">Profile Pic</label>
			      		    	<input name="profilepic" type="file" class="form-control" placeholder="" required>
		                    	
		                    </div>
		                    <div class="form-group">
		                    	<button type="submit" name="signin" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		                    </div>
		                </form>
		            </div>
		        </div>
			</div>
		</div>
	</div>
</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

