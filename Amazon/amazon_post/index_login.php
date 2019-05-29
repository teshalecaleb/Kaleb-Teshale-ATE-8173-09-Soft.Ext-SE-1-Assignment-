<?php
	include('login.php');	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amazone Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/endor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-26">
						Welcome<br>
					</span>
					<span><b>....Only Admin can Post to public....</b></span>
					<div class ="form-group">
						<label>Username</label>
						<input type="username" name="username" class="form-control" placeholder="Username" id="username" required data-validation-required-message="Please enter your email address.">
						<p class="help-block text-danger"></p>        
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<label>Password</label>
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input type="password" name="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your phone number.">
						<p class="help-block text-danger"></p>
					</div>

					<input type="submit" name="submit" value="	Login	" class="btn btn-primary">
					
					<p class="help-block text-danger"><?php echo $error; ?></p>



					
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>

</body>
</html>