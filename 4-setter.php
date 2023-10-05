<?php
class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getProduk() {
        return "$this->nama , $this->harga";
    }

    public function setNama($namaBaru) {
        $this->nama = $namaBaru;
    }

    public function setHarga($hargaBaru) {
        $this->harga = $hargaBaru;
    }
}

$produk1 = new Produk("Sarimi", 1900);
$produk2 = new Produk("Indomie", 2000);

echo $produk1->getProduk();
echo "<br>";
echo $produk2->getProduk();

$produk1->setNama("Gaga");
echo "<br>";
echo $produk1->getProduk();
?>