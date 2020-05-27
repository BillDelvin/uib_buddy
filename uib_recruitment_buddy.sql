-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2020 pada 10.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uib_recruitment_buddy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buddy_event_registration`
--

CREATE TABLE `buddy_event_registration` (
  `idRegistration` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL,
  `npmUser` char(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noPhoneMahasiswa` varchar(255) NOT NULL,
  `urlVideo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buddy_event_registration`
--

INSERT INTO `buddy_event_registration` (`idRegistration`, `idEvent`, `npmUser`, `email`, `noPhoneMahasiswa`, `urlVideo`, `image`, `status`) VALUES
(1, 1, '1741230', 'billcollin17@gmail.com', '470', 'Est aut anim reprehe', 'random_400x400.png', 'accept'),
(2, 2, '1731055', 'vyxij@mailinator.net', '1000', 'Illo id obcaecati ea', 'pexels-photo-2690323.jpeg', 'accept'),
(3, 6, '1731032', 'rywomi@mailinator.net', '832', 'Tempor excepteur tem', 'random_500x500.png', 'pending'),
(4, 1, '1731055', 'billdelvin7@gmail.com', '497', 'https://www.youtube.com/watch?v=HhoATZ1Imtw&list=RDHhoATZ1Imtw&start_radio=1', 'random_400x400.png', 'accept'),
(5, 2, '1731032', 'taja@mailinator.com', '950', 'Consectetur maxime e', 'pexels-photo-2690323.jpeg', 'accept'),
(6, 5, '1741230', 'japaryso@mailinator.net', '422', 'Ea enim magna conseq', 'random_500x500.png', 'interview'),
(7, 1, '1741001', 'bill@gmail.com', '0812341234', 'https://www.youtube.com/', 'random_400x400.png', 'interview'),
(8, 5, '1731055', 'billdelvin@gmail.com', '123412341234', 'https://www.youtube.com/', 'random_400x400.png', 'interview'),
(9, 1, '1931137', 'billcollin111@gmail.com', '08123456789', 'https://www.youtube.com/', 'random_400x400.png', 'accept');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE `email` (
  `idEmail` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` longtext NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `email`
--

INSERT INTO `email` (`idEmail`, `idEvent`, `email`, `subject`, `message`, `date`, `time`) VALUES
(1, 1, 'billcollin17@gmail.com , billdelvin7@gmail.com , billcollin111@gmail.com', 'Doloribus qui quis s', 'Hic eu sunt eveniet', '2020-05-26', '09:34:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_buddy`
--

CREATE TABLE `event_buddy` (
  `idEvent` int(11) NOT NULL,
  `eventTitle` longtext NOT NULL,
  `eventDescription` longtext NOT NULL,
  `eventDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event_buddy`
--

INSERT INTO `event_buddy` (`idEvent`, `eventTitle`, `eventDescription`, `eventDate`) VALUES
(1, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2020-03-01'),
(2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '2020-03-01'),
(5, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2020-03-01'),
(6, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2020-03-01'),
(7, 'UIB', 'Kuliah Malam', '2020-05-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `interview_schedule`
--

CREATE TABLE `interview_schedule` (
  `idInterview` int(11) NOT NULL,
  `idEvent` varchar(128) NOT NULL,
  `interviewTime` time NOT NULL,
  `interviewDate` date NOT NULL,
  `interviewPlace` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `interview_schedule`
--

INSERT INTO `interview_schedule` (`idInterview`, `idEvent`, `interviewTime`, `interviewDate`, `interviewPlace`) VALUES
(1, '2', '01:30:00', '2020-04-01', 'Humas'),
(4, '5', '05:30:00', '2020-04-10', 'Universitas Interational Batam'),
(5, '1', '12:30:00', '2020-05-06', 'Universitas International Batam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `note`
--

CREATE TABLE `note` (
  `idNote` int(11) NOT NULL,
  `noteTitle` text NOT NULL,
  `noteDescription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `note`
--

INSERT INTO `note` (`idNote`, `noteTitle`, `noteDescription`) VALUES
(3, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(4, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.'),
(5, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.'),
(6, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `npmUser` int(7) NOT NULL,
  `nameMahasiswa` varchar(255) NOT NULL,
  `jurusanMahasiswa` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`npmUser`, `nameMahasiswa`, `jurusanMahasiswa`, `password`, `role`) VALUES
(1111111, 'Admin', 'Admin', '$2y$10$6GrzQDvUA93/059xUYAv6uhb82NNHZKrMjbQ5B6V/jXMkCD7vNzem', 1),
(1731001, 'Agusyanto', 'Sistem Informasi', '$2y$10$8Uhw6KFBMOnkTOKU9S7Gk.Eofyn5TjJTdkFjBvBJLgWuvqql9RzlO', 2),
(1731032, 'Kelvin', 'Sistem Informasi', '$2y$10$CgJ0NqTP9mmz0rlJagxvFODiHEWCAl2RIF9XtN7cR8lGMnL/E7Z6C', 2),
(1731055, 'Bill Delvin', 'Sistem Informasi', '$2y$10$hPluTcC4qRn12YrsLeSrWu.3SJyNW6a4TdBQGlrRQBuLFDP9hvjaO', 2),
(1741001, 'Bill', 'Manajemen', '$2y$10$UDHJc6ha8xsGovNSQDPeqeyHhTo5MgaiERnsi27CC/A8hPZyV53WW', 2),
(1741230, 'Ory Dwi Putra', 'Management', '$2y$10$6iLH/oT8DfVdV/BY8rLynOHxpxmdxZLfVUnsD7rPEsjDnGQMFsB/C', 2),
(1931137, 'Evan Charles', 'Sistem Informasi', '$2y$10$NwJ2K3wVGe7NhIwNau931eYZfrSzK3nc05I/4JGDV78sj8fZVAeJa', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buddy_event_registration`
--
ALTER TABLE `buddy_event_registration`
  ADD PRIMARY KEY (`idRegistration`);

--
-- Indeks untuk tabel `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`idEmail`);

--
-- Indeks untuk tabel `event_buddy`
--
ALTER TABLE `event_buddy`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indeks untuk tabel `interview_schedule`
--
ALTER TABLE `interview_schedule`
  ADD PRIMARY KEY (`idInterview`);

--
-- Indeks untuk tabel `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`idNote`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`npmUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buddy_event_registration`
--
ALTER TABLE `buddy_event_registration`
  MODIFY `idRegistration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `email`
--
ALTER TABLE `email`
  MODIFY `idEmail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event_buddy`
--
ALTER TABLE `event_buddy`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `interview_schedule`
--
ALTER TABLE `interview_schedule`
  MODIFY `idInterview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `note`
--
ALTER TABLE `note`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
