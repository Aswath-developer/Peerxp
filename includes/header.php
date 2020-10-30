<?php 

error_reporting(1);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ( !isset($_SESSION['user_id'])) {
   header("location: signin.php");
   exit;
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
	<!-- DataTable -->
	<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!-- DataTable -->	
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	
	
</head>
<body>
	<section class="p-0 header-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-6">
					<div class="logo">
						<a href="index.php"><img src="https://pws.peerxp.com/wp-content/uploads/2019/04/peerxp-logo-sq.png" /></a>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<div class="inner-user">
						 <div class="dropdown">
							  <button class="dropdown-toggle logout" type="button" data-toggle="dropdown"><i class="fa fa-user"></i> <span>Aswath
							  <span class="caret"></span></span></button>
							  <ul class="dropdown-menu">
								<li><a href="logout.php">Logout</a></li>
								
							  </ul>
							</div> 
					</div>
				</div>
			</div>
		</div>
	</section>