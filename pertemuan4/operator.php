<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari A tambah B : $hasilTambah <br>";
echo "Hasil dari A kurang B : $hasilKurang <br>";
echo "Hasil dari A dikali B : $hasilKali <br>";
echo "Hasil dari A dibagi B : $hasilBagi <br>";
echo "Hasil dari sisa bagi A%B : $sisaBagi <br>";
echo "Hasil dari A pangkat B : $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil dari Perbadingan antara A dan B:<br>";

echo "A sama dengan B : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "A tidak sama dengan B : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "A lebih kecil dari B : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "A lebih besar dari B : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "A lebih kecil atau sama dengan B : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "A lebih besar atau sama dengan B : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a&&$b;
$hasilOr = $a || $b;
$hasilNotA= !$a;
$hasilNotB= !$b;

echo "Hasil dari Operasi Logika:<br>";

echo "A AND B : " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "A OR B : " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "NOT A : " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "NOT B : " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "Nilai awal A: $a <br>";
echo "Nilai awal B: $b <br>";

$a += $b;
echo "A += B: $a <br>";

$a -= $b;
echo "A -= B: $a <br>";

$a *= $b;
echo "A \*= B: $a <br>";

$a /= $b;
echo "A /= B: $a <br>";

$a %= $b;
echo "A %= B: $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik= $a !==$b;

echo "A identik dengan B : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "A tidak identik dengan B : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

?>
