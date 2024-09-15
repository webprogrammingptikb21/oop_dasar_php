<?php
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
