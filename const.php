<?php
// define('NAMA', 'Alwi');
// echo NAMA;

// echo "<br>";
// const UMUR = 21;

// echo UMUR;

// class Coba
// {
//     const NAMA = 'Alwi';
// }

// echo Coba::NAMA;

class Coba
{
    public $kelas = __CLASS__;
};

$obj = new Coba();
echo $obj->kelas;
