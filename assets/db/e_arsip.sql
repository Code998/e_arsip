-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2019 at 09:37 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_surat`
--

CREATE TABLE IF NOT EXISTS `arsip_surat` (
  `jenis` varchar(25) NOT NULL,
  `no_surat` bigint(16) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `dari_kpd` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `laci` varchar(20) NOT NULL,
  `guide` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1000000000000003 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip_surat`
--

INSERT INTO `arsip_surat` (`jenis`, `no_surat`, `nik`, `dari_kpd`, `tanggal_surat`, `perihal`, `laci`, `guide`) VALUES
('Surat Keluar', 1000000000000000, 1234567891011121, 'James Albus', '2019-04-12', 'Surat Keterangan Domisili', 'Surat Keterangan', 'Domisili'),
('Surat Keluar', 1000000000000001, 1234567891011121, 'James Albus', '2019-04-13', 'Surat Keterangan SKCK', 'Surat Keterangan', 'SKCK'),
('Surat Keluar', 1000000000000002, 1234567891011121, 'James Albus', '2019-04-13', 'Surat Pengantar KK', 'Surat Pengantar', 'KK');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE IF NOT EXISTS `penduduk` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarnegaraan` varchar(20) NOT NULL,
  `tanggal_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat`, `agama`, `pekerjaan`, `kewarnegaraan`, `tanggal_buat`) VALUES
('1234567891011121', '1000000000000000', 'James Albus', 'Malang', '1911-04-13', 100, 'Jalan Ikan Piranha Kanan Nomor 12', 'Atheist', 'Penyihir', 'Indonesia', '2019-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsip_surat`
--
ALTER TABLE `arsip_surat`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip_surat`
--
ALTER TABLE `arsip_surat`
  MODIFY `no_surat` bigint(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000000000000003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
