<?php
error_reporting (E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName ="hotel";

$koneksi = mysqli_connect($host, $user, $pass); 
if (!$koneksi)
die("Gagal Koneksi...");

$hasil = mysqli_select_db($koneksi, $dbName); 
if (!$hasil){
    $hasil = mysqli_query($koneksi, "CREATE DATABASE $dbName");
    if (!$hasil)
        die("Gagal Buat Database");
    else
        $hasil = mysqli_select_db($koneksi, $dbName); 
        if (!$hasil) die ("Gagal Konek Database");
}

$sqlTabelPengunjung = "create table if not exists pengunjung (
                idpengunjung int auto_increment not null primary key, 
                nama varchar (40) not null, 
                alamat varchar(50) not null, 
                no_telp varchar(20) not null,
                no_ktp int not null default 0, 
                KEY(nama))";
   
mysqli_query($koneksi, $sqlTabelPengunjung) or die("Gagal Buat Tabel Pengunjung ");

$sqlTabelTransaksi = "create table if not exists transaksi ( 
                no_transaksi int auto_increment not null primary key, 
                idpengunjung varchar(10) not null,
                tanggal_masuk date not null, 
                tanggal_keluar date not null,
                namacust varchar(40) not null, 
                jml_kamar int not null default 0, 
                total_biaya decimal(10,2) not null
                )";
   
mysqli_query ($koneksi, $sqlTabelTransaksi) or die("Gagal Buat Tabel Transaksi ");

$sqlTabelUser = "create table if not exists pengguna ( 
    idpengguna int auto_increment not null primary key, 
    user varchar(25) not null, 
    password varchar(50) not null, 
    nama_lengkap varchar(50) not null, 
    akses varchar(10) not null 
    )";

mysqli_query ($koneksi, $sqlTabelUser) or die("Gagal Buat Tabel Pengguna ");

$sql = "select * from pengguna";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);
if ($jumlah == 0) {
$sql = "insert into pengguna (user, password, nama_lengkap, akses) 
values ('admin', md5 ('admin'), 'administrator', 'toko'), 
('cust', md5('cust'), 'pelanggan', 'beli') ";
mysqli_query($koneksi, $sql);
}

?>

