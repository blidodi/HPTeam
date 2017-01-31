<?php

include "header.php";
include "aritmatika.php"

?>

<?php

$table = new Table();
$data = array("Kucing","Pinguin","Kupu-kupu","Panda");

echo $table->header();
echo $table->body($data);
echo $table->footer();

echo "<br>";

echo "OPERASI ARITMATIKA" . "<br>" ."<br>";

$operasi1 = new Aritmatika();
$operasi2 = new Aritmatika();
$operasi3 = new Aritmatika();
$operasi4 = new Aritmatika();

$operasi1->set_tambah(2,2);
$operasi2->set_kurang(4,2);
$operasi3->set_kali(3,2);
$operasi4->set_bagi(6,2);


echo $operasi1->get_tambah() ."<br>";
echo $operasi2->get_kurang()."<br>";
echo $operasi3->get_kali()."<br>";
echo $operasi4->get_bagi();

?>