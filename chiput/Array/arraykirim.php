<?php

$make_up = array("Bedak", "Foundation", "Lipstik", "BlashOn", "PensilAlis");

$make_up = urlencode(serialize($make_up));

?>

<a href="arrayterima.php?kebutuhan=<?php echo $make_up;?>">Pilih Disini</a>