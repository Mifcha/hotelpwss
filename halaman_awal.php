<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        echo "Sesi Sudah Habis! <br/>
            <a href='login_form.php'>LOGIN LAGI</a>";
        exit;
}
echo "SELAMAT DATANG <br/>";
echo "USER: ".$_SESSION["user"]."<br/>";
echo "NAMA: ".$_SESSION["nama_lengkap"]."<br/>";
?>
<hr/>
<div id="menu">
    <h2>PILIH MENU</h2>
    <a href="pengunjung_tampilan.php">Daftar Pengunjung</a> <br/>
    <a href="transaksi_tampilan.php">Daftar Transaksi</a> <br/>
    <a href="logout.php">Logout</a> <br/>
</div>