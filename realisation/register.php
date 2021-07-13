<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
<head>
	
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Welcome!</title>

</head>
<body class="stretched">

<div id="wrapper" class="clearfix">
<section id="content">
			<div class="content-wrap py-0">

				<div class="section p-0 m-0 h-100 position-absolute" ></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0">
					<div class="vertical-middle">
						<div class="container-fluid py-5 mx-auto">
							<div class="center">
								<a href="index.html"><img  src="demos/restaurant/images/logosamak.png" alt="Canvas Logo"></a>
							</div>

							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
								<div class="card-body" style="padding: 40px;">
									<form id="loginForm" action="register.php" method="POST" name="login-form" class="mb-0" >
										<h3>Login to your Account</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="loginUsername">Username:</label>
												<input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. bartSimpson" class="form-control not-dark" required />
											</div>

											<div class="col-12 form-group">
												<label for="loginPassword">Password:</label>
												<input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" class="form-control not-dark" required />
											</div>

											<div class="col-12 form-group">
												<button class="button button-3d button-black m-0" id="login-form-submit" type="submit" name="loginButton" value="login">Login</button>
												
											</div>
										</div>
									</form>

							

								</div>
							</div>

							
						</div>
					</div>
				</div>

			</div>
		</section>
	
		</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

</body>
</html>