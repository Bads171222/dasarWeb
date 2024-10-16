<?php
$nilaiSiswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);


sort($nilaiSiswa);


$nilaiSiswa = array_slice($nilaiSiswa, 2, 6);


$totalNilai = (array_sum($nilaiSiswa)/6);

echo "Total nilai yang akan digunakan: $totalNilai";
?>