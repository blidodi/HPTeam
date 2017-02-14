-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 04:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penyewaan_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`id` int(10) NOT NULL,
  `kode_buku` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `isbn`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `jenis`, `foto`) VALUES
(16, 'CB-D.13-51', '979-752-212-1', 'Kisah rumah kasih', 'Suwito Sarjono', 'Bandung : Dar! Mizan', 2005, 'Cerpen', 'Cerpen'),
(17, 'CB-D.13-52', '978-602-18767-0-1', 'Kebelet BBM : buru-buru move on ', 'Rudi Candra Putra', 'Bojonegoro : Soega Publishing', 2012, 'Cerpen', 'Cerpen Kebelet BBM.jpg'),
(18, 'CB-D.13-53', '978-602-1083-15-4', 'Malaikat bertanduk : kumpulan cerpen', 'Muhammad Akis ; editor, Muhammad Arief', 'Absolute Media ', 2015, 'Cerpen', 'Cepen Malaikat Bertanduk.jpg'),
(19, 'CB-D.13-54', '978-602-7748-46-0', 'Harapku untukmu : kumpulan cerpen ', 'Yanti Moesa Sipayung ; editor, Nurry ', 'AE Publishing', 2013, 'Cerpen', 'Cerpen Harapku.jpg'),
(20, 'CB-D.13-55', '978-602-7748-81-1', 'Hanya ada satu cinta : kumpulan cerpen', 'Al Khazim Sewulampu', 'AE Publishing', 2014, 'Cerpen', 'Cerpen Hanya Satu cinta.jpg'),
(21, 'CB-D.13-56', '978-602-7748-18-7', 'Ingin terbang tinggi : kumpulan cerpen', 'Antologi Pelangi ; penyunting, Mitha Junia ', 'AE Publishing', 2012, 'Cerpen', 'Cerpen Terbang tinggi.jpg'),
(22, 'CB-D.13-57', '978-602-7748-13-2', 'Penantian cinta : antologi cerpen ', 'Nur Hanifah  ', 'AE Publishing', 2012, 'Cerpen', 'Cerpen Penantian cinta.jpg'),
(23, 'CB-D.13-58', '978-602-1648-06-3', 'Membina majalah dinding ', 'Nursisto ; penyunting, Sjamsu Dradjad ', 'Adicita Karya Nusa', 2013, 'Majalah', 'Majalah membina majalah dinding.jpg'),
(24, 'CB-D.13-59', '978-979-1032-68-1', 'Manajemen majalah sekolah', 'Ana Musfira Yeri, Sri Handayani ; editor, Agus Bud', 'Buku Katta', 2013, 'Majalah', 'Majalah manajemen sekolah.jpg'),
(25, 'CB-D.13-510', '978-979-3548-27-2', 'Mari berkreasi : kumpulan majalah dinding', 'M. Sobry Sutikno, Martadinata', 'Yayasan Nusa Tenggara Pratama', 2014, 'Majalah', 'Majalah berkreasi.jpg'),
(26, 'CB-D.13-511', '978-979-3548-27-2', 'Arsitektur komputer : konsep, evolusi dan implementasi', 'M. Sobry Sutikno, Martadinata', 'Yayasan Nusa Tenggara Pratama', 2014, 'Komputer', 'Komputer arsitektur kompute.jpg'),
(27, 'CB-D.13-512', '978-602-328-190-9', 'Manajemen perguruan tinggi komputer', 'Muhamad Wayong', 'Alauddin University Press', 2016, 'Komputer', 'Komputer manajemen perguruan.jpg'),
(28, 'CB-D.13-513', '978-979-3559-30-8', 'Pengenalan jaringan komputer ', '-', 'Badan Pendidikan dan Penelitian Kesejahteraan Sosi', 2013, 'Komputer', 'Komputer pengenalan komputer.jpg'),
(29, 'CB-D.13-514', '978-979-3490-52-6', 'Buku praktikum komputer', 'penyusun, Ach. Agus Priyono', 'Ach. Agus Priyono', 2015, 'Komputer', 'Komputer praktikum komputer.jpg'),
(30, 'CB-D.13-515', '978-602-7638-27-3', 'Olimpiade komputer : kumpulan soal dan pembahasan', 'Lembaga Olimpiade Pendidikan Indonesia', 'Bina Prestasi Insani', 2014, 'Komputer', 'Komputer olimpiade komputer.jpg'),
(31, 'CB-D.13-516', '978-602-7748-08-8', 'Semua karena cinta : sebuah novel', 'Fitri Noviani ; penyunting, Radindra Rahman ', 'AE Publishing', 2012, 'Novel', 'Novel semua karena cinta.jpg'),
(32, 'CB-D.13-517', '978-602-1189-93-1', 'Sendiri dulu : sebuah novel', 'Nurlaeli Umar', 'AE Publishing', 2016, 'Novel', 'Novel sendiri dulu.jpg'),
(33, 'CB-D.13-518', '978-602-8783-32-3', 'Jadi saksi cintanya : sebuah novel inspiratif', 'Abner Hubernus Sito, Giovanni Mahendra Christi', 'Amara Books', 2013, 'Novel', 'Novel cinta saksi.jpg'),
(34, 'CB-D.13-519', '978-979-1025-43-0', 'Bisikan tetesan hujan : sebuah novel', 'Johan M', 'Arga Puji Press', 2013, 'Novel', 'Novel bisikan hujan.jpg'),
(35, 'CB-D.13-520', '978-979-1025-47-8', 'Ada bahagia menanti di ujung derita : sebuah novel', '-', 'Arga Puji Press', 2013, 'Novel', 'Novel Bahagia menanti.jpg'),
(42, 'CB-D.13-521', '978-602-8519-93-9', 'Golfer Magazine', 'Hendika Permana', 'Harmoni Permata', 2016, 'Majalah', 'magz2.png');

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE IF NOT EXISTS `kwitansi` (
`id` int(10) NOT NULL,
  `no` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `uang_sejumlah` varchar(50) NOT NULL,
  `untuk_pembayaran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`id`, `no`, `nama`, `uang_sejumlah`, `untuk_pembayaran`, `status`) VALUES
(1, '001', 'Surya', '5000', 'Penyewaan Buku PHP My Admin', 'Lunas'),
(3, '002', 'Negara', '6000', 'Penyewaan Buku SQL', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(10) NOT NULL,
  `kode_member` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `kode_member`, `nama`, `alamat`, `foto`) VALUES
(20, '[KM-1] Adhi Surya', 'Adhi Surya', 'Gianyar', '1456840515994.jpg'),
(21, '[KM-2] PithaLoka', 'PithaLoka', 'Denpasar', '280454_229529683744011_1409078_o.jpg'),
(22, '[KM-3] Ovena', 'Ovena', 'Badung', '296988_172606549485582_1096644052_n.jpg'),
(23, '[KM-4] Rival Bamen', 'Rival Bamen', 'Klungkung', '204757_1666894513747_1951250_o.jpg'),
(24, '[KM-5] Ketut Moglong', 'Ketut Moglong', 'Gianyar', '280454_229529683744011_1409078_o.jpg'),
(26, '[KM-6] Komang Adi', 'Komang Adi', 'Gianyar', '204757_1666894513747_1951250_o.jpg'),
(27, '[KM-7] Ketut Nugrah', 'Ketut Nugrah', 'Badung', '296988_172606549485582_1096644052_n.jpg'),
(28, '[KM-8] Nyoman Angsa', 'Nyoman Angsa', 'Klungkung', '280454_229529683744011_1409078_o.jpg'),
(29, '[KM-9] Kadek Penyu', 'Kadek Penyu', 'Badung', '204757_1666894513747_1951250_o.jpg'),
(30, '[KM-10] Putu Unggah', 'Putu Unggah', 'Klungkung', '296988_172606549485582_1096644052_n.jpg'),
(31, '[KM-11] Gede Kobe', 'Gede Kobe', 'Denpasar', '296988_172606549485582_1096644052_n.jpg'),
(32, '[KM-12] Wayan Kotri', 'Wayan Putri', 'Badung', '204757_1666894513747_1951250_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
`id` int(10) NOT NULL,
  `kode_kembali` varchar(50) NOT NULL,
  `kode_user` varchar(50) NOT NULL,
  `kode_buku` varchar(50) NOT NULL,
  `kode_member` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `total_denda` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `kode_kembali`, `kode_user`, `kode_buku`, `kode_member`, `tanggal_pinjam`, `tanggal_kembali`, `total_denda`) VALUES
(15, '[KPB-1] 708091', '[KU-1] Surya', 'CB-D.13-51', '[KM-1] Adhi Surya', '2017-02-01', '2017-02-02', '8000'),
(16, '[KPB-2] 708092', '[KU-2] Adhi', 'CB-D.13-52', '[KM-2] PithaLoka', '0000-00-00', '2017-02-15', '3000'),
(17, '[KPB-3] 708093', '[KU-3] Surya Negara', 'CB-D.13-53', '[KM-3] Ovena', '2017-02-23', '2017-02-23', '6000'),
(19, '[KPB-5] 708095', '[KU-1] Surya', 'CB-D.13-55', '[KM-5] Ketut Moglong', '0000-00-00', '2017-02-24', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE IF NOT EXISTS `penyewa` (
`id` int(10) NOT NULL,
  `kode_sewa` varchar(50) NOT NULL,
  `kode_user` varchar(50) NOT NULL,
  `kode_buku` varchar(50) NOT NULL,
  `kode_member` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id`, `kode_sewa`, `kode_user`, `kode_buku`, `kode_member`, `judul`, `tanggal_pinjam`, `tanggal_kembali`, `harga`) VALUES
