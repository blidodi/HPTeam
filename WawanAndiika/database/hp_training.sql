-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2017 pada 07.46
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hp_training`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_belanja`
--

CREATE TABLE IF NOT EXISTS `tbl_belanja` (
  `id_cat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nominal` varchar(30) NOT NULL,
  `kebutuhan` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `penulis` varchar(250) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `isbn` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `isbn`) VALUES
(5, 'Kalkulus', 'Oh ', 'Ganesha', '1998', '19-37-2487-2847'),
(6, 'Ganteng', 'Kuncoros', 'Kunciri', '2017', '19-099-2637-31'),
(7, 'Kuaci', 'Huahaha', 'Ganesha', '2018', '19-766-32-424-5'),
(9, 'Kurcaci', 'Oke', 'Lucu', '2017', '199-2424-5325'),
(11, 'Matik', 'Kamu', 'Iya Kamu', '2015', '19-213-3242-242'),
(12, 'Arsikom', 'Saya', 'Saya', '1993', '19-324-543-53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `userLevel` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `userLevel`) VALUES
(1, 'admin', 'admin', 1),
(3, 'user', 'user', 0),
(4, 'user2', 'user2', 0),
(5, 'ds', 'sd', 0),
(6, 'wawan2', 'wawan2', 0),
(7, 'iku', 'iku', 0),
(8, 'as', 'as', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  ADD PRIMARY KEY (`id_cat`), ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
