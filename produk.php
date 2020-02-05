<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function sayHello()
    {
        return "Hello World!";
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
//var_dump($produk3);
echo "Komik: $produk3->judul, $produk3->penulis";
echo "<br>";
echo $produk3->sayHello();
