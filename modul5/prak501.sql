-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 10:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak501`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(3, 'Ketika Cinta Bertasbih', 'Putri', 'Gramedia', 2010),
(4, 'Mariposa', 'Diana', 'Santoso', 2015),
(5, 'Keluarga Cemara', 'aurel', 'Wijaya', 2013),
(6, 'Koala Kumal', 'Dany', 'Jayaputra', 2011),
(7, 'Upin & Ipin', 'Dalang', 'Adaro', 2008),
(8, 'Milea', 'Pidia', 'Sukamulya', 2016),
(9, 'Dilan', 'Pidi', 'Sanjaya', 2014),
(10, 'Laskar Pelangi', 'habibie', 'santoso', 2017),
(11, 'Cinta Biasa', 'Putra', 'Jayaputra', 2016),
(13, 'Cinta dalam Diam', 'ryan', 'Ryanijaya', 2020),
(15, 'Cahaya Cinta Pesantren', 'Danar', 'Damari', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(500) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Putri', '255-001', 'JL. Kayutangi', '2022-05-01 10:26:42', '2022-05-01'),
(2, 'Ridha', '255-002', 'JL. Sutoyo ', '2022-04-13 12:29:19', '2022-04-15'),
(3, 'Amalia', '255-003', 'JL. Mantuil', '2022-04-01 11:30:20', '2022-04-01'),
(4, 'Firda', '255-004', 'JL. Cempaka', '2022-03-30 12:31:54', '2022-04-01'),
(5, 'Aulia', '255-005', 'JL. Dahlia', '2022-03-16 12:32:48', '2022-03-23'),
(6, 'Ryan', '255-006', 'JL. Sultan Adam', '2022-02-23 11:33:36', '2022-02-28'),
(7, 'Dany', '255-007', 'JL. Handil', '2022-03-01 12:34:55', '2022-03-01'),
(8, 'Aurel', '255-007', 'JL. Banjar Indah', '2022-04-01 12:36:58', '2022-04-02'),
(9, 'Monica', '255-009', 'JL. A Yani', '2022-02-02 12:40:44', '2022-02-22'),
(10, 'Sari', '255-010', 'JL. Bunyamin', '2022-05-02 09:44:07', '2022-05-04'),
(11, 'Adrian', '255-011', 'JL. S.Parman', '2022-04-27 12:45:28', '2022-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-04-01', '2022-04-03'),
(2, '2022-04-03', '2022-04-06'),
(3, '2022-04-07', '2022-04-10'),
(4, '2022-04-11', '2022-04-13'),
(5, '2022-04-15', '2022-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
