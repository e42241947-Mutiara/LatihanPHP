<?php
// Membuat array asosiatif multidimensi
$produk = [
    [
        "nama" => "Laptop ASUS VivoBook",
        "kategori" => "Elektronik",
        "harga" => 8500000,
        "rating" => 4.7
    ],
    [
        "nama" => "Sneakers Nike Air",
        "kategori" => "Fashion",
        "harga" => 1250000,
        "rating" => 4.5
    ],
    [
        "nama" => "Smartphone Samsung A55",
        "kategori" => "Elektronik",
        "harga" => 9500000,
        "rating" => 4.8
    ]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0]; // anggap produk pertama yang tertinggi dulu

foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

// Cetak hasil
echo "<h3>Produk dengan harga tertinggi:</h3>";
echo "Nama Produk: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>