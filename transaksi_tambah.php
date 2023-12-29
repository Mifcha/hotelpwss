<h2>TAMBAH TRANSAKSI<hr/></h2>
<form action="transaksi_simpan.php" method="post">
<table>
<tr>
<td>NO Transaksi</td>
<td><input type="text" name="no_transaksi" size="5"></td>
</tr>
<tr>
<td>ID Pengunjung</td>
<td><input type="text" name="idpengunjung" size="20"></td>
</tr>
<tr>
<td>Tanggal Masuk</td>
<td><input type="text" name="tanggal_masuk" size="20"></td>
</tr>
<tr>
<td>Tanggal Keluar</td>
<td><input type="text" name="tanggal_keluar" size="20"></td>
</tr>
<tr>
<td>Nama Pengunjung</td>
<td><input type="text" name="namacust" size="5"></td>
</tr>
<tr>
    <td>Jumlah Kamar</td>
    <td><input type="text" name="jml_kamar" size="5"></td>
    </tr>
    <tr>
        <td>Total Biaya</td>
        <td><input type="text" name="total_biaya" size="5"></td>
        </tr>
</table>
<hr/>
<tr>
<td>
<input type="submit" value="Simpan" name="proses" />
<input type="reset" value="Reset" name="reset"/>
</td>
</tr>
</form>