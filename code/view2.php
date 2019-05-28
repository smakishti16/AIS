<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0){
	header('location:index.php');
}
else{?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>AIS </title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	
	
</head>


<body>

<?php include('includes/nav.php');?>

			<div class="main-panel">
			
			
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">View Posts</h4>
						<div class="row">

							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Job posts</h4>
										<p class="card-category">Check all your job posted that are posted in the blog.</p>
									</div>
									<div class="card-body">
										<div class="demo">
											<?php include('includes/viewjob.php');?>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Events</h4>
										<p class="card-category">Check and manage the events posted in the blog!</p>
									</div>
									<div class="card-body">
										<div class="demo">
											
											<?php include('includes/viewevent.php');?>
											
</div>

									</div>
								</div>
							</div>
							
							
														<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">My events</h4>
										<p class="card-category">Check and manage the events that you have posted in the blog!</p>
									</div>
									<div class="card-body">
										
										<div class="demo">
										<?php include('includes/viewmyevents.php');?>
											
											</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Testimonials</h4>
										<p class="card-category">View all posts created by alumni students</p>
									</div>
									<div class="card-body">
										<p class="demo">
											<?php include('includes/viewblog.php');?>
											
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>

			</div>

</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>

<?php } ?>