(46, '[KP-1] 16101431', '[KU-1] Surya', 'CB-D.13-51', '[KM-1] Adhi Surya', 'Kisah rumah kasih', '2017-02-01', '2017-02-11', '5000'),
(47, '[KP-2] 16101432', '[KU-2] Adhi', 'CB-D.13-52', '[KM-2] PithaLoka', 'Kebelet BBM : buru-buru move on ', '2017-02-01', '2017-02-11', '20000'),
(48, '[KP-3] 16101433', '[KU-3] Surya Negara', 'CB-D.13-53', '[KM-3] Ovena', 'Malaikat bertanduk : kumpulan cerpen', '2017-02-15', '2017-02-24', '6000'),
(49, '[KP-4] 16101434', '[KU-1] Surya', 'CB-D.13-54', '[KM-4] Rival Bamen', 'Olimpiade komputer : kumpulan soal dan pembahasan', '2017-02-22', '2017-02-25', '4000'),
(50, '[KP-5] 16101435', '[KU-3] Surya Negara', 'CB-D.13-54', '[KM-4] Rival Bamen', 'Sendiri dulu : sebuah novel', '2017-02-24', '2017-02-25', '12000'),
(51, '[KP-6] 16101436', '[KU-1] Surya', 'CB-D.13-53', '[KM-3] Ovena', 'Semua karena cinta : sebuah novel', '2017-02-26', '2017-02-27', '9000'),
(52, '[KP-7] 16101437', '[KU-2] Adhi', 'CB-D.13-57', '[KM-7] Ketut Nugrah', 'Olimpiade komputer : kumpulan soal dan pembahasan', '2017-02-26', '2017-02-27', '8000'),
(53, '[KP-8] 16101438', '[KU-3] Surya Negara', 'CB-D.13-57', '[KM-9] Kadek Penyu', 'Sendiri dulu : sebuah novel', '2017-02-01', '2017-02-20', '7000'),
(54, '[KP-9] 16101439', '[KU-1] Surya', 'CB-D.13-59', '[KM-1] Adhi Surya', 'Harapku untukmu : kumpulan cerpen ', '2017-02-16', '2017-02-18', '15000'),
(55, '[KP-10] 161014310', '[KU-1] Surya', 'CB-D.13-58', '[KM-4] Rival Bamen', 'Malaikat bertanduk : kumpulan cerpen', '2017-02-12', '2017-02-14', '20000'),
(56, '[KP-11] 161014311', '[KU-2] Adhi', 'CB-D.13-55', '[KM-4] Rival Bamen', 'Arsitektur komputer : konsep, evolusi dan implemen', '2017-02-21', '2017-02-24', '25000'),
(57, '[KP-12] 161014312', '[KU-1] Surya', 'CB-D.13-56', '[KM-7] Ketut Nugrah', 'Pengenalan jaringan komputer ', '2017-02-23', '2017-02-25', '3000'),
(58, '[KP-13] 161014313', '[KU-3] Surya Negara', 'CB-D.13-59', '[KM-5] Ketut Moglong', 'Arsitektur komputer : konsep, evolusi dan implemen', '2017-02-12', '2017-02-15', '4000'),
(59, '[KP-14] 161014314', '[KU-1] Surya', 'CB-D.13-58', '[KM-6] Komang Adi', 'Manajemen perguruan tinggi komputer', '2017-02-17', '2017-02-18', '17000'),
(60, '[KP-15] 161014315', '[KU-3] Surya Negara', 'CB-D.13-52', '[KM-3] Ovena', 'Olimpiade komputer : kumpulan soal dan pembahasan', '2017-02-24', '2017-02-28', '13000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `kode_user` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `kode_user`, `nama`, `username`, `password`) VALUES
(5, '[KU-1] Surya', 'Suryaa', 'Adminsurya', '123123'),
(6, '[KU-2] Adhi', 'Adhi', 'Adminadhi', '123123'),
(7, '[KU-3] Surya Negara', 'Surya Negara', 'Adminsuryanegara', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id`), ADD KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`), ADD KEY `kode_member` (`kode_member`), ADD KEY `kode_member_2` (`kode_member`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
 ADD PRIMARY KEY (`id`), ADD KEY `kode_kembali` (`kode_kembali`,`kode_user`,`kode_buku`,`kode_member`), ADD KEY `kode_buku` (`kode_buku`), ADD KEY `kode_user` (`kode_user`), ADD KEY `kode_member` (`kode_member`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
 ADD PRIMARY KEY (`id`), ADD KEY `kode_sewa` (`kode_sewa`,`kode_user`,`kode_buku`,`kode_member`), ADD KEY `kode_buku` (`kode_buku`), ADD KEY `kode_user` (`kode_user`), ADD KEY `kode_member` (`kode_member`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `kode_user` (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `kwitansi`
--
ALTER TABLE `kwitansi`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`kode_member`) REFERENCES `member` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyewa`
--
ALTER TABLE `penyewa`
ADD CONSTRAINT `penyewa_ibfk_1` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penyewa_ibfk_2` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penyewa_ibfk_3` FOREIGN KEY (`kode_member`) REFERENCES `member` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
