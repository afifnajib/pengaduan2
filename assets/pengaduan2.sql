-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2021 at 05:04 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(13) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `verified` enum('approved','pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `alamat`, `email`, `telp`, `foto`, `username`, `password`, `verified`) VALUES
(2333, 'testing', 'testing', 'afiefnajieb@gmail.com', '0895413343819', 'uploads/users/960x540_forests-parks-trees-leaves-roads-fences-natural-beauty-of-autumn.jpg', 'test', '098f6bcd4621d373cade4e832627b4f6', 'approved'),
(47578, 'Jennifer A. Morrison', 'asdasd', 'c@c.com', '9878698', '', 'c', '4a8a08f09d37b73795649038408b5f33', 'pending'),
(78986, 'Ellan D. Downie', 'sadasdadsasddas', 'd@d.com', '454564657', '', 'd', '8277e0910d750195b448797616e091ad', 'pending'),
(87687, 'Cheryl T. Smithers', 'asddasasd', 'e@e.com', '890896', '', 'e', 'e1671797c52e15f763380b45e841ec32', 'approved'),
(324242, 'Edward F. Sanchez', 'asdasd', '', '', '', 'h', '2510c39011c5be704182423e3a695e91', 'approved'),
(4327615, 'Stephanie P. Lederman', 'adsasddas', '', '', '', 'g', 'b2f5ff47436671b6e533d8dc3614845d', 'pending'),
(12254564, 'Beau L. Clayton', 'afsf', '', '', '', 'g', 'b2f5ff47436671b6e533d8dc3614845d', 'pending'),
(13643643, 'Joseph L. Judge', 'asdultuk', 'f@f.com', '9898696', '', 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'pending'),
(76263758, 'Bruce Tom', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta at alias, asperiores soluta illum earum accusantium quos error, perspiciatis quod sint porro nulla, rem distinctio dolorem fugit necessitatibus praesentium ipsam!', 'a@a.com', '23436', '', 'a', '0cc175b9c0f1b6a831c399e269772661', 'pending'),
(255457657, 'Clara Gilliam', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta at alias, asperiores soluta illum earum accusantium quos error, perspiciatis quod sint porro nulla, rem distinctio dolorem fugit necessitatibus praesentium ipsam!', 'b@b.com', '8886', '', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'pending'),
(2147483647, 'Afif Najib', 'Tanjung Jati', '042786065@ecampus.ut.ac.id', '081264262623', '', 'devmint@dev.com', '6201dabd608d797e39dace1c0ba9e196', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE `panduan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(13) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`, `time`) VALUES
(1, '2021-02-18', 2333, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'uploads/62b0551eff6e71f24755fcc6aa9a6d36.jpg', '0', '2021-02-21 05:25:34'),
(2, '2021-02-18', 2333, 'testing', 'uploads/fb239a7a6c9428548a8ab7b113eec538.jpg', 'proses', '2021-02-21 05:25:34'),
(3, '2021-02-20', 2333, '', 'uploads/', 'proses', '2021-02-21 05:47:18'),
(4, '2021-02-20', 2333, '', 'uploads/', '0', '2021-02-21 05:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `verified` enum('approved','pending') NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `email`, `telp`, `foto`, `username`, `password`, `verified`, `level`) VALUES
(1, 'Dev Mint', 'devmint@dev.com', '081262893354', 'assets/uploads/squidward.png', 'devmint', '6201dabd608d797e39dace1c0ba9e196', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `fk_nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `fk_id_pengaduan` (`id_pengaduan`),
  ADD KEY `fk_id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `fk_nik` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON UPDATE CASCADE;

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `fk_id_pengaduan` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
