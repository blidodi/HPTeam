<?php

$mobil = array("Buggati", "Bentley", "Roll Royce", "Cadillac", "VW", "Porche");

$mobil = urlencode(serialize($mobil));
?>
<a href="array-diterima.php?kendaraan=<?php echo $mobil; ?>">klik disini</a>