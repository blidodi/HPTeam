-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 05:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sewa_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `kategori` varchar(11) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun`, `isbn`, `kategori`, `cover`) VALUES
(4, 'Musim bunga', 'Dodi Saputra', 'AG Publishing', 2014, '978-602-1371-39-8', 'N01', 'musimbunga.jpg'),
(5, 'Belajar dengan Photoshop CS3', 'Nasin El-Kabumaini', 'IPTEK Bandung', 2015, '978-602-227-205-2', 'K01', 'photoshop.jpg'),
(6, 'Sangkuriang', 'Resi Dwi Yurianti', 'CV. Map Plus', 2013, '978-602-1229-17-0', 'C01', 'sangkuriang.jpg'),
(8, 'Pemrograman PHP Codelgniter', 'Y.M. Kusuma Ardhana', 'Jasakom', 2013, '978-979-1090-78-0', 'K01', 'php_ci.jpg'),
(9, 'Ayat-ayat Cinta 2', 'Habiburrahman', 'Republika', 2015, '978-602-0822-15-0', 'N01', 'cover-buku-ayat-ayat-cinta-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE IF NOT EXISTS `kategori_buku` (
`id` int(11) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id`, `kode`, `kategori`, `harga`) VALUES
(1, 'K01', 'Komputer', 8000),
(2, 'N01', 'Novel', 7000),
(3, 'C01', 'Cerita', 5000),
(4, 'O11', 'Komik', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE IF NOT EXISTS `kembali` (
`id` int(11) NOT NULL,
  `member` varchar(50) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `buku` varchar(50) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kembali`
--

INSERT INTO `kembali` (`id`, `member`, `tgl_sewa`, `tgl_kembali`, `buku`, `denda`) VALUES
(12, 'M001', '2017-02-10', '2017-02-12', '978-602-1371-39-8', 1000),
(13, 'M003', '2017-02-13', '2017-02-17', '978-602-1229-17-0', 1000),
(14, 'M002', '2017-02-13', '2017-02-16', '978-602-0822-15-0', 500);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(11) NOT NULL,
  `no_member` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `no_member`, `nama`, `alamat`, `telpon`) VALUES
(1, 'M001', 'Surya', 'Batuyang', '0989736222'),
(2, 'M002', 'Mirza', 'Malang', '0827382752'),
(4, 'M003', 'Chiput', 'Surabaya', '9874783487');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE IF NOT EXISTS `sewa` (
`id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kembali` date NOT NULL,
  `member` varchar(50) NOT NULL,
  `buku` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `tanggal`, `kembali`, `member`, `buku`, `harga`, `status`) VALUES
(9, '2017-02-10', '2017-02-12', 'M001', '978-602-1371-39-8', '5000', 'Kembali'),
(10, '2017-02-13', '2017-02-16', 'M003', '978-602-1229-17-0', '7000', 'Kembali'),
(11, '2017-02-13', '2017-02-16', 'M002', '978-602-0822-15-0', '8000', 'Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin'),
(2, 'Rival', 'rival', 'rival');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kembali`
--
ALTER TABLE `kembali`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
