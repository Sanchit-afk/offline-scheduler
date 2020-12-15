<?php
session_start();

//require 'db_conn.php';
if (session_status() == 2) {
	if ($_SESSION) {
		if ($_SESSION['c_id']) {
			header("Location: home.php?mess=success");
		}
		if ($_SESSION['s_id']) {
			header("Location: shopkeeper.php?mess=success");
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="app/login_vendor.php" method="POST">
				<h1>Shopkeeper Login</h1>
				<span>or use your email for registration</span>
				<input type="email" placeholder="Email" name="s_email" />
				<input type="password" placeholder="Password" name="s_password" />
				<?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
					<h3>Please enter the correct login details</h3>
				<?php }?>
				<button>login</button>
				<a href="register_vendor.php">Register</a>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="app/login.php" method="POST">
				<h1>Customer Login</h1>
				<span>or use your account</span>
				<input type="email" placeholder="Email" name="c_email" />
				<input type="password" placeholder="Password" name="c_password" />
				<?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
					<h3>Please enter the correct login details</h3>
				<?php }?>
				<!-- <a href="#">Forgot your password?</a> -->
				<button>Login</button>
				<a href="register.php">Register</a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Customer Login</h1>
					<p></p>
					<button class="ghost" id="signIn">Login</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Shopkeeper Login</h1>
					<p></p>
					<button class="ghost" id="signUp">Login</button>

				</div>
			</div>
		</div>
	</div>

	<script src="js/script.js"></script>
</body>

</html>