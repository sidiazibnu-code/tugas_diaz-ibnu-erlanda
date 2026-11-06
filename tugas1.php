<?php

class Persegi 
{
    public function luas(float $sisi): float 
    {
        return $sisi * $sisi;
    }
    public function keliling(float $sisi): float 
    {
        return 4 * $sisi;
    }
}



$persegi = new Persegi();

$sisi = 5;

$luas = $persegi->luas($sisi);
$keliling = $persegi->keliling($sisi);

echo "=== PERHITUNGAN PERSEGI ===\n";
echo "Panjang Sisi : " . $sisi . " cm\n";
echo "Luas         : " . $luas . " cm²\n";
echo "Keliling     : " . $keliling . " cm\n";

?>