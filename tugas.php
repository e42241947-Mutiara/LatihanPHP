<?php
$string1='Ini adalah string sederhana';
$string2='Ini adalah string yang bisa memiliki beberapa baris';
$string3='Dia berkata: "I\'ll be back"';
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5='Kalimat ini tidak akan pindah ke: \n baris baru';
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

$tugas1 = "90";
$tugas2 = "80";

$hasil = $tugas1 . $tugas2;

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";

echo "Hasil gabungan tugas 1 dan tugas 2 =" . $hasil;
?>