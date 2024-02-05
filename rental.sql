-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2024 pada 10.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jdwlrental`
--

CREATE TABLE `jdwlrental` (
  `id_jadwal` int(35) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jam_pemesanan` time NOT NULL,
  `jam_pengembalian` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jdwlrental`
--

INSERT INTO `jdwlrental` (`id_jadwal`, `tanggal_pemesanan`, `tanggal_pengembalian`, `jam_pemesanan`, `jam_pengembalian`) VALUES
(1, '2024-02-16', '2024-02-10', '16:54:00', '03:03:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenismobil`
--

CREATE TABLE `jenismobil` (
  `kd_mobil` int(11) NOT NULL,
  `type_mobil` varchar(50) NOT NULL,
  `tahun_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenismobil`
--

INSERT INTO `jenismobil` (`kd_mobil`, `type_mobil`, `tahun_mobil`) VALUES
(1, 'HRV', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesan`
--

CREATE TABLE `pemesan` (
  `no_pemesan` int(11) NOT NULL,
  `nm_pemesan` varchar(100) NOT NULL,
  `hp_pemesan` varchar(15) NOT NULL,
  `alamat_pemesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesan`
--

INSERT INTO `pemesan` (`no_pemesan`, `nm_pemesan`, `hp_pemesan`, `alamat_pemesan`) VALUES
(1, 'Mahmud', '081260422345', 'peunayong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nm_petugas` varchar(100) NOT NULL,
  `hp_petugas` varchar(15) NOT NULL,
  `alamat_petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nm_petugas`, `hp_petugas`, `alamat_petugas`) VALUES
(1, 'Ismail', '089709876543', 'Banda Aceh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sistempenyewaan`
--

CREATE TABLE `sistempenyewaan` (
  `kd_mobil` int(35) NOT NULL,
  `plat_mobil` varchar(35) NOT NULL,
  `lepas_kunci` varchar(35) NOT NULL,
  `driver` varchar(25) NOT NULL,
  `non_driver` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sistempenyewaan`
--

INSERT INTO `sistempenyewaan` (`kd_mobil`, `plat_mobil`, `lepas_kunci`, `driver`, `non_driver`) VALUES
(1, 'BL 4056 PK', 'IYA', 'TIDAK', 'IYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `last_log`) VALUES
(1, 'administrator', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jdwlrental`
--
ALTER TABLE `jdwlrental`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jenismobil`
--
ALTER TABLE `jenismobil`
  ADD PRIMARY KEY (`kd_mobil`);

--
-- Indeks untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`no_pemesan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `sistempenyewaan`
--
ALTER TABLE `sistempenyewaan`
  ADD PRIMARY KEY (`kd_mobil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jdwlrental`
--
ALTER TABLE `jdwlrental`
  MODIFY `id_jadwal` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `jenismobil`
--
ALTER TABLE `jenismobil`
  MODIFY `kd_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `no_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `sistempenyewaan`
--
ALTER TABLE `sistempenyewaan`
  MODIFY `kd_mobil` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
