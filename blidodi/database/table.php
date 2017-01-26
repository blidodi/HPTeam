<?php
	include "config.php";

	$sql = "SELECT `data`.*, `status`.`nama` as `status` FROM `data` JOIN `status` ON `data`.`ID`=`status`.`id_data` ORDER BY `ID` DESC";

	$data = mysql_query($sql);
	$i = 1;
	if (mysql_num_rows($data) > 0) {
		while($row = mysql_fetch_array($data)) {
			echo $i." | ".$row['nama']." | ".$row['nominal']." | ".$row['kebutuhan']." | ".$row['status']." |<a href=\"ubah.php?id=".$row['ID']."\">Ubah</a> <a href=\"hapus.php?id=".$row['ID']."\">Hapus</a> <br/>";
			$i++;
		}
		mysql_close();
	} else {
		echo "Tidak ada data.";
	}