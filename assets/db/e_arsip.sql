-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2019 at 02:38 AM
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
  `no_surat` varchar(30) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `dari_kpd` varchar(50) NOT NULL,
  `indeks` varchar(30) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `tanggal_input` datetime NOT NULL,
  `alamat` text,
  `perihal` varchar(30) NOT NULL,
  `isi_ringkas` text,
  `laci` varchar(20) NOT NULL,
  `guide` varchar(30) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nama`, `alamat`, `nip`, `jabatan`) VALUES
('Kiki Arnita', 'Jalan Street Nomor 1', '1700200', 'Kepala Desa');

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
  `jenis_kelamin` varchar(1) NOT NULL,
  `status` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarnegaraan` varchar(20) NOT NULL,
  `tanggal_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `usia`, `jenis_kelamin`, `status`, `alamat`, `agama`, `pekerjaan`, `kewarnegaraan`, `tanggal_buat`) VALUES
('1234567891011121', '1000000000000000', 'James Albus', 'Malang', '1911-04-13', 100, 'L', 'Single', 'Jalan Ikan Piranha Kanan Nomor 12', 'Atheist', 'Penyihir', 'Indonesia', '2019-04-13');

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
