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
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    // membuat object menjadi tipe data, sehingga function cetak hanya akan menerima object dari class Produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// membuat instance dan mengisi ulang nilai propertinya
$produk1 = new Produk("Wiro Sableng", "Ken Ken", "Kompas Gramedia", 55000);
$produk2 = new Produk("Mario Bros", "Walt Disney", "Nintendo Corp", 150000);

// menampilkan hasil output
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
