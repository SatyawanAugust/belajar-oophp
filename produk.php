<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

/* $produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Dragon Ball";
$produk2->tambahProperty = "Hahahihi";
var_dump($produk2); */

$produk3 = new Produk();
$produk3->judul = "Wiro Sableng";
$produk3->penulis = "Ken Ken";
$produk3->penerbit = "Kompas Gramedia";
$produk3->harga = 55000;

$produk4 = new Produk();
$produk4->judul = "Mario Bros";
$produk4->penulis = "Walt Disney";
$produk4->penerbit = "Nintendo Corp";
$produk4->harga = 150000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
