-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 09.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bimbelkami`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `usrnm_admin` varchar(50) NOT NULL,
  `pw_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `nama_admin`, `usrnm_admin`, `pw_admin`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin2', 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `harga` double NOT NULL,
  `gambar_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `judul`, `mapel`, `kelas`, `harga`, `gambar_buku`) VALUES
(17, 'Buku Bahasa Indonesia', 'Bahasa Indonesia', '8', 56000, ''),
(19, 'IPS Terpadu 2022', 'IPS', '7', 34000, ''),
(21, 'Kamus dua Bahasa Indonesia-Inggris', 'Bahasa Inggris', '7', 65000, ''),
(23, 'buku apa aja', 'mtk', '7', 50000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `tgl_pembayaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID_ADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilih_buku`
--

CREATE TABLE `pilih_buku` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `ID_BUKU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID_USER` int(11) NOT NULL,
  `ID_PEMBAYARAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `hp_user` varchar(20) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `desa` text NOT NULL,
  `usrnm_user` varchar(50) NOT NULL,
  `pw_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `nama_user`, `hp_user`, `email_user`, `desa`, `usrnm_user`, `pw_user`) VALUES
(1, 'via', '0852', 'vy@gmail.com', 'Krian Sda', 'via', 'via');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `ID_ADMIN` (`ID_ADMIN`);

--
-- Indeks untuk tabel `pilih_buku`
--
ALTER TABLE `pilih_buku`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `ID_BUKU` (`ID_BUKU`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `ID_PEMBAYARAN` (`ID_PEMBAYARAN`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `ID_BUKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pilih_buku`
--
ALTER TABLE `pilih_buku`
  MODIFY `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `pilih_buku`
--
ALTER TABLE `pilih_buku`
  ADD CONSTRAINT `pilih_buku_ibfk_1` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `transaksi` (`ID_TRANSAKSI`),
  ADD CONSTRAINT `pilih_buku_ibfk_2` FOREIGN KEY (`ID_BUKU`) REFERENCES `buku` (`ID_BUKU`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`ID_PEMBAYARAN`) REFERENCES `pembayaran` (`ID_PEMBAYARAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
