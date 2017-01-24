<?php

$mobil = array("Buggati", "Bentley", "Roll Royce", "Cadillac", "VW", "Porche");
$mobil = urlencode(serialize($mobil));

?>

<a href="array-terima.php?kendaraan=<?php echo $mobil; ?>">Klik disini</a>