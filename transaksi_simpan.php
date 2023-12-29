<?php
$no_transaksi = $_POST['no_transaksi'];
$idpengunjung = $_POST['idpengunjung']; 
$tanggal_masuk = $_POST['tanggal_masuk']; 
$tanggal_keluar = $_POST['tanggal_keluar']; 
$namacust = $_POST['namacust'];
$jml_kamar = $_POST['jml_kamar'];
$total_biaya = $_POST['total_biaya'];

$dataValid="YA";

if (strlen(trim($no_transaksi))==0) {
    echo "Harus Diisil <br />"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($idpengunjung))==0) {
    echo "id Harus Diisil <br />"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($tanggal_masuk))==0) {
    echo "Harus Diisil <br/>"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($tanggal_keluar))==0) {
    echo "Harus Diisil <br />";
    $dataValid = "TIDAK";
}
if (strlen(trim($namacust))==0) {
    echo "Harus Diisi <br/>"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($jml_kamar))==0) {
    echo "Harus Diisil <br />";
    $dataValid = "TIDAK";
}
if (strlen(trim($total_biaya))==0) {
    echo "Harus Diisil <br />";
    $dataValid = "TIDAK";
}
if ($dataValid == "TIDAK") {
    echo "Masih Ada Kesalahan, silahkan perbaiki: </br>";
    echo "<input type='button' value='Kembali'
    onclick='self.history.back()'>";
exit;
}

include "koneksi.php";

$sql="insert into transaksi(no_transaksi, idpengunjung, tanggal_masuk, tanggal_keluar, namacust, jml_kamar, total_biaya) 
values('$no_transaksi', '$idpengunjung', '$tanggal_masuk', '$tanggal_keluar', '$namacust', '$jml_kamar', '$total_biaya')"; 
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil) {
    echo "Gagal Simpan, silahkan diulangil <br />";
    echo mysqli_error($koneksi);
    echo "<br/> <input type='button' value='Kembali'
    onclick= 'self.history.back()'>";
exit;
} else {
echo "Simpan data berhasil";
}
?>