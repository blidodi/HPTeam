<?php session_start();
    include_once "config/koneksi.php";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username=="" && $password==""){
            $notif['msg'] = "Masukan username dan password terlebih dahulu";
        } else {
            $query = mysqli_query($koneksi, "SELECT * from tbl_user WHERE username='$username' AND pass='$password'");

            $result = mysqli_fetch_array($query);

            $row = mysqli_num_rows($query);


            if($row > 0){
                $_SESSION['userLevel'] = $result['userLevel'];
                $_SESSION['NIK'] = $result['username'];
                $_SESSION['Nama'] = $result['pass'];
                $_SESSION['userStatus'] = "userLogin";
                header("location: page/dashboard/");
            } else {
                $notif['msg'] = "Username / password yang anda masukan salah";
            }
        }
    }
?>
<html>
	<head>
		<title>Login Page</title>
        <link rel="stylesheet" href="styles.css"/>
        <link rel="shortcut icon" href="img/trans-logo.png"/>
	</head>
	<body style="background: #2C78A5;">
        <div class="login">
            <div class="logo-login">
            <center>
                <h1><b>HP</b>TRAINING SIGN IN</h1>
                <?php
                    if(isset($notif)){
                        ?>
                        <div class="error-login" style="font-size:13px;font-family:arial;"> 
                            <?php echo $notif['msg']; ?>
                        </div>
                <?php } else { ?>
                        <div class="error-login" style="font-size:13px;font-family:arial;background:#647084;"> 
                            Untuk mengakses sistem, login terlebih dahulu..
                        </div>
                <?php } ?>
            </center>
            </div>
            <div class="login-wrapper">
                <form method="post" action="">
                    <p><input name="username" value="" placeholder="Masukan username anda.." type="text"></p>
                    <p><input name="password" value="" placeholder="Masukan password anda.. " type="password"></p>
                    <p class="submit"><button name="login" value="Login" type="submit" style="margin-top:35px;">Login</button></p>
                    <div class="clear">
                </form>
            </div>
        </div>
    </body>
</html>