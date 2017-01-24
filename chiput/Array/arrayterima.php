<?php
$make_up = unserialize(urldecode($_GET['kebutuhan']));

for ($i=0; $i < count($make_up); $i++) { 
	echo $make_up[$i]."</br>";
}

?>