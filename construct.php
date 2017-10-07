<?php 
class Binatang{
	public $nama;
    private $warna;
	protected $kaki;
	
	public function __construct(){
		$this->nama = 'Luwak';
		$this->warna = 'Hijau';
		$this->kaki = 2 ;	
	}
	
	public function getNama(){
		return $this->nama;
	}

	public function getWarna(){
		return $this->warna;
	}

	public function getKaki(){
		return $this->kaki;
	}
}

$luwak = new Binatang; 
echo 'Seekor' .$luwak->getNama(). 'Warna' .$luwak->getWarna(). 'Kaki' .$luwak->getKaki();
echo "<br/>";
var_dump($luwak);

/*
output =
SeekorLuwakWarnaHijauKaki2
object(Binatang)#1 (3) { ["nama"]=> string(5) "Luwak" ["warna":"Binatang":private]=> string(5) "Hijau" ["kaki":protected]=> int(2) }
*/

/*
Construct dijalankan saat pertama kali Object di inisialisasi, tujuannya bisa untuk memberi nilai awal pada properties dan mempersingkat penulisan kode dengan meniadakan Setter function.
*/