<?php
class sekolah
{
	var $jurusan;
	var $kelas;
	var $kepala_sekolah;
	var $siswa;

	function jurusanku()
	{
		return "Jurusan Saya Adalah Rekayasa Perangkat Lunak <br>";
	}
	function kelassay()
	{
		return "Dengan Kelas XI RPL 1<br>";
	}
	function kepsek()
	{
		return "Kepala Sekolah SMK ASSALAAM BANDUNG adalah H.Luthfi Almanfaluthi<br>";
	}
	function siswas()
	{
		return "Jumlah Siswa SMK ASSALAAM BANDUNG berjumlah +- 500 siswa<br>";
	}
}
$sekolah = new sekolah();
echo $sekolah -> jurusanku();
echo $sekolah -> kelassay();
echo $sekolah -> kepsek();
echo $sekolah -> siswas();
?>