<?php

for ($i = 0; $i < 5; $i++) {
 for ($j = 5; $j > $i; $j--) {
 echo '&nbsp;';
 }
 for ($k = 0; $k <= $i; $k++) {
 echo '*';
 }
 echo '<br/>';
 }

?>