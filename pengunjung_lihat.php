<?php
$nama = $_GET['nama'];
include "koneksi.php";
$sql = "select * from pengunjung WHERE nama = '$nama'"; 
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil)
    die("Gagal query..".mysqli_error($koneksi));
?>
<table border="1">
<tr><td>
<a href= "pengunjung_tambah.php"> INPUT PENGUNJUNG BARU</a>
&nbsp; &nbsp; &nbsp;
<a href="pengunjung_tampilan.php"> DAFTAR PENGUNJUNG</a>
<hr>
<h2> INFORMASI PENGUNJUNG </h2>
<br>
    <?php
    while ($row = mysqli_fetch_assoc($hasil))
    {
?>
<table border="1" width="400" align="center">
<tr><td>ID Pengunjung</td><td><?php echo "{$row['idpengunjung']}" ?></td></tr>
    <tr><td>Nama Pengunjung</td><td><?php echo "{$row['nama']}" ?></td></tr>
    <tr><td>Alamat</td><td><?php echo "{$row['alamat']}" ?></td></tr>
    <tr><td>No Telepon</td><td><?php echo "{$row['no_telp']}" ?></td></tr>
    <tr><td>No KTP</td><td><?php echo "{$row['no_ktp']}" ?></td></tr>
</table>
<?php
    }
    ?>
    </td>
</tr>
</table>
