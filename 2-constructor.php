<?php
class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }
}

$produk1 = new Produk("Sarimi", 1900);
$produk2 = new Produk("Indomie", 2000);
echo $produk1->nama;
echo "<br>";
echo $produk1->harga;
echo "<br>";
echo $produk2->nama;
echo "<br>";
echo $produk2->harga;
?>