<?php
session_start();
	if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang|</title>

	<link rel="stylesheet" type="text/css" href="css/style_menu.css">
</head>
<body>
<?php include "header_halaman.php";?>

<?php include "menu_halaman.php";?>

<div id="section">
 SELAMAT DATANG, 
 <span style="	color:blue; font-weight:bold; font-size: 32px"><?php echo$_SESSION['username'];?></span>
</div>

<?php include "footer_halaman.php";?>

</body>
</html>