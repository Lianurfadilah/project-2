-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 01:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drjamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(3) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nik` int(15) NOT NULL,
  `keluhan` varchar(1000) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `notlp` int(12) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `nik`, `keluhan`, `alamat`, `umur`, `notlp`, `status`) VALUES
(32, 'wdgjwgj', 38463864, 'sksfdksd', 'sdsk', '23', 24824, 1),
(33, 'hjkgkk', 2411, 'jgjgj', 'jgkjg', '23', 23225, 0),
(48, 'jll', 880, 'kh', 'knkn', '809', 999, 0),
(50, 'ghj', 785785, 'dfsd', 'ghsdf', '1000', 982639, 1),
(51, 'asjgdajsgdj', 2632683, 'sahdshfkhsd', 'ashdshdfkhk', '11', 2147483647, 0),
(52, 'abdul', 2147483647, 'pusing', 'indramayu\r\n', '12', 2147483647, 1),
(53, 'lia', 1471268153, 'pusing', 'indramayu', '20', 7387490, 1),
(54, 'saya', 2147483647, 'pusing', 'indramayu', '12', 2147483647, 1),
(56, 'ridwan', 76867, 'pusing', 'tasikmalaya', '20', 909, 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(3) NOT NULL,
  `type` varchar(20) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `nik_petugas` int(25) NOT NULL,
  `umur_petugas` varchar(20) NOT NULL,
  `alamat_petugas` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `type`, `nama_petugas`, `nik_petugas`, `umur_petugas`, `alamat_petugas`, `password`, `username`) VALUES
(17, 'Admin', 'lia', 2147483647, '19', 'indramayu', 'admin', 'admin'),
(18, 'Dokter', 'dokter', 142643, '12', 'indramayu', 'dokter', 'dokter'),
(19, 'Apoteker', 'lia', 2147483647, '123', 'jhds', 'apotek', 'apotek');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(3) NOT NULL,
  `id_pasien` int(3) DEFAULT NULL,
  `id_petugas` int(3) DEFAULT NULL,
  `tgl_jam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `id_pasien`, `id_petugas`, `tgl_jam`) VALUES
(1, 9, NULL, NULL),
(13, 23, NULL, '2018-05-09 20:19:03'),
(14, 24, NULL, '2018-05-09 20:19:03'),
(15, 24, NULL, '2018-05-09 20:19:37'),
(16, 2018, NULL, '2018-05-09 20:19:37'),
(17, 25, NULL, '2018-05-09 20:23:06'),
(18, 2018, NULL, '2018-05-09 20:23:06'),
(19, 26, NULL, '2018-05-09 20:24:00'),
(20, 2018, NULL, '2018-05-09 20:24:00'),
(21, 27, NULL, '2018-05-09 20:24:56'),
(22, 2018, NULL, '2018-05-09 20:24:56'),
(23, NULL, NULL, '2018-05-09 20:27:22'),
(24, NULL, NULL, '2018-05-09 20:28:55'),
(25, NULL, NULL, '2018-05-09 20:30:05'),
(26, 32, NULL, '2018-05-09 20:30:57'),
(27, 33, NULL, '2018-05-09 20:31:33'),
(28, 34, NULL, '2018-05-16 11:11:20'),
(29, 35, NULL, '2018-05-16 11:12:21'),
(30, 36, NULL, '2018-05-16 11:12:50'),
(31, 37, NULL, '2018-05-16 11:20:32'),
(32, 38, NULL, '2018-05-16 11:28:45'),
(33, 39, NULL, '2018-05-16 11:29:06'),
(34, 40, NULL, '2018-05-16 11:29:36'),
(35, 41, NULL, '2018-05-16 11:41:43'),
(36, 42, NULL, '2018-05-16 11:43:04'),
(37, 43, NULL, '2018-05-16 11:44:10'),
(38, 44, NULL, '2018-05-16 11:44:56'),
(39, 45, NULL, '2018-05-16 11:45:38'),
(40, 46, NULL, '2018-05-16 11:46:09'),
(41, 47, NULL, '2018-05-16 11:47:05'),
(42, 48, NULL, '2018-05-16 11:48:03'),
(43, 49, NULL, '2018-05-16 11:50:26'),
(44, 50, NULL, '2018-05-16 11:53:36'),
(45, 51, NULL, '2018-05-16 11:55:08'),
(46, 50, NULL, '2018-05-17 13:05:34'),
(47, 51, NULL, '2018-05-28 15:45:54'),
(48, 52, NULL, '2018-05-29 23:44:40'),
(49, 53, NULL, '2018-05-30 10:25:02'),
(50, 54, NULL, '2018-05-30 11:00:36'),
(51, 55, NULL, '2018-05-30 11:43:22'),
(52, 56, NULL, '2018-05-30 13:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_pasien`, `id_obat`) VALUES
(1, 51, 0),
(2, 52, 0),
(3, 53, 0),
(4, 54, 0),
(5, 55, 0),
(6, 56, 0);

-- --------------------------------------------------------

--
-- Table structure for table `satuan_dasar`
--

CREATE TABLE `satuan_dasar` (
  `id_obat` int(3) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `id_satuan_dasar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok_obat`
--

CREATE TABLE `stok_obat` (
  `id_obat` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `quantity_masuk` varchar(10) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga_obat` varchar(20) NOT NULL,
  `jumlah_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_obat`
--

INSERT INTO `stok_obat` (`id_obat`, `date`, `quantity_masuk`, `nama_obat`, `harga_obat`, `jumlah_obat`) VALUES
(2, '2018-05-29 22:03:22', '12', 'paracetamol', '12000', '12'),
(3, '2018-05-30 08:06:02', '12', 'promag', '10000', '11'),
(4, '2018-05-30 09:48:37', '2', 'as', '5552', '2'),
(5, '2018-05-30 11:16:35', '1', 'bodrex', '1000', '2'),
(8, '2018-05-30 14:19:34', '2', 'milanta', '12000', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `stok_obat`
--
ALTER TABLE `stok_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stok_obat`
--
ALTER TABLE `stok_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
