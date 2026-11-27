<?php

        class KoneksiDatabase {
            private $host;
            public function __construct($host) {
                $this->host = $host;
                echo "[CONSTRUCT] Membuka koneksi ke server database: {$this->host}...\n";
            }

            public function query($sql) {
                echo "[PROSES] Menjalankan query: '{$sql}'\n";
            }

            public function __destruct() {
                echo "[DESTRUCT] Menutup koneksi dari server database: {$this->host}.\n";
            }
        }

    echo "Hasil Constructor & Destructor \n";
    $db = new KoneksiDatabase("localhost:3306");
        $db->query("SELECT * FROM users");
        echo "Skrip hampir selesai...\n";