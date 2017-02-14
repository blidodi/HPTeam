<?php session_start(); 
if(isset($_SESSION['userStatus'])){
	if($_SESSION['userStatus']=='userLogin'){
		header("location: /");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background: #fefefe;">
	<div class="container">
		    <div class="row">
		        <div class="col-sm-6 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title">Sign in to continue to Admin Panel</h1>
		            <div class="account-wall">
		                <img class="profile-img" src="assets/img/user-login.png" alt="Login to Admin Panel">
		                <?php 
		                	include"controllers/controller.php";
							$user = new User();
							if(isset($_POST['login'])){
								$username = $_POST['username'];
								$password = $_POST['password'];

								$query = $user->checkuser($username,$password);
								$result = mysqli_fetch_array($query);
								$row = mysqli_num_rows($query);
					            if($row > 0){
					                $_SESSION['userStatus'] = 'userLogin';
					                $_SESSION['username'] = $result['username'];
					                $_SESSION['id_user'] = $result['id_user'];
					                $_SESSION['role'] = $result['role'];
					                header("location: /");
					            } else {
					            	echo '<div class="form-signin alert alert-danger" style="margin: 0 30px;"><strong>Gagal!</strong> Username, password salah</div>';
					            }
							}
		                	$form = new Form('','POST');
		                	echo $form->header('form-signin','');
		                	echo $form->inputsubmit('text','username','form-control','Username...');
							echo $form->inputsubmit('password','password','form-control','Password...');
			                echo $form->button('submit','login','btn btn-lg btn-primary btn-block','Login');
		                	echo $form->footer();
		                ?>
		            </div>
		        </div>
		    </div>
		</div>
</body>
</html>