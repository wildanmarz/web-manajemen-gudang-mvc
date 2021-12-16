-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2021 pada 09.47
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bodegas`
--

CREATE TABLE `bodegas` (
  `id` int(6) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `kapasitas` varchar(20) DEFAULT NULL,
  `pendingin` int(1) DEFAULT 0,
  `pemanas` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bodegas`
--

INSERT INTO `bodegas` (`id`, `nomor`, `alamat`, `email`, `telepon`, `kontak`, `kapasitas`, `pendingin`, `pemanas`) VALUES
(6, '1', 'Jl. Sawit 1, Sumoroto, Blabak, Kandat, Kediri', 'wildanmarz1@gmail.com', '085645056139', 'akuu', '085645056139', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vinos`
--

CREATE TABLE `vinos` (
  `id` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bodega` int(6) NOT NULL,
  `deskripsi` varchar(80) NOT NULL,
  `expired` varchar(4) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `berat` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vinos`
--

INSERT INTO `vinos` (`id`, `nama`, `bodega`, `deskripsi`, `expired`, `jenis`, `berat`) VALUES
(1, '7565', 1, 'n nbbnnb', 'jjj', 'blanco', 'jnjj'),
(3, 'anggur', 2, 'anggur merah', '12/1', 'cair', '2222'),
(4, 'anggur', 4, 'anggur putih', '12/1', 'padat', '211'),
(5, 'kurma', 4, 'kurma mesir manis', '12/1', 'padat', '321'),
(6, 'anggur', 4, '', '12/1', 'cair', '211'),
(7, 'anggur', 6, 'as', '12/1', 'cair', '2222');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bodegas`
--
ALTER TABLE `bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bodegas`
--
ALTER TABLE `bodegas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `vinos`
--
ALTER TABLE `vinos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
