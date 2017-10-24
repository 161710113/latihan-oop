<?php
require_once "constract.php";
$data = new data ('Haikal Maulana Firdaus','Bandung','XI RPL 1','Ga Jomblo');
echo "Namanya..." . $data->get_nama()."<br>";
echo "Tempat Lahirnya..." . $data->get_tempat()."<br>";
echo "Kelasnya..." . $data->get_kelas()."<br>";
echo "Statusnya..." . $data->get_status()."<br>";
?>