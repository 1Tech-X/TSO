<?php 
if(isset($_GET['cat_name'])){
	$categoryName=$_GET['cat_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<?php include('inc/meta.php')?>
	</head>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include('inc/sub-header.php')?>
		
			<!-- /Header -->
			
			<!-- Sidebar -->
			<?php include('inc/sidebar.php')?>
			
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
                			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					<div class="container-fluid">
						<h2 class="text-center mt-3 mb-3">Classes</h2>
					</div>

					<!-- Class01st to 05th -->
					<div class="container 0to5 ">
					 <div class="card card-bg-primary-light classes-card">
						<div class="row">
							<div class="col-4 left" style="padding: 2em;">
								<img src="assets/img/icons/1to5.png" class="img-fluid">
							</div>
							<div class="col-8 right">
								<h1 class="text-center">Classes <br>01<small>st</small> to 05<small>th</small></h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /Class01st to 05th -->

				<!-- Classes 6to8 -->
				<div class="container 6to8 ">
					 <div class="card card-bg-danger classes-card">
						<div class="row">
							<div class="col-4 left" >
								<img src="assets/img/icons/6to8.png" class="img-fluid">
							</div>
							<div class="col-8 right">
								<h1 class="text-center">Classes <br>6<small>th</small> to 8<small>th</small></h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /Classes 6to8  -->

					<!-- Classes 9to12 -->
						<div class="container 9to12 ">
					 <div class="card card-bg-warning classes-card">
						<div class="row">
							<div class="col-4 left">
								<img src="assets/img/icons/9to12.png" class="img-fluid">
							</div>
							<div class="col-8 right">
								<h1 class="text-center">Classes <br> 9<small>th</small> to 12<small>th</small></h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /Classes 9to12 -->
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
		
		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>

<!-- Mirrored from kanakku.dreamguystech.com/template-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 09:59:21 GMT -->
</html>