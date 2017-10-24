<?php

require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan -> set_penjumlahan(2,11);
echo "Penjumlahan dari bilangan 2 dan 11 adalah " .$penjumlahan -> get_penjumlahan();

?>