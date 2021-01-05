-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 09:35 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparepart_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `spare`
--

CREATE TABLE `spare` (
  `no_barang` varchar(5) NOT NULL,
  `nama_sparepart` varchar(30) NOT NULL,
  `tanggal_masuk_barang` date NOT NULL,
  `ketersediaan_barang` enum('Ready','Kosong') NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spare`
--

INSERT INTO `spare` (`no_barang`, `nama_sparepart`, `tanggal_masuk_barang`, `ketersediaan_barang`, `kondisi`) VALUES
('23423', 'dfcsdfs', '2021-01-05', 'Kosong', 'baru'),
('24234', 'dqawd', '2021-01-05', 'Ready', 'baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spare`
--
ALTER TABLE `spare`
  ADD PRIMARY KEY (`no_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
