<?php session_start(); ?>
<html>
	<head>
		<title>Form OOP</title>
		<style>
			input {
				margin-top: 10px;
				display: block;
			}
		</style>
	</head>
	<body>
	<?php
		require "belajar-form.php";
		include "../training/config/koneksi.php";

		$form = new Form("", "post");

		echo $form->form_header();
		echo $form->form_label("Nama");
		echo $form->form_input("text","nama","");
		echo $form->form_label("Password");
		echo $form->form_input("password","password","");
		echo $form->form_input("submit","login","Login");
		echo $form->form_footer();

		if(isset($_POST['login'])){
	        $username = $_POST['nama'];
	        $password = $_POST['password'];
	        
	        if($username=="" && $password==""){
	            $notif['msg'] = "Masukan username dan password terlebih dahulu";
	        } else {
	            $query = mysqli_query($koneksi, "SELECT * from tbl_user WHERE username='$username' AND pass='$password'");
	            $result = mysqli_fetch_array($query);

	            $row = mysqli_num_rows($query);


	            if($row > 0){
	                $_SESSION['username'] = $result['username'];
	                $_SESSION['password'] = $result['pass'];
	                $_SESSION['userStatus'] = "userLogin";
	                header("location: form-login.php");
	            } else {
	                $notif['msg'] = "Username / password yang anda masukan salah";
	            }
        	}
   		 }
   	?>
   	<?php 
	$status = $_SESSION['userStatus'];
	if (isset($status)){
		if($status=="userLogin"){
			echo "papoi udah login dengan username: ";
		} else {}
	} 
	if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>
</body>
</html>