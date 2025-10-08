<?php
// Membuat array 2 dimensi
$buah = [
    ["Apel", 15000, 10],   // [Nama, Harga, Stok]
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama adalah: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;

foreach ($buah as $item) {
    // $item[1] = harga, $item[2] = stok
    $subtotal = $item[1] * $item[2];
    $total += $subtotal;

    echo "Buah: " . $item[0] . " | Harga: " . $item[1] . " | Stok: " . $item[2] . " | Total Nilai: " . $subtotal . "<br>";
}

echo "<br><strong>Total nilai semua buah = Rp " . number_format($total, 0, ',', '.') . "</strong>";
?>
