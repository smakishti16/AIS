<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!doctype html>
<html lang="en">

<head>
      

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	  <title>OOPS!!!</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
 
    
    
    <body>
    
       
      
       
    
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
			<div id="error-text" class="section-padding back-size">
            	<div class="container">
                	<div class="row">
                		<div class="col-sm-12">
                        	<h3 class="company-name"><span><i></i></span>ERROR</h3>
                    		<h2>404</h2>
                            <p>The page you were looking for could not be found.</p>
							   <h4>  <?php echo htmlentities($_SESSION['msg']);?></h4>
                        	<a href="index.php" class="btn btn-w-border">Go Back Home</a>
							
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end error-text -->
        </section><!-- end innerpage-wrapper -->
        
            
        </section><!-- end footer -->
        
        
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
    </body>


</html>
