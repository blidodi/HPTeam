<?php
    class Aritmatika 
    {
        var $bil1, $bil2, $operasi;
        function __construct($bil1, $bil2)
        {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2; 
        }

        function hasil()
        {
            return $this->hasil;
        }

        function tambah() 
        {
            $this->hasil = $this->bil1 + $this->bil2;
            $this->operasi = "+";
        }

        function kurang() 
        {
            $this->hasil = $this->bil1 - $this->bil2;
            $this->operasi = "-";
        }

        function kali() 
        {
            $this->hasil = $this->bil1 * $this->bil2;
            $this->operasi = "x";
        }

        function bagi() 
        {
            $this->hasil = $this->bil1 / $this->bil2;
            $this->operasi = ":";
        }
    }
	$aritmatik = new Aritmatika(10, 5);
    $aritmatik->tambah();
    //echo $aritmatik->bil1.$aritmatik->operasi.$aritmatik->bil2."=".$aritmatik->hasil();

?>