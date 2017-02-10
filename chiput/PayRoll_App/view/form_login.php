<?php

	if (isset($_POST['login']) && $_POST['login'] == 'Login') {

		if (empty($_POST['username']) && empty($_POST['password'])) {

			
		} else if (isset($_POST['username']) && isset($_POST['password'])) {
			
			
			include '../controller/controller.php';
			$cek_login = new User();

			$result = $cek_login->cek_login($_POST['username'],$_POST['password']);

			if(mysql_num_rows($result)>0){

				$row = mysql_fetch_array($result);

				session_start();

				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				$_SESSION['id'] = $row['id'];
				if ($row['level']==1) {
					header('location:dashboard_admin.php');
				}else if ($row['level']==2) {
					header('location:dashboard_user.php');
				}
			}

		}else{
			// header('location:form_login.php');
		}
	}else{
			// header('location:form_login.php');
	}
?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | PayRoll Appclication</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="../asset/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../asset/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../asset/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../asset/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<!-- <div class="logo text-center"><img src="../asset/img/logo-dark.png" alt="Klorofil Logo"></div> -->
							<h2>Sign In Your Account</h2>
							<br>
							<form class="form-auth-small" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signup-email" name="username" placeholder="username">
								</div>
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signup-password" name="password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Login">Sign In</button>
								<div class="bottom">
									<span><i class="fa fa-lock"></i> <a href="form_registrasi.php">Don't Have Account, Please Sign Up</a></span>
								</div>
								</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">PayRoll Application</h1>
							<p>by The Develovers HP Team</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
