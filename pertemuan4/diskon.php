<?php
$hargaProduk = 120000;
$persentaseDiskon = 20;

$jumlahDiskon = $hargaProduk * ($persentaseDiskon / 100);
$hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;

echo "Harga produk: Rp $hargaProduk<br>";
echo "Persentase diskon: $persentaseDiskon%<br>";
echo "Jumlah diskon: Rp $jumlahDiskon<br>";
echo "Harga setelah diskon: Rp $hargaSetelahDiskon";
?>