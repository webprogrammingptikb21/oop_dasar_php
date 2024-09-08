<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function sayHello()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->sayHello()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit,  $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoKomik()
    {
        $str = "Komik : {$this->getInfo()} - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfo()
    {
        $str = "Game : {$this->judul} | {$this->sayHello()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);
$produk2 = new Game("uncharted", "neil druckman", "sony computer", 250000, 50);

// echo "Komik : " . $produk1->sayHello();
// echo "<br>";
// echo "Game : " . $produk2->sayHello();
// echo "<br>";

// $infoProduk1 = new cetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfo();
