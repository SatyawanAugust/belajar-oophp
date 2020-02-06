<?php

class Produk
{
    // membuat property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    // membuat constructor dan mengisi nilai default property
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // membuat method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // membuat method getInfoProduk
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

// membuat class komik yang merupakan child (mewarisi) dari class Produk
class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        //$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

// membuat class game yang merupakan child (mewarisi) dari class Produk
class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
        //$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
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
$produk1 = new Komik("Wiro Sableng", "Ken Ken", "Kompas Gramedia", 55000, 150, 0);
$produk2 = new Game("Mario Bros", "Walt Disney", "Nintendo Corp", 150000, 0, 50);

// menampilkan hasil output
echo "<h2>Komik</h2>";
echo "<ol>";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>" . $produk1->getInfoProduk() . "</li>";
}
echo "</ol>";
echo "<hr>";

echo "<h2>Game</h2>";
echo "<ol><li>";
echo $produk2->getInfoProduk();
echo "</li></ol>";
