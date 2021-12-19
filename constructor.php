<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

$produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen Jump", 100000);

echo $produk1->getLabel();

echo "<br>";

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Entertainment", 250000);

echo $produk2->getLabel();
