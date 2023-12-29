<h2>TAMBAH PENGUNJUNG<hr/></h2>
<form action="pengunjung_simpan.php" method="post">
<table>
<tr>
<td>ID Pengunjung</td>
<td><input type="text" name="idpengunjung" size="5"></td>
</tr>
<tr>
<td>Nama Pengunjung</td>
<td><input type="text" name="nama" size="20"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" size="20"></td>
</tr>
<tr>
<td>No Telepon</td>
<td><input type="text" name="no_telp" size="20"></td>
</tr>
<tr>
<td>No KTP</td>
<td><input type="text" name="no_ktp" size="5"></td>
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