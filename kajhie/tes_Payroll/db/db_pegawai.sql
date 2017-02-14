-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2017 pada 05.12
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
`id_absen` int(10) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` int(2) NOT NULL,
  `bonus` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absen`, `id_pegawai`, `tanggal`, `keterangan`, `bonus`) VALUES
(1, 1, '2017-01-01', 1, 0),
(2, 2, '2017-01-01', 1, 0),
(3, 1, '2017-01-02', 1, 0),
(4, 2, '2017-01-02', 1, 0),
(5, 1, '2017-01-02', 1, 0),
(6, 2, '2017-01-02', 1, 0),
(7, 1, '2017-01-03', 1, 0),
(8, 2, '2017-01-03', 1, 0),
(9, 1, '2017-01-04', 1, 0),
(10, 2, '2017-01-04', 1, 0),
(11, 1, '2017-01-05', 1, 0),
(12, 2, '2017-01-05', 1, 0),
(13, 1, '2017-01-06', 1, 0),
(14, 2, '2017-01-06', 1, 0),
(29, 1, '2017-01-07', 1, 0),
(30, 2, '2017-01-07', 1, 0),
(31, 1, '2017-01-15', 1, 0),
(32, 2, '2017-01-15', 1, 0),
(33, 1, '2017-01-15', 1, 0),
(34, 2, '2017-01-15', 1, 0),
(35, 1, '2017-02-14', 1, 0),
(36, 2, '2017-02-14', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_absensi`
--

CREATE TABLE IF NOT EXISTS `keterangan_absensi` (
`id_keterangan_gaji` int(2) NOT NULL,
  `nama_keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterangan_absensi`
--

INSERT INTO `keterangan_absensi` (`id_keterangan_gaji`, `nama_keterangan`) VALUES
(1, 'masuk'),
(2, 'sakit'),
(3, 'cuti'),
(4, 'tanpa keterangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_bonus`
--

CREATE TABLE IF NOT EXISTS `keterangan_bonus` (
`id_bonus` int(5) NOT NULL,
  `nama_bonus` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterangan_bonus`
--

INSERT INTO `keterangan_bonus` (`id_bonus`, `nama_bonus`) VALUES
(0, 'tidak ada'),
(1, 'lembur hari masuk'),
(2, 'lembur hari libur'),
(3, 'bonus projek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL,
  `gaji_pokok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`, `gaji_pokok`) VALUES
(1, 'CEO', 250000),
(2, 'ADMIN', 150000),
(3, 'USER', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_ktp` text NOT NULL,
  `alamat_sekarang` text NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat_ktp`, `alamat_sekarang`, `agama`, `status_perkawinan`, `kewarganegaraan`, `no_telp`, `foto`) VALUES
(1, 2147483647, 'Sukidi', 'Magelang', '1997-06-20', 'jl. manukan no 49 Kab. Magelang', 'jl. diponegoro no 21 Denpasar', 'Belum Punya', 'Kawin', 'WNI', '0893', '1453_Sukidi.jpeg'),
(2, 55555, 'Sugriwo', 'Malang', '1989-03-11', 'jl. sumbersari no 47 Kota Malang', 'jl. batuyang no 06 Sukawati Kab. Gianyar', 'Belum Tentu', 'Belum kawi', 'WNI', '1953', '7485_Sugriwo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_pegawai` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pegawai`, `user_name`, `email`, `password`, `level`) VALUES
(1, 'user', 'user@user.com', 'user', 3),
(2, 'admin', 'admin@admin.com', 'admin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
 ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `keterangan_absensi`
--
ALTER TABLE `keterangan_absensi`
 ADD PRIMARY KEY (`id_keterangan_gaji`);

--
-- Indexes for table `keterangan_bonus`
--
ALTER TABLE `keterangan_bonus`
 ADD PRIMARY KEY (`id_bonus`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `keterangan_absensi`
--
ALTER TABLE `keterangan_absensi`
MODIFY `id_keterangan_gaji` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `keterangan_bonus`
--
ALTER TABLE `keterangan_bonus`
MODIFY `id_bonus` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
