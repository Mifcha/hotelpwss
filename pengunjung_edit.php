<?php
$idpengunjung = $_GET["idpengunjung"];
include "koneksi.php";
$sql = "select * from pengunjung where idpengunjung = $idpengunjung";
$hasil = mysqli_query($koneksi, $sql); 
if(!$hasil) die("Gagal query...");

$data = mysqli_fetch_array($hasil);
$nama = $data["nama"];
$alamat = $data["alamat"];
$no_telp = $data["no_telp"];
$no_ktp = $data["no_ktp"];
?>

<h2>INPUT PENGUNJUNG BARU</h2>
<hr/>
<form action="pengunjung_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="idpengunjung" value="<?php echo $idpengunjung;?>"/>
<table>
    <tr>
        <td>Nama Pengunjung</td>
        <td><input type="text" name="nama" value="<?php echo $nama; ?>"/></td>
</tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"/></td>
</tr>
    <tr>
        <td>No Telepom</td>
        <td><input type="text" name="no_telp" value="<?php echo $no_telp;?>"/></td>
</tr>
    <tr>
        <td>No KTP</td>
        <td><input type="text" name="no_ktp" value="<?php echo $no_ktp; ?>"/></td>
</tr>
</table><hr/>
<tr>
    <td colspan="2" align="center">
    <input type="submit" value="Simpan" name="proses"/>
    <input type="reset" value="Reset" name="reset"/>
    </td>
</tr>
</form>
