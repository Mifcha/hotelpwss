<?php
$jml_kamar = "";
if (isset($_POST["jml_kamar"]))
    $jml_kamar = $_POST["jml_kamar"];

include "koneksi.php";
$sql = "select * from transaksi where jml_kamar like '%".$jml_kamar."%' 
        order by no_transaksi desc";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil)
    die ("Gagal query..".mysqli_error($koneksi));
?>
<a href="transaksi_tambah.php">INPUT TRANSAKSI BARU</a>
<table border="1">
<tr>
<th>No Transaksi</th>
<th>ID Pengunjung</th>
<th>Tanggal Masuk</th>
<th>Tanggal Keluar</th>
<th>Nama Pengunjung</th>
<th>Jumlah Kamar</th>
<th>Total Biaya</th>
<th></th>
</tr>
<?php
    $no = 0;
    while ($row = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>".$row['no_transaksi']."</td>";
        echo "<td>".$row['idpengunjung']."</td>";
        echo "<td>".$row['tanggal_masuk']."</td>";
        echo "<td>".$row['tanggal_keluar']."</td>";
        echo "<td>".$row['namacust']."</td>";
        echo "<td>".$row['jml_kamar']."</td>";
        echo "<td>".$row['total_biaya']."</td>";
        echo "<td>";
        echo "<td> <a href='transaksi_lihat.php?no_transaksi=".$row['no_transaksi']. "'>
                Lihat Transaksi</a>";
        echo "&nbsp;" ;
        echo "<td> <a href='transaksi_edit.php?no_transaksi=".$row['no_transaksi']. "'>
                UPDATE </a>";
        echo "&nbsp;" ;
        echo "<td> <a href='transaksi_hapus.php?no_transaksi=".$row['no_transaksi']. "'>
                HAPUS </a>";
        echo "</td>";
        echo "</tr>";
}
?>
</table>