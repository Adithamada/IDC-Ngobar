<?php

class BangunRuang
{
    // Fungsi untuk menghitung luas persegi panjang
    public function luasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    // Fungsi untuk menghitung luas segitiga
    public function luasSegitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }

    // Fungsi untuk menghitung keliling persegi
    public function kelilingPersegi($sisi)
    {
        return 4 * $sisi;
    }

    // Fungsi untuk menghitung luas lingkaran
    public function luasLingkaran($radius)
    {
        return pi() * pow($radius, 2);
    }

    // Fungsi untuk menghitung keliling persegi panjang
    public function kelilingPersegiPanjang($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }

    // Fungsi untuk menghitung keliling lingkaran
    public function kelilingLingkaran($radius)
    {
        return 2 * pi() * $radius;
    }
}


$bangunRuang = new BangunRuang();

echo "Result : <br>";
// Luas persegi panjang
echo "Luas Persegi Panjang: " . $bangunRuang->luasPersegiPanjang(5, 10) . " m&sup2<br>";

// Luas segitiga
echo "Luas Segitiga: " . $bangunRuang->luasSegitiga(4, 8) . " m&sup2<br>";

// Keliling persegi
echo "Keliling Persegi: " . $bangunRuang->kelilingPersegi(6) . " m<br>";

// Luas lingkaran
echo "Luas Lingkaran: " . $bangunRuang->luasLingkaran(7) . " m&sup2<br>";

// Keliling persegi panjang
echo "Keliling Persegi Panjang: " . $bangunRuang->kelilingPersegiPanjang(5, 10) . " m<br>";

// Keliling lingkaran
echo "Keliling Lingkaran: " . $bangunRuang->kelilingLingkaran(7) . " m<br>";
