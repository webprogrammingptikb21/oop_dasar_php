<?php

abstract class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        return $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }

    public function setHarga($harga)
    {
        return $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function sayHello()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->sayHello()} (Rp. {$this->harga})";
        return $str;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }
}

class Komik extends Produk
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
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Implementasi method abstrak getInfo() dari Produk
    public function getInfo()
    {
        $str = "Game: {$this->getJudul()} | {$this->sayHello()} (Rp. {$this->getHarga()}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}




class cetakInfoProduk
{
    public $daftarProduk = [];

    public function addProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $v) {
            $str .= "- {$v->getInfo()} <br>";
        }
        return $str;
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

$produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);
$produk2 = new Game("uncharted", "neil druckman", "sony computer", 250000, 50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->addProduk($produk1);
$cetakProduk->addProduk($produk2);
echo $cetakProduk->cetak();
