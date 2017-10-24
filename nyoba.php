<?php

	class manusia{

		public $mata = 2;
		public $hidung = 1;
		public $telinga = 2;
		public $tangan = 2;
	}

	class mobil{

		public $merk = "mercedes";
		public $harga = "500 juta";
		public $jalan = "maju";
		public $suara = "ngeng";

		public function jalannya()
		{
			return $this -> jalan;
		}
		public function suaranya()
		{
			for ($i=1; $i <4 ; $i++) { 
				echo $this -> suara;
			}
		}
	}

	class motor{

		public $merk = "honda";
		public $harga = "15 juta";
	}

	class hape{

		public $merk = "iphone";
		public $harga = "16 juta";
	}

	class makanan{

		public $makan = "burger";
		public $tempat = "KFC";
	}

	$manus = new manusia;
	$mom = new mobil;
	$moto = new motor;
	$hp = new hape;
	$makanan = new makanan;
	echo "manusia memiliki mata " . $manus -> mata . " hidung " . $manus -> hidung . " telinga " . $manus -> telinga . " dan tangan " . $manus -> tangan . "<br>";
	echo "merk mobil itu adalah " . $mom -> merk . " dengan harga " . $mom -> harga . "<br>";
	echo "merk motor itu adalah " . $moto -> merk . " dengan harga " . $moto -> harga . "<br>";
	echo "itu hp " . $hp -> merk . " yang harganya " . $hp -> harga . "<br>";
	echo "aku ingin makan " . $makanan -> makan . " di " . $makanan -> tempat . "<br>";
	echo $mom -> suaranya() . " suara mobil  " . "mobil jalannya " . $mom -> jalannya();
?>