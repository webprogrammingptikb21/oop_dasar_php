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
    public function sayHello()
    {
        return "$this->penulis, $this->penerbit";
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

$produk1 = new Produk("naruto", "masashi kishimoto", "shonen jump", 30000);
$produk2 = new Produk("uncharted", "neil druckman", "sony computer", 250000);

echo "Komik : " . $produk1->sayHello();
echo "<br>";
echo "Game : " . $produk2->sayHello();
echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
