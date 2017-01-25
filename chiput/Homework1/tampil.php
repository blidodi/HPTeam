<?php
		require "Tugas1_bilangan.php";
	 	if (isset($_GET['terbilang'])) {
	 	?>
	 	<fieldset>
	 	<legend><h2>Kwitansi</h2></legend>
	 	<table>
			<tr>
				<td>Nomor</td>
				<td>:</td>
				<td><?php echo ($_GET['nomor']) ."</br>";?></td>
			</tr>
			<tr>
				<td>Sudah Diterima dari</td>
				<td>:</td>
				<td><?php echo ($_GET['nama']) ."</br>";?></td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td>:</td>
				<td><?php echo "Rp. ".$_GET['bilangan'] ."</br>"; ?></td>
			</tr>
			<tr>
				<td>Untuk Pembayaran</td>
				<td>:</td>
				<td><?php echo ($_GET['namalg']) ."</br>"; ?>
				</td>
			</tr>
			<tr>
				<td>Terbilang</td>
				<td>:</td>
				<td><?php echo Bilangan($_GET['bilangan']) ."rupiah"; ?></td>
			</tr>
	</table>
	</fieldset>
	 	<?php
	 	}
	 ?>