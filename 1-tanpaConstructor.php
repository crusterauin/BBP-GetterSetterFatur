<?php
class Produk {
    public $nama;
    public $harga;
    }

    $produk1 = new Produk();
    $produk1->nama = "Sarimi";
    $produk1->harga = 1900;

    $produk2 = new Produk();
    $produk2->nama = "Indomie";
    $produk2->harga = 2000;

    echo $produk1->nama;
    echo "<br>";
    echo $produk1->harga;
    echo "<br>";
    echo $produk2->nama;
    echo "<br>";
    echo $produk2->harga;
?>