<?php
 include"koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
	<link rel="stylesheet" type="text/css" href="css/style_menu.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style_tabel.css"> -->
</head>
<body>
<?php include "header_halaman.php";?>

<?php include "menu_halaman.php";?>

<div id="section">
<center>
<h3> Table Gaji </h3>

<table class="table" >
	<tr>
		<th>No</th>
		<th>Diterima Untuk</th>
		<th>Nominal</th>
		<th>Kebutuhan</th>
		<th>Status</th>
	</tr>
<?php
//select `data`.*, `nama_status` as `status` from `data` join `status` where `data`.`no`=`status`.`id_status`
// and  `status`.`nama_status`='Belum Lunas'
	$sql = "SELECT `data`.*, `nama_status` as `status` from `data` join `status` where `data`.`no`=`status`.`id_status`";

	$hasil = mysql_query($sql);
	while ($data = mysql_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $data['no']?></td>
		<td><?php echo $data['dari']?></td>
		<td><?php echo $data['nominal']?></td>
		<td><?php echo $data['kebutuhan']?></td>
		<td><?php echo $data['status']?></td>
	</tr>
	<?php
}
	?>
</table>

<?php include "footer_halaman.php";?>


</body>
</html>