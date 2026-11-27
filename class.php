<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function perkenalan() {
        return "Halo, my name is {$this->nama} (NIM: {$this->nim}) from the {$this->jurusan} department.\n";
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Diaz Ibnu Erlanda";
$mhs1->nim = "251160281";
$mhs1->jurusan = "Teknik Informatika";

$mhs2 = new Mahasiswa();
$mhs2->nama = "Budi Santoso";
$mhs2->nim = "2024002";
$mhs2->jurusan = "Sistem Informasi";

echo "Result Class & Object \n";
echo $mhs1->perkenalan();
echo $mhs2->perkenalan();