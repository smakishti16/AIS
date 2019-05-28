<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<?php
		if(isset($_POST['sign'])){
			$username=$_POST['un'];
			$password=md5($_POST['ps']);
			
			$sql="SELECT admin_username,admin_pass FROM admin WHERE admin_username=:username AND admin_pass=:password";
			
			$query=$db->prepare($sql);
			$query->bindParam(':username', $username, PDO::PARAM_STR);
			$query->bindParam(':password', $password, PDO::PARAM_STR);
			$query-> execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			
			if($query->rowCount()>0){
				$_SESSION['login']=$_POST['un'];
				header('location:dashboard.php');
				
			}
			else{
				$_SESSION['msg']="Username and password do not match!";
				header('location:error.php');
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="login-admin/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-admin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-admin/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="login-admin/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-admin/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-admin/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login-admin/images/img-01.png" alt="IMG">
				</div>

				
				<form  method="post">
					<span class="login100-form-title"> Admin Login</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="un" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="ps" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="sign">Login</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">Forgot</span>
						<a class="txt2" href="#">Username / Password?</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<script src="login-admin/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-admin/vendor/bootstrap/js/popper.js"></script>
	<script src="login-admin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-admin/vendor/select2/select2.min.js"></script>
	<script src="login-admin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="login-admin/js/main.js"></script>

</body>
</html>