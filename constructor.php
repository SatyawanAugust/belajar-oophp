<?php

class Produk
{
    // membuat property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // membuat constructor dan mengisi nilai default property
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // membuat method
    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

// membuat instance dan mengisi ulang nilai propertinya
$produk1 = new Produk("Wiro Sableng", "Ken Ken", "Kompas Gramedia", 55000);
$produk2 = new Produk("Mario Bros", "Walt Disney", "Nintendo Corp", 150000);

// membuat instance, namun hanya mengisi sebagian nilai properti
$produk3 = new Produk("Dragon Ball")

// menampilkan hasil output
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);