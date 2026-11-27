-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2026 at 02:37 AM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calon_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `pekerjaan_ortu` varchar(100) DEFAULT NULL,
  `matematika` decimal(5,2) NOT NULL,
  `inggris` decimal(5,2) NOT NULL,
  `umum` decimal(5,2) NOT NULL,
  `rata_rata` decimal(5,2) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `kode`, `nama`, `jenis_kelamin`, `ttl`, `asal_sekolah`, `pekerjaan_ortu`, `matematika`, `inggris`, `umum`, `rata_rata`, `keterangan`, `created_at`) VALUES
(1, 'A1-101-9', 'gita', 'Perempuan', 'lebak,16 januari 2009', 'smk 1 sobang', 'wiraswasta', 90.00, 80.00, 85.00, 85.00, 'Lulus', '2026-11-11 01:30:05'),
(2, 'A2-102-9', 'anjani', 'Perempuan', 'jakarta, 09 november 2007', 'smkn 1 jakarta', 'guru', 67.00, 70.00, 55.00, 64.00, 'Cadangan', '2026-11-11 01:31:40'),
(3, 'A1-103-9', 'Azwa', 'Laki-laki', 'lebak 23 maret 2004', 'smkn 1 lebak', 'guru', 90.00, 90.00, 80.00, 86.67, 'Lulus', '2026-11-11 01:32:52'),
(4, 'A2-104-9', 'mimmaa', 'Perempuan', 'lebak 02 januari 2009', 'smkn 1 lebak', 'PNS', 90.00, 95.00, 85.00, 90.00, 'Lulus', '2026-11-11 01:34:04'),
(5, 'A3-105-9', 'drajat', 'Laki-laki', 'depok 24 februari 2008', 'smkn 1 depok', 'wiraswasta', 80.00, 80.00, 80.00, 80.00, 'Lulus', '2026-11-11 01:35:21'),
(6, 'A3-106-9', 'gina', 'Laki-laki', 'jakarta, 09 november 2005', 'smkn 1 jakarta', 'wiraswasta', 40.00, 50.00, 30.00, 40.00, 'Tidak Lulus', '2026-11-11 01:36:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
