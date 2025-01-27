-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2025 at 06:09 AM
-- Server version: 9.1.0
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_transaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `code_jenis` char(2) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`code_jenis`, `keterangan`) VALUES
('1', 'DD'),
('2', 'HD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `code_merk` char(1) NOT NULL,
  `merk_disket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_merk`
--

INSERT INTO `tbl_merk` (`code_merk`, `merk_disket`) VALUES
('D', 'DYSAN'),
('M', 'MAXELL'),
('V', 'VERBATIM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `no_pembelian` char(4) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `code_merk` char(1) NOT NULL,
  `code_jenis` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jml_beli` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`no_pembelian`, `tgl_pembelian`, `nama_pelanggan`, `code_merk`, `code_jenis`, `jml_beli`) VALUES
('P001', '2024-12-30', 'Nazaw', 'd', '2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`code_jenis`);

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`code_merk`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`no_pembelian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
