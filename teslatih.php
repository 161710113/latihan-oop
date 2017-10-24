<?php

require_once 'testpenjum.php';

$operasi = new operasi;
$operasi -> set_bilangan(21,3);
echo "=========================";
echo "<br> Perhitungan bilangan 21 dengan 3";
echo "<br>=========================";
echo "<br>Penjumlahan = " .$operasi -> get_penjumlahan();
echo "<br>Pengurangan = " .$operasi -> get_pengurangan();
echo "<br>Perkalian = " .$operasi -> get_perkalian();
echo "<br>Pembagian = " .$operasi -> get_pembagian();
?>
