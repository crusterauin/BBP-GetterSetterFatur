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
}

$produk1 = new Produk("Sarimi", 1900);
$produk2 = new Produk("Indomie", 2000);

echo $produk1->getProduk();
echo $produk2->getProduk();

$produk1->nama = "Gaga";
$produk1->harga = 1500;

$produk2->nama = "Supermi";
$produk2->harga = 2500;
?>