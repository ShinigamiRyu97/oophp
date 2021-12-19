<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

$produk1 = new Produk();
$produk1->judul = "naruto";
$produk1->penulis = "Masashi Khisimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 100000;

echo $produk1->getLabel();

echo "<br>";

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sony Entertaintment";
$produk2->harga = 100000;

echo $produk2->getLabel();
