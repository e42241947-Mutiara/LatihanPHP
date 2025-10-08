<?php
// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90],
    ["Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88],
    ["Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95]
];

// Cetak semua data siswa menggunakan looping
echo "<h3>Daftar Nilai Siswa:</h3>";
foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . "<br>";
    echo "Nilai Matematika: " . $data["Matematika"] . "<br>";
    echo "Nilai Bahasa: " . $data["Bahasa"] . "<br><br>";
}

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1]["Nama"] . ") adalah: " . $siswa[1]["Bahasa"] . "<br><br>";
?>
