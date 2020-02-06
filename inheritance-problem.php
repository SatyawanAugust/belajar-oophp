<?php

class Produk
{
    // membuat property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    // membuat constructor dan mengisi nilai default property
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // membuat method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // membuat method getInfoLengkap
    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
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
$produk1 = new Produk("Wiro Sableng", "Ken Ken", "Kompas Gramedia", 55000, 150, 0, "Komik");
$produk2 = new Produk("Mario Bros", "Walt Disney", "Nintendo Corp", 150000, 0, 50, "Game");

// menampilkan hasil output
// Komik : Wiro Sableng | Ken Ken, Kompas Gramedia (Rp. 55000) - 150 Halaman.
// Game : Mario Bros | Walt Disney, Nintendo Corp (Rp. 150.000) - 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
