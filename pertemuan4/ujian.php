<?php
$siswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

$totalNilai = 0;
foreach ($siswa as $nilai) {
    $totalNilai += $nilai;
}

$rataNilai = $totalNilai / count($siswa);

echo "Rata Nilai: $rataNilai<br>";

$diatasRata = [];
foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rataNilai) {
        $diatasRata[] = "$nama: $nilai";
    }
}

echo "Mahasiswa yang nilainya diatas rata-rata:<br>";
foreach ($diatasRata as $siswa) {
    echo "$siswa<br>";
}
?>