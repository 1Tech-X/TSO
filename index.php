<!DOCTYPE html>
<html lang="en">
	
<head>
		<?php include('inc/meta.php')?>
	</head>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include('inc/header.php')?>
		
			<!-- /Header -->
			
			<!-- Sidebar -->
			<?php include('inc/sidebar.php')?>
			
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
				 <div class="container-fluid">
					<h4 class="mt-5">Hey! Prashant </h4>
					<h1 class="mt-2" style="color: #F6C667;">Let’s Play</h1>
				 </div>
				<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					</ol>
					    <div class="carousel-inner">
							<div class="carousel-item active ">
								<img class="d-block w-100" src="assets/img/banner/banner1.png" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/img/banner/banner1.png" alt="Second slide">
							</div>
						</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
							</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
						</a>
				</div>
                  <div class="container-fluid">
				     <h5 class="text-left mt-5 mb-5">Olympiad Category</h5>
					<div class="row mt-5">
						<div class="col-md-3 col-6 mt-4">
							<a href="category?cat_name=District Level"><div class="card tso-card card-bg-primary">
							<img src="assets/img/icons/dice.png" class="card-img">
								<div class="card-body">
									<h4 class="text-light">District Level</h4>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-3 col-6 mt-4">
						<a href="category?cat_name=State Level">
							<div class="card tso-card card-bg-primary-light">
							<img src="assets/img/icons/chess.png" class="card-img">
								<div class="card-body">
									<h4 class="text-light">State Level</h4>
								</div>
							</div>
							</a>
						</div>
						<div class="col-md-3 col-6 mt-4">
						<a href="category?cat_name=National Level">
							<div class="card tso-card card-bg-danger">
							<img src="assets/img/icons/rocket.png" class="card-img">
								<div class="card-body">
									<h4 class="text-light">National Level</h4>
								</div>
						</a>
							</div>
						</div>
						<div class="col-md-3 col-6 mt-4">
						<a href="category?cat_name=International Level">
							<div class="card tso-card card-bg-warning">
							<img src="assets/img/icons/glob.png" class="card-img">
								<div class="card-body">
									<h4 class="text-light">International Level</h4>
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				<!-- Banner 2 container -->
					<div class="container-fluid mt-5">
						<img src="assets/img/banner/bannerMiddle.png" class="img-fluid w-100 rounded-5">
					</div>
				<!-- /Banner 2 container -->

				<!-- Promo Section -->
					<div class="container-fluid mb-5">
						<div class="row promo">
							<div class="col-md-6 left">
								<h3>Download the App</h3>
								<img src="assets/img/icons/playstore.png" alt="play-store" class="mt-4">
							</div>
							<div class="col-md-6 right d-flex justify-content-center">
								<img src="assets/img/icons/mob1.png">
								<img src="assets/img/icons/mob2.png" class="img2">
							</div>
						</div>
					</div>
				<!-- Promo Section -->
				
					
	


				</div>
			</div>
			<!-- /Page Wrapper -->
			<?php include('inc/bottom-nav.php')?>
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		

		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script>
			(function($) {
    		"use strict";
			 $(document).on('click', '.tso-card', function() {
				console.log("clciked");
			});
			})
		</script>
	</body>

<!-- Mirrored from kanakku.dreamguystech.com/template-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 09:59:21 GMT -->
</html>