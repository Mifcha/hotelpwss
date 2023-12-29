<?php

// Include file koneksi
include "koneksi.php";

// Query untuk menampilkan data pengunjung
$query = "SELECT * FROM pengunjung";

// Eksekusi query
$hasil = mysqli_query($koneksi, $query);

// Cek hasil query
if (mysqli_num_rows($hasil) > 0) {

  // Tampilkan data pengunjung
  echo "<table border='1'>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Nama</th>";
  echo "<th>Alamat</th>";
  echo "<th>No Telp</th>";
  echo "<th>No KTP</th>";
  echo "</tr>";

  while ($data = mysqli_fetch_assoc($hasil)) {
    echo "<tr>";
    echo "<td>{$data['idpengunjung']}</td>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['alamat']}</td>";
    echo "<td>{$data['no_telp']}</td>";
    echo "<td>{$data['no_ktp']}</td>";
    echo "</tr>";
  }

  echo "</table>";

} else {

  // Tampilkan pesan tidak ada data
  echo "Tidak ada data pengunjung";

}

?>
