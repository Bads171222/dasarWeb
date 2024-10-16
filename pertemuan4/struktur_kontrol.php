<?php
$nilauNumerik = 92;


if ($nilauNumerik >=92 && $nilauNumerik <=100) {
    echo "Nilai Huruf: A <br>";
} elseif ($nilauNumerik >= 80 && $nilauNumerik <90) {
    echo "Nilai Huruf: B <br>";
} elseif ($nilauNumerik >= 70 && $nilauNumerik < 80) {
    echo "Nilai Huruf: C <br>";
} elseif ($nilauNumerik<70) {
    echo "Nilai Huruf: D <br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni<$jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapat target 500 kilometer <br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahTanaman = 10;
$jumlahBuah = 0;

for ($i =1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan*$buahTanaman);
}

echo "Jumlah Buah Yang Akan Dipanen adalah: $jumlahBuah  <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor +=  $skor;
}

echo "Total skor ujian adalah: $totalSkor";

$nilaiMahasiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiMahasiswa as $nilai) {
    if ($nilai<60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
    continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
?>