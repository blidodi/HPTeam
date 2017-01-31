<?php

	include "table.php";
echo $table->header();
echo $table->body($data);
echo $table->footer();

	include "aritmatika.php";
echo $tambah->hasil();	

?>