-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2020 pada 00.54
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `pass`) VALUES
('100001', 'Joko', 'e10adc3949ba59abbe56e057f20f883e'),
('100002', 'Dasha', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('17111000', 'jaja', 'f937d88a7c3511da8086eb95fe6b75ec'),
('17111222', 'hayam', 'b0c59e90c987b6ce5c43809de341cd2e'),
('17111329', 'ihsan', 'f937d88a7c3511da8086eb95fe6b75ec'),
('17111330', 'irgi', 'bomberbandung'),
('18111000', 'ihsan.ST', 'f937d88a7c3511da8086eb95fe6b75ec'),
('181818', 'Rahman', '9b9ee2f1e73d3146ebe3be2c68f718fb'),
('19111000', 'harun', 'f937d88a7c3511da8086eb95fe6b75ec');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `pass`) VALUES
('1231231231', 'kjadshkfjhsadf', '4f0b36a34946153c358f8b243428a1eb'),
('1234567', 'gantengkuy', 'd41d8cd98f00b204e9800998ecf8427e'),
('17111320', 'haram', 'd41d8cd98f00b204e9800998ecf8427e'),
('17111329', 'Ihsan Nurhakim', 'd41d8cd98f00b204e9800998ecf8427e'),
('17111333', 'Dadan', 'bandungwar'),
('18111333', 'Inem surinem', 'ngehehehe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id` int(10) NOT NULL,
  `namapel` varchar(100) NOT NULL,
  `uts` int(100) NOT NULL,
  `uas` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `namapel`, `uts`, `uas`) VALUES
(7, 'b indo', 87, 90),
(10, 'Visual Programing', 87, 79),
(11, 'Matematika', 78, 87),
(13, 'ihsan ganteng', 20, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
`id` int(100) NOT NULL,
  `senin` varchar(100) NOT NULL,
  `selasa` varchar(100) NOT NULL,
  `rabu` varchar(100) NOT NULL,
  `kamis` varchar(100) NOT NULL,
  `jumat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`) VALUES
(1, 'B.Indonesia', 'Statistika', 'Vispro', 'Mobile pro', 'OOP'),
(3, 'tik', '', 'tuk', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran2`
--

CREATE TABLE IF NOT EXISTS `pelajaran2` (
`id` int(100) NOT NULL,
  `senin` varchar(100) NOT NULL,
  `selasa` varchar(100) NOT NULL,
  `rabu` varchar(100) NOT NULL,
  `kamis` varchar(100) NOT NULL,
  `jumat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajaran2`
--
ALTER TABLE `pelajaran2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelajaran2`
--
ALTER TABLE `pelajaran2`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
