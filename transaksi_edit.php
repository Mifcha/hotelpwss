<?php
$no_transaksi = $_GET["no_transaksi"];
include "koneksi.php";
$sql = "select * from transaksi where no_transaksi = '$no_transaksi'";
$hasil = mysqli_query($koneksi, $sql); 
if(!$hasil) die("Gagal query...");

$data = mysqli_fetch_array($hasil);
$idpengunjung = $data["idpengunjung"];
$tanggal_masuk = $data["tanggal_masuk"];
$tanggal_keluar = $data["tanggal_keluar"];
$namacust = $data["namacust"];
$jml_kamar = $data["jml_kamar"];
$total_biaya = $data["total_biaya"];
?>

<h2>INPUT TRANSAKSI BARU</h2>
<hr/>
<form action="transaksi_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="no_transaksi" value="<?php echo $no_transaksi;?>"/>
<table>
    <tr>
        <td>ID Pengunjung</td>
        <td><input type="text" name="idpengunjung" value="<?php echo $idpengunjung; ?>"/></td>
</tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td><input type="text" name="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>"/></td>
</tr>
    <tr>
        <td>Tanggal Keluar</td>
        <td><input type="text" name="tanggal_keluar" value="<?php echo $tanggal_keluar;?>"/></td>
</tr>
    <tr>
        <td>Nama Pengunjung</td>
        <td><input type="text" name="namacust" value="<?php echo $namacust; ?>"/></td>
</tr>
<tr>
        <td>Jumlah Kamar</td>
        <td><input type="text" name="jml_kamar" value="<?php echo $jml_kamar; ?>"/></td>
</tr>
<tr>
        <td>Total Biaya</td>
        <td><input type="text" name="total_biaya" value="<?php echo $total_biaya; ?>"/></td>
</tr>
</table><hr/>
<tr>
    <td colspan="2" align="center">
    <input type="submit" value="Simpan" name="proses"/>
    <input type="reset" value="Reset" name="reset"/>
    </td>
</tr>
</form>
