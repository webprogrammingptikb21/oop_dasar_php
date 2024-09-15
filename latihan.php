<?php

class Mahasiswa
{
    public $nama,
        $nim,
        $kelas;

    public function __construct($nama = "nama", $nim = "nim", $kelas = "kelas")
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;
    }

    public function getInfo()
    {
        return "Nama : {$this->nama}, NIM : {$this->nim}, Kelas : {$this->kelas}";
    }
};

$mhs = new Mahasiswa("Muhammad Alwi", "210209501011", "PTIK B");
echo $mhs->getInfo();
