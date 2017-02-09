-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2017 pada 08.07
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_gaji`, `id_pegawai`, `id_jabatan`, `absen`, `bonus`, `total_gaji`, `tanggal_diproses`, `pph`, `final_gaji`, `tanggal_dibayar`) VALUES
(16, 13, 1, 3, '1500000', '37500000', '2017-02-09 03:08:38', '156250', '37343750', '2017-02-09 04:12:37'),
(17, 16, 15, 3, '10000', '37000', '2017-02-09 03:44:13', '154.16666666667', '36845.833333333', '2017-02-09 04:08:12'),
(18, 18, 2, 1, '1500000', '6333333', '2017-02-09 04:42:44', '26388.8875', '6306944.1125', '2017-02-09 06:47:39'),
(19, 23, 16, 1, '1000000', '2933333', '2017-02-09 07:10:28', '12222.220833333', '2921110.7791667', '2017-02-09 07:10:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(45) NOT NULL,
  `gaji` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji`) VALUES
(1, 'Direktur', '40000000'),
(2, 'Sekertaris', '5000000'),
(14, 'Bendahara', '20000000'),
(15, 'Pelayan', '30000'),
(16, 'Office Boy', '2000000');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `id_jabatan`, `status`, `nama_pegawai`, `foto`, `no_pegawai`, `no_rekening`, `alamat`) VALUES
(13, 1, 0, 'Wawan Andika', '3164_Wawan_Andika.jpg', 'KT-9987-8783-9997', '9900990099007', 'Jln. Arjuna Mencari Cinta'),
(16, 15, 0, 'Mamaku Cantik', '8042_Mamaku_Cantik.jpg', 'KT-8754-4323-9856', '8877665544332', 'Jln. Badak Agung'),
(18, 2, 0, 'Kashiwagi Yuki', '173_Sayangku.jpg', 'KT-8877-5434-9878', '9876586585478', 'Jln. Pencari Cinta Cihui'),
(19, 2, 0, 'Syafudin', '7848_Syafudin.jpg', 'KT-7685-9939-5584', '767867876776788', 'Jln. Menuju cinta abadi'),
(20, 14, 0, 'Yuyuyukirin', '190_Yuyuyukirin.jpg', 'KT-4323-4322-1233', '999999222929292', 'Jln. wawan andika tamvan'),
(21, 15, 0, 'Yukirin AKB48', '3151_Yukirin_AKB48.jpg', 'KT-4444-6534-3333', '887437643286483', 'Amati saja mataku'),
(22, 1, 0, 'Takheru Satoh', '1315_Tahkeru_Satoh.jpg', 'KT-4322-1211-2333', '092418949127498', 'Jln. Kesana kemari'),
(23, 16, 0, 'Mamamia', '504_Mamamia.JPG', 'KT-7754-3456-3456', '2988898889881', 'Jln. arjuna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'accounting', 'accounting', 0),
(4, 'user', 'user', 0),
(5, 'amans', 'amans', 0);

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
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
