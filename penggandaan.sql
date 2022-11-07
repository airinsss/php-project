-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 10:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggandaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `NoSurat` int(200) NOT NULL,
  `File` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`NoSurat`, `File`) VALUES
(112233, 'download (1).jpg'),
(2, 'ABSEN-AGUSTUS.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lembardisposisi`
--

CREATE TABLE `lembardisposisi` (
  `No` int(100) NOT NULL,
  `NoSurat` varchar(100) NOT NULL,
  `TglSurat` date NOT NULL,
  `TglSuratMasuk` date NOT NULL,
  `Disposisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembardisposisi`
--

INSERT INTO `lembardisposisi` (`No`, `NoSurat`, `TglSurat`, `TglSuratMasuk`, `Disposisi`) VALUES
(1, '112233', '2022-08-08', '2022-08-08', 'bentuk 6');

-- --------------------------------------------------------

--
-- Table structure for table `penggandaanbarang2`
--

CREATE TABLE `penggandaanbarang2` (
  `No` int(100) NOT NULL,
  `NamaMateril` text NOT NULL,
  `NoSurat` varchar(300) NOT NULL,
  `TglSurat` date NOT NULL,
  `AsalSurat` varchar(300) NOT NULL,
  `Didistribusikan` varchar(300) NOT NULL,
  `Penyimpanan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penggandaanbarang2`
--

INSERT INTO `penggandaanbarang2` (`No`, `NamaMateril`, `NoSurat`, `TglSurat`, `AsalSurat`, `Didistribusikan`, `Penyimpanan`) VALUES
(1, 'buku', '112233', '2022-08-08', '  pusdik', 'kaur alin', 'bentuk 6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lembardisposisi`
--
ALTER TABLE `lembardisposisi`
  ADD PRIMARY KEY (`NoSurat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
