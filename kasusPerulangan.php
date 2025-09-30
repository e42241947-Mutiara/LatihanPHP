<?php
echo "<h3>Total Belanja</h3>";

$hargaBarang = [10000, 25000, 15000, 30000];
$total = 0;

foreach ($hargaBarang as $harga) {
    echo "Harga barang : Rp " . $harga . "<br>";
    $total += $harga;
}

echo "<b>Total belanja: Rp " . $total . "</b>";
?>
