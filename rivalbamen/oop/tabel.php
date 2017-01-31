<?php
class Tabel
{
    var $var1, $var2, $kolom, $data;
    function header() 
    {
        return "<table border=\"1\"><tr>";
    } 
    function body($nilai1, $nilai2)
    {
        $this->var1 = $nilai1;
        $this->var2 = $nilai2;
        return "<td>$nilai1</td><td>$nilai2</td>";
    } 
    function binatang($data)
    {
        $this->kolom = "";
        $this->data = $data;

        for($i=0; $i < count($this->data); $i++) {
            $this->kolom .= "<td>".$this->data[$i]."</td>";
        }
        return $this->kolom;
    }
    function footer()
    {
        return "</tr></table>";
    }
} 
$tabel = new Tabel();
$data = array ("Kucing", "Ayam", "Burung", "Kambing");
//echo $tabel->header();
//echo $tabel->binatang($data);
//echo $tabel->footer();
?>