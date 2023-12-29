<?php
$nama = "";
if (isset($_POST["nama"]))
$nama = $_POST["nama"];

include "koneksi.php";
$sql = "select * from pengunjung where nama like '%".$nama."%'
order by idpengunjung desc";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil)
die ("Gagal query..".mysqli_error($koneksi));
?>
<a href="pengunjung_tambah.php">INPUT PENGUNJUNG BARU</a>
<table border="1">
<tr>
<th>ID</th>
<th>Nama Pengunjung</th>
<th>Alamat</th>
<th>No Telp</th>
<th>No KTP</th>
<th></th>
</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_assoc($hasil)) {
echo "<tr>";
echo "<td>".$row['idpengunjung']."</td>";
echo "<td>".$row['nama']."</td>";
echo "<td>".$row['alamat']."</td>";
echo "<td>".$row['no_telp']."</td>";
echo "<td>".$row['no_ktp']."</td>";
echo "<td>";
echo "<td> <a href='pengunjung_lihat.php?nama=".$row['nama']. "'>
        Lihat Pengunjung</a>";
echo "&nbsp;" ;
echo "<td> <a href='pengunjung_edit.php?idpengunjung=".$row['idpengunjung']. "'>
        UPDATE </a>";
    echo "&nbsp;" ;
echo "<td> <a href='pengunjung_hapus.php?idpengunjung=".$row['idpengunjung']. "'>
        HAPUS </a>";
echo "</td>";
echo "</tr>";
}
?>
</table>
