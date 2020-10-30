<?php
ob_start("ob_gzhandler");
session_start();
include("includes/db_config.php");
if ( isset($_SESSION['user_id'])) {
   header("location: index.php");
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Fontawesome -->
	<link rel="stylesheet" href="fonts/fontawesome-all.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.gif">	
	<!-- Jquery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<section class="login-form">
		<div class="container">
			<div class="login-position">
				<div class="login-container">
					<div class="user-image">
						<i class="fa fa-user"></i>
					</div>
					<div class="login-header">
						<h4>Sign In</h4>
					</div>
					<form class="userLoginForm" id="userLoginForm">
					<div class="alert alert-success" id="successAlert" style="display:none">
						You have successfully logged into your account.
					</div>
					<div class="alert alert-danger" id="failedAlert" style="display:none">
						Username or Password entered is incorrect.
					</div>
					<div class="alert alert-warning" id="statusinactiveAlert" style="display:none">
						Your Account is In-active. Please contact your Administrator.
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12 mb-4">
							<label>User name</label>
						</div>
						<div class="col-lg-8 col-md-8 col-12 mb-4">
							<input type="text" name="txt_username" value="<?php if(isset($_COOKIE["memberlogin"])) { echo $_COOKIE["memberlogin"]; } ?>"> 
						</div>
						<div class="col-lg-4 col-md-4 col-12 mb-4">
							<label>Password</label>
						</div>
						<div class="col-lg-8 col-md-8 col-12 mb-4">
							<input type="password" name="txt_password" value="<?php if(isset($_COOKIE["memberpassword"])) { echo $_COOKIE["memberpassword"]; } ?>">
						</div>
						<div class="col-lg-12">
							<input type="submit" value="Login"/>
						</div>
						<input type="hidden" name="mode" id="mode" value="userLogin"> 
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>
		
	
<!-- Main Jquery -->
<script src="js/jquery_validation/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
<script src="js/custom/login_script.js"></script>
</body>
</html>