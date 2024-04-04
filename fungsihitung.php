<?php
// Fungsi menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

// Fungsi menghitung keliling trapesium sama kaki
function kelilingTrapesium($a, $b, $tinggi) {
    $keliling = 2 * ($a + $b) + $tinggi;
    return $keliling;
}

// Fungsi menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// Memanggil fungsi hitung luas persegi panjang
$panjangPersegiPanjang = 5;
$lebarPersegiPanjang = 3;
echo "<h2>Hitung Luas Persegi Panjang</h2>";
echo "Panjang: $panjangPersegiPanjang <br>Lebar: $lebarPersegiPanjang <br>maka Luas Persegi Panjang= " . luasPersegiPanjang($panjangPersegiPanjang, $lebarPersegiPanjang) . "<br>";
echo "<hr>";

// Memanggil fungsi hitung Keliling Trapesium
$aTrapesium = 4;
$bTrapesium = 6;
$tinggiTrapesium = 5;
echo "<h2>Hitung Keliling Trapesium</h2>";
echo "Sisi sejajar: $aTrapesium <br>Sisi lainnya: $bTrapesium <br> Tinggi: $tinggiTrapesium <br>maka Keliling Trapesium= " . kelilingTrapesium($aTrapesium, $bTrapesium, $tinggiTrapesium) . "<br>";
echo "<hr>";

// Memanggil fungsi hitung luas Segitiga
$alasSegitiga = 8;
$tinggiSegitiga = 6;
echo "<h2>Hitung Luas Segitiga</h2>";
echo "Alas: $alasSegitiga <br> Tinggi: $tinggiSegitiga <br>maka Luas Segitiga= " . luasSegitiga($alasSegitiga, $tinggiSegitiga) . "<br>";
?>
