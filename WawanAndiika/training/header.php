<?php session_start();
include "config/koneksi.php";
$isLoggedIn = $_SESSION['userStatus'];
 
if($isLoggedIn != 'userLogin'){
    session_destroy();
    header('Location: ../../');
}
?>
<html>
	<head>
		<title><?php echo ucfirst($_GET['page']);?> - Sistem Cart</title>
        <link rel="stylesheet" href="../../styles.css"/>
        <link rel="shortcut icon" href="../../img/logo.png"/>
	</head>
	<body>
		<div class="wrapper" style="background-color: #222d32">
		<header class="main-header">
			<a class="logo" href="index.php">
				<span><b>HP</b>TRAINING</span>
			</a>
			<div class="navbar">
				<div class="navbar-dropdown">
					<ul class="ul-navbar-dropdown">
						<li class="user" style="padding-right:25px;padding-left:25px;">
							<a class="user-menu" href="../../form/logout.php">
								<img src="../../img/icon/arrow.png" style="border-radius: 0px; margin-bottom: -2px;" class="user-image">
								<span class="user-name" style="font-size: 13.5px;font-family:arial;cell-spacing:1px;letter-spacing:1px;color: #ddd;">Signout</span>
							</a>
						</li>
						<li class="user-navbar-dropdown">
						</li>
					</ul>
				</div>
			</div>
		</header>
		<div class="main-sidebar">
			<div class="sidebar">
				<div class="user-panel" style="background-image: url('../../../../img/icon/header-sidebar.png');background-repeat: no-repeat;background-size: 230px 210px;">
					<div class="user-foto">
						<a href="../dashboard/"><img src="../../../../img/logo2.png" class="img-circle" alt="User Image"></a>
					</div>
					<div class="user-status">
						<p><?php echo $_SESSION['Nama']; ?></p>
						<p><?php if($_SESSION['userLevel']==1){echo 'Administrator';}else{echo 'Karyawan'; } ?></p>
					</div>
					<div class="clear"></div>
				</div>
				<nav class="vertical">
		      		<?php 
		      		if (isset($_SESSION['userLevel'])){
		      		if ($_SESSION['userLevel'] == "1") { ?>
			      	<ul>
			        	<li class="navi"><a class="navi-a" href="../dashboard/"><img src="../../img/icon/home.png"/ style="width: 15px;height: 15px;margin-bottom: -2px; margin-right:5px;"/>Home</a></li>


			        </li>
		        	<?php } if ($_SESSION['userLevel'] == "0"){ ?>
		        	<ul style="overflow: hidden;">
				        	<li class="navi"><a class="navi-a" href="../dashboard/"><img src="../../img/icon/home.png"/ style="width: 15px;height: 15px;margin-bottom: -2px;"/> Home</a></li>
			        	<li class="navi"><a class="navi-a" href="../belanja/"><img src="../../img/icon/transaksi-2.png"/ style="width: 15px;height: 15px;margin-bottom: -2px;"/> List Total Belanja</a>
			      	</ul>
			      	<?php } }?>
			    </nav>
			</div>
		</div>