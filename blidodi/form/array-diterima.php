<?php

$mobil = unserialize(urldecode($_GET['kendaraan']));

for($i=0; $i < count($mobil); $i++) {
	echo $mobil[$i]."<br/>";
}