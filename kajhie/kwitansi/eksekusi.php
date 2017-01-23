<?php
include "fungsi.php";
if (isset($_POST['terbilang'])) {
?>
	<table>
		<tr>
			<td>No.</td>
			<td> : </td>
			<td><?php echo $_POST['no'] ?></td>
		</tr>

		<tr>
			<td>Diterima dari</td>
			<td> : </td>
			<td><?php echo $_POST['diterima'] ?></td>
		</tr>

		<tr>
			<td>Nominal</td>
			<td> : </td>
			<td><?php echo "Rp ".$_POST['nominal'] ?></td>
		</tr>

		<tr>
			<td>Untuk Pembayaran</td>
			<td> : </td>
			<td><?php echo $_POST['untuk'] ?></td>
		</tr>
		<tr>
			<td><?php echo fungsi1($_POST['nominal'])."rupiah"?></td>
		</tr>
	</table><?php
 } 
 ?>