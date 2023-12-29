<?php
$no_transaksi = $_GET['no_transaksi'];
include "koneksi.php";
$sql = "select * from transaksi where no_transaksi = '$no_transaksi'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) die('Gagal query...');

$data = mysqli_fetch_array($hasil);
$idpengunjung = $data['idpengunjung'];
$tanggal_masuk = $data['tanggal_masuk'];
$tanggal_keluar = $data['tanggal_keluar'];
$namacust = $data['namacust'];
$jml_kamar = $data['jml_kamar'];
$total_biaya = $data['total_biaya'];

echo "<table border='1'>";
echo "<tr>";
echo "<td colspan='2'><h2>KONFIRMASI HAPUS TRANSAKSI</h2></td>";
echo "</tr>";
echo "<tr>";
echo "<td>ID Pengunjung </td>";
echo "<td>".$idpengunjung."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Tanggal Masuk </td>";
echo "<td>".$tanggal_masuk."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Tanggal Keluar </td>";
echo "<td>".$tanggal_keluar."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama Pengunjung </td>";
echo "<td>".$namacust."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Jumlah Kamar </td>";
echo "<td>".$jml_kamar."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Total Biaya </td>";
echo "<td>".$total_biaya."</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2'><center>APAKAH DATA TRANSAKSI AKAN DIHAPUS? <br/>";
echo "<a href='transaksi_hapus.php?no_transaksi=$no_transaksi&hapus=1'>YA</a>";
echo "&nbsp;&nbsp;";
echo "<a href='transaksi_tampilan.php'>TIDAK</a><br/><br/></td>";
echo "</tr>";

if (isset($_GET['hapus'])) {
    $sql = "delete from transaksi where no_transaksi = '$no_transaksi'";
    $hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Gagal Hapus Transaski: $idpengunjung..<br/>";
    echo "<a href='transaksi_tampilan.php'>Kembali ke Daftar Transaksi</a>";
}else{
}
}
?>