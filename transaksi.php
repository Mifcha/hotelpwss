<?php

// Include file koneksi
include "koneksi.php";

// Query untuk menampilkan data pengunjung
$query = "SELECT * FROM transaksi";

// Eksekusi query
$hasil = mysqli_query($koneksi, $query);

// Cek hasil query
if (mysqli_num_rows($hasil) > 0) {

  // Tampilkan data pengunjung
  echo "<table border='1'>";
  echo "<tr>";
  echo "<th>No Transaksi</th>";
  echo "<th>ID Pengunjung</th>";
  echo "<th>Tanggal Masuk</th>";
  echo "<th>Tanggal Keluar</th>";
  echo "<th>Nama Pengunjung</th>";
  echo "<th>Jumlah Kamar</th>";
  echo "<th>Total Biaya</th>";
  echo "</tr>";

  while ($data = mysqli_fetch_assoc($hasil)) {
    echo "<tr>";
    echo "<td>{$data['no_transaksi']}</td>";
    echo "<td>{$data['idpengunjung']}</td>";
    echo "<td>{$data['tanggal_masuk']}</td>";
    echo "<td>{$data['tanggal_keluar']}</td>";
    echo "<td>{$data['namacust']}</td>";
    echo "<td>{$data['jml_kamar']}</td>";
    echo "<td>{$data['total_biaya']}</td>";
    echo "</tr>";
  }

  echo "</table>";

} else {

  // Tampilkan pesan tidak ada data
  echo "Tidak ada data transaksi";

}

?>
