<?php
$poin = 400; 

$totalSkor = $poin;
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $totalSkor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>