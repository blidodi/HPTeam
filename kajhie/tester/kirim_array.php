<?php
$mobil = array("Cold", "Bemo", "Elsapek");

$mobil = urlencode(serialize($mobil));
?>
<a href="terima_array.php?kendaraan=<?php echo $mobil; ?>">klik</a>