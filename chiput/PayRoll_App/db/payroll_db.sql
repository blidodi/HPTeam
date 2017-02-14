-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2017 pada 05.05
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_departemen`
--

CREATE TABLE IF NOT EXISTS `tbl_departemen` (
`ID_department` int(11) NOT NULL,
  `kode_depart` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gajipokok` varchar(100) NOT NULL,
  `tunjangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_departemen`
--

INSERT INTO `tbl_departemen` (`ID_department`, `kode_depart`, `jabatan`, `gajipokok`, `tunjangan`) VALUES
(1, 'MA 001', 'Manager', '15.000.000', '5.000.000'),
(2, 'Leader', '26715', '45646', ''),
(3, 'SA 001', 'Operator', '3.000.000', '500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE IF NOT EXISTS `tbl_foto` (
`ID_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE IF NOT EXISTS `tbl_gaji` (
`ID_gaji` int(11) NOT NULL,
  `kode_gaji` varchar(50) NOT NULL,
  `gajibulan` varchar(50) NOT NULL,
  `tgl_transfer` datetime(6) NOT NULL,
  `absensi` varchar(50) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `gajipokok` varchar(100) NOT NULL,
  `tunjangan` varchar(100) NOT NULL,
  `uang_mkan` varchar(100) NOT NULL,
  `uang_transport` varchar(100) NOT NULL,
  `thr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE IF NOT EXISTS `tbl_karyawan` (
`ID_karyawan` int(12) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_nikah` varchar(50) NOT NULL,
  `no_tlpn` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`ID_karyawan`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `status_nikah`, `no_tlpn`, `foto`) VALUES
(1, '20150001', 'Zakiyah Wifaqi', 'Lumajang', '2017-02-27', 'xscs', 'Islam', 'Belum Menikah', '085234567897', '1.jpg'),
(2, '20150002', 'Doni Fatya', 'Sidoarjo', '1994-05-17', 'Gelam - Sidoarjo', 'Islam', 'Belum Menikah', '085637899234', ''),
(3, '20150003', 'muhammad mirza', 'Sidoarjo', '2017-02-27', 'sdasd', 'Islam', 'Belum Menikah', '085234567897', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
`ID_status` int(12) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`ID_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`ID_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Zakiyah Wifaqi', 'wiwift', '123', 1),
(2, 'Doni Fatya', 'doni', 'dona', 2),
(6, 'muhammad mirza', 'mirza', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
 ADD PRIMARY KEY (`ID_department`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
 ADD PRIMARY KEY (`ID_file`);

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
 ADD PRIMARY KEY (`ID_gaji`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
 ADD PRIMARY KEY (`ID_karyawan`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
 ADD PRIMARY KEY (`ID_status`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
MODIFY `ID_department` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
MODIFY `ID_file` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
MODIFY `ID_gaji` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
MODIFY `ID_karyawan` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
MODIFY `ID_status` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
