<?php
// Membuat array 2 dimensi 3x3 berisi angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9); // rand() menghasilkan angka acak 1–9
    }
}

// Cetak array dalam bentuk matriks (tabel HTML)
echo "<h3>Matriks 3x3:</h3>";
echo "<table border='0' cellpadding='5' cellspacing='0'>";

$total = 0; // variabel untuk menjumlahkan semua elemen

for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td align='center'>" . $matriks[$i][$j] . "</td>";
        $total += $matriks[$i][$j]; // tambahkan setiap elemen ke total
    }
    echo "</tr>";
}

echo "</table><br>";

// Cetak jumlah total semua elemen
echo "<strong>Jumlah total semua elemen = $total</strong>";
?>