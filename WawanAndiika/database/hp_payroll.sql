-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2017 pada 04.56
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hp_payroll`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE IF NOT EXISTS `tbl_gaji` (
  `id_gaji` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `absen` int(5) NOT NULL,
  `bonus` varchar(125) NOT NULL,
  `total_gaji` varchar(125) NOT NULL,
  `tanggal_diproses` datetime NOT NULL,
  `pph` varchar(125) NOT NULL,
  `final_gaji` varchar(125) NOT NULL,
  `tanggal_dibayar` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_gaji`, `id_pegawai`, `id_jabatan`, `absen`, `bonus`, `total_gaji`, `tanggal_diproses`, `pph`, `final_gaji`, `tanggal_dibayar`) VALUES
(45, 20, 14, 2, '1000000', '19666667', '2017-02-13 06:58:00', '81944.445833333', '19584722.554167', '2017-02-13 07:07:10'),
(46, 21, 15, 1, '1200000', '4100000', '2017-02-13 07:03:59', '17083.333333333', '4082916.6666667', '2017-02-13 07:05:27'),
(47, 13, 1, 1, '1000000', '39666667', '2017-02-13 07:32:33', '165277.77916667', '39501389.220833', '2017-02-14 02:04:13'),
(48, 18, 2, 1, '5000000', '9833333', '2017-02-13 07:45:42', '40972.220833333', '9792360.7791667', '2017-02-13 07:45:47'),
(49, 24, 2, 2, '1000000', '5666667', '2017-02-14 02:16:36', '23611.1125', '5643055.8875', '2017-02-14 02:16:42'),
(50, 23, 1, 3, '1500000', '37500000', '2017-02-14 04:50:42', '', '', '0000-00-00 00:00:00'),
(51, 22, 21, 2, '1500000', '2900000', '2017-02-14 04:51:21', '12083.333333333', '2887916.6666667', '2017-02-14 04:56:21'),
(52, 19, 2, 1, '1000000', '5833333', '2017-02-14 04:51:55', '24305.554166667', '5809027.4458333', '2017-02-14 04:52:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(45) NOT NULL,
  `gaji` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji`) VALUES
(1, 'Direktur', '40000000'),
(2, 'Sekertaris', '5000000'),
(14, 'Bendahara', '20000000'),
(15, 'Pelayan', '3000000'),
(16, 'Office Boy', '2000000'),
(17, 'Bosku', '12000000'),
(18, 'Mama', '12000000'),
(19, 'Mimi', '800000'),
(20, 'momo', '1500000'),
(21, 'Meme Comic', '1500000'),
(22, 'Gubernurs', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `no_pegawai` varchar(100) NOT NULL,
  `no_rekening` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `id_jabatan`, `status`, `nama_pegawai`, `foto`, `no_pegawai`, `no_rekening`, `alamat`) VALUES
(13, 1, 0, 'Wawan Andika', '3164_Wawan_Andika.jpg', 'KT-9987-8783-9997', '9900990099007', 'Jln. Arjuna Mencari Cinta'),
(16, 15, 0, 'Mamaku Cantik', '8042_Mamaku_Cantik.jpg', 'KT-8754-4323-9856', '8877665544332', 'Jln. Badak Agung'),
(18, 2, 0, 'Kashiwagi Yuki', '173_Sayangku.jpg', 'KT-8877-5434-9878', '9876586585478', 'Jln. Pencari Cinta Cihui'),
(19, 2, 0, 'Syafudin', '7848_Syafudin.jpg', 'KT-7685-9939-5584', '7678678767767', 'Jln. Menuju cinta abadi'),
(20, 14, 0, 'Yuyuyukirin', '190_Yuyuyukirin.jpg', 'KT-4323-4322-1233', '9999992229292', 'Jln. wawan andika tamvan'),
(21, 15, 0, 'Yukirin AKB48', '3151_Yukirin_AKB48.jpg', 'KT-4444-6534-3333', '8874376432864', 'Amati saja mataku'),
(22, 21, 2, 'Takheru Satoh', '1315_Tahkeru_Satoh.jpg', 'KT-4322-1211-2333', '0924189491274', 'Jln. Kesana kemari'),
(23, 1, 1, 'Syakhru Khan', '2643_Syakhru_Khan.jpg', 'KT-7754-3456-3456', '2988898889881', 'Jln. arjuna1'),
(24, 2, 0, 'Revan', '8213_Revan.jpg', 'KT-7754-3456-3487', '7776667766765', 'Jln. Dewi Sri\r\n'),
(25, 1, 0, 'Surya', '3216_Surya.jpeg', 'KT-6767-9899-8989', '777777777777', 'sukawati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `role`) VALUES
(4, 'user', 'user', 0),
(7, 'admin', 'admin', 1),
(8, 'mirza', 'mirza', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
