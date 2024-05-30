-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2023 pada 02.23
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `sampah_organik` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `edukasi` varchar(50) NOT NULL,
  `rumah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `input`
--

INSERT INTO `input` (`id`, `nama`, `username`, `notelp`, `asal`, `sampah_organik`, `rw`, `kelurahan`, `kecamatan`, `edukasi`, `rumah`) VALUES
(1, 'Hendra', 'hendar', '085646111254', 'pkk', '3', '1', 'Menteng', 'Menteng', '2', '1'),
(2, 'Maguayer ', 'logistik', '085646111255', 'penggiat lingkungan', '45', '6', 'Menteng', 'Menteng', '9', '10'),
(3, 'Hendra', 'hendar', '085646111254', 'pkk', '12', '6', 'Menteng', 'Menteng', '6', '21'),
(4, 'Hendra', 'hendar', '085646111254', 'pkk', '12', '6', 'Menteng', 'Menteng', '6', '21'),
(5, 'Hendra', 'hendar', '085646111254', 'pkk', '1', '6', 'Menteng', 'Menteng', '2', '21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Angga Saeful', 'admin', 'password123', 'admin'),
(2, 'Sudarmana', 'warga', 'warga123', 'user'),
(3, 'Hendra', 'hendar', '085646111254', 'user'),
(4, 'Maguayer ', 'logistik', '085646111255', 'user'),
(5, 'Hendra', 'hendar', '085646111254', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `input`
--
ALTER TABLE `input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
