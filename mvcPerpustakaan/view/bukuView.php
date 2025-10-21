<?php
class BukuView {
    public function tampilkan($bukuList) {
        echo "
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f6fa;
                padding: 20px;
            }
            h2 {
                color: #2f3640;
                text-align: center;
            }
            table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
                background-color: #ffffff;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            th, td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #273c75;
                color: white;
                letter-spacing: 0.05em;
            }
            tr:hover {
                background-color: #f1f2f6;
            }
            td:first-child {
                text-align: left;
            }
        </style>
        
        <h2>Daftar Buku</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </tr>";
        
        $no = 1;
        foreach ($bukuList as $p) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$p['judul']}</td>
                    <td>{$p['pengarang']}</td>
                    <td>{$p['tahunTerbit']}</td>
                  </tr>";
            $no++;
        }

        echo "</table>";
    }
}
?>
