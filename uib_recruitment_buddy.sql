-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2019 pada 10.13
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uib_recruitmen_buddy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buddy`
--

CREATE TABLE `buddy` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `npm` int(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buddy`
--

INSERT INTO `buddy` (`id`, `name`, `npm`, `email`, `phone_number`, `image`) VALUES
(1, 'Bill Delvin', 1731055, 'billdelvin@gmail.com', 2147483647, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_number` int(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone_number`, `image`, `password`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.com', 2147483647, 'default.png', '$2y$10$XPUbSDkrxrOWzCvOwjdsOeOTVbLKRnVAOewmFWAj7dSgmc7/Fy9Du', 1573634996),
(6, 'test', 'test@gmail.com', 12341234, 'default.jpg', '$2y$10$4dIQjRIG98VK4Ny03aljYeErpS1q30dH1pxB8jxq7TfMZ6X4vDu5u', 1573636346);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buddy`
--
ALTER TABLE `buddy`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buddy`
--
ALTER TABLE `buddy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
