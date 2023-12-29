-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2023 pada 05.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `user`, `password`, `nama_lengkap`, `akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'toko'),
(2, 'cust', '3aad3506aa11f05f265ea8304b8152b3', 'pelanggan', 'beli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `idpengunjung` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_ktp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`idpengunjung`, `nama`, `alamat`, `no_telp`, `no_ktp`) VALUES
(2, 'Rian Eka', 'Konawe', '085737359408', 2147483647),
(3, 'Icha Ayu', 'Bulakamba', '089890987689', 345890792),
(4, 'Hanif', 'Padang', '087890987654', 567890056),
(5, 'Zidan Syahbandi', 'Pontianak', '083876789653', 332968967);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `idpengunjung` varchar(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `namacust` varchar(40) NOT NULL,
  `jml_kamar` int(11) NOT NULL DEFAULT 0,
  `total_biaya` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `idpengunjung`, `tanggal_masuk`, `tanggal_keluar`, `namacust`, `jml_kamar`, `total_biaya`) VALUES
(20, '2', '2023-09-24', '2023-09-27', 'Rian Eka', 2, 800000.00),
(22, '3', '2023-08-30', '2023-09-02', 'Icha Ayu', 2, 500000.00),
(23, '4', '2023-05-25', '2023-05-26', 'Hanif', 2, 300000.00),
(24, '5', '2023-04-23', '2023-04-25', 'Zidan Syahbandi', 4, 2000000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`idpengunjung`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `idpengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
