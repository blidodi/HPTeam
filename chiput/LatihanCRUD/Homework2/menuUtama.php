 <?php
 session_start();
 if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:formLogin.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="menuUtama.css">
</head>
<body>
<?php
include "header.php";
?>

<?php
include "menu.php";
?>

<div class="content">
  Selamat Datang,
  <span style="color: blue; font-weight: bold; font-size: 32px"><?php echo $_SESSION['username'];?></span>
</div>
</div>
  
</body>
</html>