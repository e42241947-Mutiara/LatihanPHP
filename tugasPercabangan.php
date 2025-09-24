<?php
// cek step
$step = isset($_POST['step']) ? $_POST['step'] : 1;

echo "<h1>Kasus Penggunaan Percabangan</h1>";

if ($step == 1) {
    // ---------------------- 1. METODE PEMBAYARAN ----------------------
    echo "<h2>1. Metode Pembayaran</h2>";
    $metode = "Transfer Bank";

    if ($metode == "Transfer Bank") {
        echo "Silakan transfer ke rekening BCA 123456789";
    } elseif ($metode == "COD") {
        echo "Bayar langsung saat barang diterima";
    } elseif ($metode == "E-Wallet") {
        echo "Gunakan OVO/DANA/Gopay untuk pembayaran";
    } else {
        echo "Metode pembayaran tidak valid";
    }
    echo "<hr>";
    echo '<form method="post">
            <input type="hidden" name="step" value="2">
            <input type="submit" value="Lanjut ke Kasus 2">
          </form>';

} elseif ($step == 2) {
    // ---------------------- 2. ONGKIR ----------------------
    echo "<h2>2. Cek Ongkir</h2>";
    $kota = "Surabaya";

    if ($kota == "Jakarta") {
        echo "Ongkir Rp 10.000";
    } elseif ($kota == "Surabaya") {
        echo "Ongkir Rp 15.000";
    } elseif ($kota == "Bandung") {
        echo "Ongkir Rp 12.000";
    } else {
        echo "Ongkir Rp 20.000 (Luar Jawa)";
    }
    echo "<hr>";
    echo '<form method="post">
            <input type="hidden" name="step" value="3">
            <input type="submit" value="Lanjut ke Kasus 3">
          </form>';

} elseif ($step == 3) {
    // ---------------------- 3. CUACA ----------------------
    echo "<h2>3. Cek Cuaca</h2>";
    $cuaca = "Hujan";

    if ($cuaca == "Cerah") {
        echo "Bawa kacamata hitam 😎";
    } elseif ($cuaca == "Mendung") {
        echo "Mungkin hujan, siapkan payung ☁️";
    } elseif ($cuaca == "Hujan") {
        echo "Bawa jas hujan atau payung 🌧️";
    } else {
        echo "Cuaca tidak diketahui";
    }
    echo "<hr>";
    echo '<form method="post">
            <input type="hidden" name="step" value="4">
            <input type="submit" value="Lanjut ke Kasus 4">
          </form>';

} elseif ($step == 4) {
    // ---------------------- 4. LEVEL MEMBER ----------------------
    echo "<h2>4. Level Member</h2>";
    $member = "Gold";

    if ($member == "Silver") {
        echo "Anda mendapat cashback 5%";
    } elseif ($member == "Gold") {
        echo "Anda mendapat cashback 10% dan free ongkir";
    } elseif ($member == "Platinum") {
        echo "Anda mendapat cashback 20%, free ongkir, dan hadiah khusus 🎁";
    } else {
        echo "Anda bukan member, silakan daftar dulu.";
    }
    echo "<hr>";
    echo '<form method="post">
            <input type="hidden" name="step" value="5">
            <input type="submit" value="Lanjut ke Kasus 5">
          </form>';

} elseif ($step == 5) {
    // ---------------------- 5. TARIF PARKIR ----------------------
    echo "<h2>5. Tarif Parkir</h2>";
    $jam = 5;

    if ($jam <= 2) {
        echo "Tarif parkir Rp 5.000";
    } elseif ($jam <= 5) {
        echo "Tarif parkir Rp 10.000";
    } elseif ($jam <= 10) {
        echo "Tarif parkir Rp 15.000";
    } else {
        echo "Tarif parkir maksimal Rp 20.000";
    }

    echo "<br><br><b>✅ Semua kasus selesai ditampilkan.</b>";
    echo "<hr>";
    echo '<form method="post">
            <input type="hidden" name="step" value="1">
            <input type="submit" value="Ulang dari Kasus 1">
          </form>';
}
?>
