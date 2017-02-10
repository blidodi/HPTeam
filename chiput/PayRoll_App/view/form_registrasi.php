<?php
include '../controller/controller.php';
$input_user = new Form();

if(isset($_POST['tambah']) && $_POST['tambah'] == 'input'){ 
		$input_user->input_user($_POST['nama'],$_POST['username'], $_POST['password']);
		//header("location:addKaryawan_ser.php?nama=$_POST[nama]");
		header('location:form_login.php');
	}
?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Registrasi | PayRoll Appclication</title>
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
							<h2>Sign Up Your Account</h2>
							<br>
							<form class="form-auth-small" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Nama Lengkap</label>
									<input type="text" class="form-control" id="signup-email" name="nama" placeholder="nama lengkap">
								</div>
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Username</label>
									<input type="tsxt" class="form-control" id="signup-email" name="username"  placeholder="username">
								</div>
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signup-password" name="password" placeholder="password">
								</div>
								<!-- <div class="form-group">
									<select name="filter" class="form-control" onchange="form.submit()">
										<option value="Admin">Admin</option>
										<option value="User">User</option>
				                    </select>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block" name="tambah" value="input">Sign up</button>
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
