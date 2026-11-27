<?php
        class Kendaraan {
            protected $merk;
            protected $tahun;

            public function __construct($merk, $tahun) {
                $this->merk = $merk;
                $this->tahun = $tahun;
            }

            public function infoKendaraan() {
                return "Merk: {$this->merk} ({$this->tahun})";
            }
        }

        class Mobil extends Kendaraan {
            private $jumlahPintu;

            public function __construct($merk, $tahun, $jumlahPintu) {
                parent::__construct($merk, $tahun);
                $this->jumlahPintu = $jumlahPintu;
            }

            public function infoLengkap() {
                return "[MOBIL] " . $this->infoKendaraan() . " | Jumlah Pintu: {$this->jumlahPintu}\n";
            }
        }

        class Motor extends Kendaraan {
            private $jenisMesin;

            public function __construct($merk, $tahun, $jenisMesin) {
                parent::__construct($merk, $tahun);
                $this->jenisMesin = $jenisMesin;
            }

            public function infoLengkap() {
                return "[MOTOR] " . $this->infoKendaraan() . " | Jenis Mesin: {$this->jenisMesin}\n";
            }
        }

echo "hasil Inheritance \n";
$mobil = new Mobil("Toyota Avanza", 2023, 4);
$motor = new Motor("Honda Vario", 2024, "160cc");

        echo $mobil->infoLengkap();
        echo $motor->infoLengkap();