<?php
$no_transaksi = $_GET['no_transaksi'];
include "koneksi.php";
$sql = "select * from transaksi WHERE no_transaksi = '$no_transaksi'"; 
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil)
    die("Gagal query..".mysqli_error($koneksi));
?>
<table border="1">
<tr><td>
<a href= "transaksi_tambah.php"> INPUT TRANSAKSI BARU</a>
&nbsp; &nbsp; &nbsp;
<a href="pengunjung_tampilan.php"> DAFTAR TRANSAKSI</a>
<hr>
<h2> INFORMASI TRANSAKSI </h2>
<br>
    <?php
    while ($row = mysqli_fetch_assoc($hasil))
    {
?>
<table border="1" width="400" align="center">
<tr><td>No Transaksi</td><td><?php echo "{$row['no_transaksi']}" ?></td></tr>
    <tr><td>ID Pengunjung</td><td><?php echo "{$row['idpengunjung']}" ?></td></tr>
    <tr><td>Tanggal Masuk</td><td><?php echo "{$row['tanggal_masuk']}" ?></td></tr>
    <tr><td>Tanggal Keluar</td><td><?php echo "{$row['tanggal_keluar']}" ?></td></tr>
    <tr><td>Nama Pengunjung</td><td><?php echo "{$row['namacust']}" ?></td></tr>
    <tr><td>Jumlah Kamar</td><td><?php echo "{$row['jml_kamar']}" ?></td></tr>
    <tr><td>Total Biaya</td><td><?php echo "{$row['total_biaya']}" ?></td></tr>
</table>
<?php
    }
    ?>
    </td>
</tr>
</table>
