<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
}

$produk1 = new Produk();
$produk1->judul = "naruto";
var_dump($produk1);
