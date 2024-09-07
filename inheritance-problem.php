<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

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
    public function sayHello()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfo()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->sayHello()} (Rp. {$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman} halaman.";
        } else if ($this->tipe == "game") {
            $str .= " ~ {$this->waktuMain} jam.";
        }

        return $str;
    }
}

class cetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->sayHello()} {(Rp. $produk->harga)}";
        return $str;
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

$produk1 = new Produk("naruto", "masashi kishimoto", "shonen jump", 30000, 100, 0, "komik");
$produk2 = new Produk("uncharted", "neil druckman", "sony computer", 250000, 0, 50, "game");

// echo "Komik : " . $produk1->sayHello();
// echo "<br>";
// echo "Game : " . $produk2->sayHello();
// echo "<br>";

// $infoProduk1 = new cetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
