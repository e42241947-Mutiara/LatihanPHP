<?php
class Buku {
private $dataBuku = [
["id" => 1, "judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahunTerbit" => 2005],
["id" => 2, "judul" => "AKU","pengarang" => "Chairil Anwar", "tahunTerbit" => 1949],
["id" => 3, "judul" => "Laut Bercerita", "pengarang" => "Leila S. Chudori", "tahunTerbit" => 2017],
["id" => 4, "judul" => "Hujan", "pengarang" => "Tereliye", "tahunTerbit" => 2016],
["id" => 5, "judul" => "Harry Potter and the Deathly Hallows", "pengarang" => "J.K. Rowling", "tahunTerbit" => 2007],
];
// Mengambil semua data buku
public function getAllProduk() {
return $this->dataBuku;
}
}