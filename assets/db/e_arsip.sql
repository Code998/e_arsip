-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 01:42 AM
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
CREATE DATABASE IF NOT EXISTS `e_arsip` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_arsip`;

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
  `no_surat` int(11) NOT NULL,
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
  `nama_pe` varchar(50) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `admin` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip_surat`
--

INSERT INTO `arsip_surat` (`jenis`, `no_surat`, `nik`, `dari_kpd`, `indeks`, `tanggal_surat`, `tanggal_input`, `alamat`, `perihal`, `isi_ringkas`, `laci`, `guide`, `nama_pe`, `file`, `admin`) VALUES
('Surat Keluar', 2, '1234567891011121', 'James Albus', NULL, NULL, '2019-04-24 09:14:30', NULL, 'Surat Pengantar KTP', NULL, 'Surat Pengantar', 'KTP', 'Kiki Arnita', NULL, 'admin'),
('Surat Masuk', 3, NULL, 'Lame', '', '2019-04-01', '2019-04-25 02:14:47', '', 'asdasd', 'asdasd', 'Surat Dinas', 'Tugas Dinas', '', 'Rasional Bentuk Akar.pdf', 'admin'),
('Surat Keluar', 4, '1231231231231231', 'James Albas', NULL, NULL, '2019-04-27 04:37:20', NULL, 'Surat Pengantar KTP', NULL, 'Surat Pengantar', 'KTP', 'Kiki Arnita', NULL, 'admin'),
('Surat Keluar', 5, '1231231231231231', 'James Albas', NULL, NULL, '2019-04-28 18:06:59', NULL, 'Surat Keterangan SKCK', NULL, 'Surat Keterangan', 'SKCK', 'Kiki Arnita', NULL, 'admin'),
('Surat Keluar', 6, '1231231231231231', 'James Albas', NULL, NULL, '2019-04-28 18:07:20', NULL, 'Surat Keterangan Domisili', NULL, 'Surat Keterangan', 'Domisili', 'Kiki Arnita', NULL, 'admin'),
('Surat Masuk', 7, NULL, 'asdas', 'dasd', '2019-04-01', '2019-04-29 06:55:41', 'asdas', 'asdasd', 'asd', 'Surat Umum', 'Pengantar', '', 'Screenshot from 2019-04-29 03-29-32.png', 'admin'),
('Surat Masuk', 8, NULL, 'asdasd', 'as', '2019-04-03', '2019-04-29 06:57:09', 'asdasd', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'Surat Umum', 'Pengantar', '', 'Screenshot from 2019-04-27 04-54-14.png', 'admin'),
('Surat Keluar', 9, '1234567891011121', 'James Albus', NULL, NULL, '2019-04-29 07:24:52', NULL, 'Surat Keterangan Domisili', NULL, 'Surat Keterangan', 'Domisili', '', NULL, 'admin');

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
('Kiki Arnita S.M', 'Jalan Street Nomor 1', '1700201', 'Kepala Desa');

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
('1231231231231231', '1111111111111112', 'James Albas', 'Venture Citadel', '1997-03-01', 40, 'L', 'Single', 'Venture Citadel Boulevard Number 13', 'Atheist', 'Mage', 'Do not have', '2019-04-26'),
('1234567891011121', '1000000000000000', 'James Albus', 'Batam', '1911-04-13', 100, 'L', 'Single', 'Jalan Ikan Piranha Kanan Nomor 12', 'Atheist', 'Programmer', 'Inggris', '2019-04-13');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip_surat`
--
ALTER TABLE `arsip_surat`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
