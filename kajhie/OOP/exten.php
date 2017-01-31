<?php
include "aritmatika.php";
include "body.php";

// class Panggil extends Aritmatika
// {
	
// 	function __construct(argument)
// 	{
// 		# code...
// 	}
// }
	$pesan = new Variabel();

	$pesan -> set_name(5,4);

	echo $pesan->a." ".$pesan->tanda."".$pesan->b."=".$pesan->get_tambah();

	
	$table = new Tabel();

	$data = array("Binatang"=>"kucing","anjing","beruang","rusa");

	echo $table->header();
	echo $table->body($data);
	echo $table->footer();
	?>