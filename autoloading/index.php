<?php

require_once 'App/init.php';

$produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);
$produk2 = new Game("uncharted", "neil druckman", "sony computer", 250000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->addProduk($produk1);
$cetakProduk->addProduk($produk2);
echo $cetakProduk->cetak();
