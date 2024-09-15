<?php
class Game extends Produk implements InfoProduk
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
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->sayHello()} (Rp. {$this->harga})";
        return $str;
    }
}
