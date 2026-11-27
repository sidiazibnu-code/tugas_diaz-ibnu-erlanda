<?php

        class RekeningBank {
            // Constant
            public const NAMA_BANK = "Bank Nusantara";
            private const BIAYA_ADMIN = 5000;

            public $pemilik;
            private $saldo;

            public function __construct($pemilik, $saldoAwal) {
                $this->pemilik = $pemilik;
                $this->saldo = $saldoAwal;
            }

            // Setter untuk menambah saldo dengan validasi
            public function setorTunai($jumlah) {
                if ($jumlah > 0) {
                    $this->saldo += $jumlah;
                    echo "Berhasil setor Rp " . number_format($jumlah, 0, ',', '.') . "\n";
                } else {
                    echo "Jumlah setoran tidak valid!\n";
                }
            }

            public function tarikTunai($jumlah) {
                $totalPenarikan = $jumlah + self::BIAYA_ADMIN;
                if ($totalPenarikan <= $this->saldo) {
                    $this->saldo -= $totalPenarikan;
                    echo "Berhasil tarik Rp " . number_format($jumlah, 0, ',', '.') . " (Admin: Rp " . self::BIAYA_ADMIN . ")\n";
                } else {
                    echo "Saldo tidak mencukupi!\n";
                }
            }

            public function getSaldo() {
                return $this->saldo;
            }
        }

echo "Hasil Encapsulation & Constant \n";
echo "Layanan: " . RekeningBank::NAMA_BANK . "\n";

    $rekening = new RekeningBank("Diaz Ibnu Erlanda", 100000);
    echo "Pemilik: {$rekening->pemilik}\n";
    echo "Saldo Awal: Rp " . number_format($rekening->getSaldo(), 0, ',', '.') . "\n";

$rekening->setorTunai(50000);
$rekening->tarikTunai(30000);

    echo "Saldo Akhir: Rp " . number_format($rekening->getSaldo(), 0, ',', '.') . "\n";