<?php
$totalKursi = 45;
$kursiTerpakai = 28;

$kursiKosong = $totalKursi - $kursiTerpakai;
$persentasiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persentase kursi yang masih kosong: " . number_format($persentasiKosong, 2) . "%";
?>