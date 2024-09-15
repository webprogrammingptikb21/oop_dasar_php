<?php
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // Implementasi method abstrak getInfo()
    public function getInfo()
    {
        $str = "Komik: " . $this->getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->sayHello()} (Rp. {$this->harga})";
        return $str;
    }
}
