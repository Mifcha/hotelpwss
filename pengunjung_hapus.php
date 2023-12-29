<?php
$idpengunjung = $_GET['idpengunjung'];
include "koneksi.php";
$sql = "select * from pengunjung where idpengunjung = '$idpengunjung'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) die('Gagal query...');

$data = mysqli_fetch_array($hasil);
$nama = $data['nama'];
$alamat = $data['alamat'];
$no_telp = $data['no_telp'];
$no_ktp = $data['no_ktp'];

echo "<table border='1'>";
echo "<tr>";
echo "<td colspan='2'><h2>KONFIRMASI HAPUS PENGUNJUNG</h2></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama Pengunjung </td>";
echo "<td>".$nama."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Alamat </td>";
echo "<td>".$alamat."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>No Telepon </td>";
echo "<td>".$no_telp."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>No KTP </td>";
echo "<td>".$no_ktp."</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2'><center>APAKAH DATA PENGUNJUNG AKAN DIHAPUS? <br/>";
echo "<a href='pengunjung_hapus.php?idpengunjung=$idpengunjung&hapus=1'>YA</a>";
echo "&nbsp;&nbsp;";
echo "<a href='pengunjung_tampilan.php'>TIDAK</a><br/><br/></td>";
echo "</tr>";

if (isset($_GET['hapus'])) {
    $sql = "delete from pengunjung where idpengunjung = '$idpengunjung'";
    $hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Gagal Hapus Barang: $nama..<br/>";
    echo "<a href='pengunjung_tampilan.php'>Kembali ke Daftar Pengunjung</a>";
}else{
}
}
?>