<?php
class Produk {
    private $nama;
    private $harga;

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
echo "<br>";
echo $produk2->getProduk();
?>