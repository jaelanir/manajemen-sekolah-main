<?php
// Simulasi data untuk chart perkembangan sekolah dengan pola yang menarik dan deskripsi tambahan
$chart_data = [
    'Januari' => 50,
    'Februari' => 60,
    'Maret' => 75,
    'April' => 90,
    'Mei' => 110,
    'Juni' => 130,
    'Juli' => 150,
    'Agustus' => 140,
    'September' => 160,
    'Oktober' => 180,
    'November' => 170,
    'Desember' => 200,
];

// Metadata tambahan untuk membuat data lebih deskriptif
$chart_metadata = [
    'title' => 'Grafik Perkembangan Sekolah Tahunan',
    'description' => 'Grafik ini menunjukkan tren perkembangan sekolah setiap bulan selama satu tahun.',
    'unit' => 'Jumlah Siswa',
];

// Output data sebagai array yang menggabungkan metadata dan data grafik
$chart_output = [
    'metadata' => $chart_metadata,
    'data' => $chart_data,
];

// Mengubah output menjadi JSON dengan format yang mudah dibaca
header('Content-Type: application/json');
echo json_encode($chart_output, JSON_PRETTY_PRINT);
?>