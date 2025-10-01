<!DOCTYPE html>
<html>
<head>
    <title>Tugas Fungsi PHP</title>
</head>
<body>
    <h2>Tugas Fungsi PHP</h2>

    <!-- Form Input Bilangan -->
    <form method="post">
        <h3>1. Menentukan Bilangan Terbesar</h3>
        Bilangan 1: <input type="number" name="bil1" required><br><br>
        Bilangan 2: <input type="number" name="bil2" required><br><br>
        <input type="submit" value="Bandingkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];

        // Fungsi untuk menentukan bilangan terbesar
        function terbesar($a, $b) {
            if ($a > $b) {
                return $a;
            } elseif ($b > $a) {
                return $b;
            } else {
                return "Keduanya sama besar ($a)";
            }
        }

        echo "<h4>Hasil Perbandingan:</h4>";
        echo "Bilangan pertama: $bil1<br>";
        echo "Bilangan kedua: $bil2<br>";
        echo "Bilangan terbesar adalah: " . terbesar($bil1, $bil2) . "<br><br>";
    }

    // 2. Menampilkan tanggal sekarang dengan getdate()
    echo "<h3>2. Menampilkan Tanggal dengan getdate()</h3>";
    $sekarang = getdate();
    echo "Sekarang tanggal: " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"] . "<br><br>";

    // 3. Menampilkan tanggal sekarang dengan date()
    echo "<h3>3. Menampilkan Tanggal dengan fungsi date()</h3>";
    echo "Sekarang tanggal: " . date('d-F-Y');
    ?>
</body>
</html>
