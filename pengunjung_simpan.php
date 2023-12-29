<?php
$idpengunjung = $_POST['idpengunjung'];
$nama = $_POST['nama']; 
$alamat = $_POST['alamat']; 
$no_telp = $_POST['no_telp']; 
$no_ktp = $_POST['no_ktp'];

$dataValid="YA";

if (strlen(trim($idpengunjung))==0) {
    echo "id Harus Diisil <br />"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($nama))==0) {
    echo "nama Harus Diisil <br/>"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($alamat))==0) {
    echo "Harus Diisil <br />";
    $dataValid = "TIDAK";
}
if (strlen(trim($no_telp))==0) {
    echo "Harus Diisil <br/>"; 
    $dataValid = "TIDAK";
}
if (strlen(trim($no_ktp))==0) {
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

$sql="insert into pengunjung(idpengunjung, nama, alamat, no_telp, no_ktp) values('$idpengunjung', '$nama', '$alamat', '$no_telp', '$no_ktp')"; 
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
