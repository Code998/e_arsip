-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 10:20 PM
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
  `r_no_su` varchar(30) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip_surat`
--

INSERT INTO `arsip_surat` (`jenis`, `no_surat`, `r_no_su`, `nik`, `dari_kpd`, `indeks`, `tanggal_surat`, `tanggal_input`, `alamat`, `perihal`, `isi_ringkas`, `laci`, `guide`, `nama_pe`, `file`, `admin`) VALUES
('Surat Keluar', 1, '', '1', 'Cold Coffe', NULL, NULL, '2019-05-02 07:25:56', 'Artistic Drink Street Number 12', 'Surat Pengantar KTP', NULL, 'Surat Pengantar', 'KTP', 'The Hot One', NULL, 'admin'),
('Surat Masuk', 3, '12/JA/OGT/22.00.13', NULL, 'James Albas', 'GA', '2019-05-18', '2019-05-02 07:47:18', 'Numba Numbos Street number 12', 'Eat an eggplant', 'Please eat some eggplant. for ur health.', 'Surat Dinas', 'Tugas Dinas', '', 'Screenshot from 2019-04-29 03-29-32.png', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nama`, `password`, `alamat`, `nip`, `jabatan`) VALUES
('Bagas', 'bagas31', 'Jalan Sudirman', '1', 'Kaur Kesra'),
('Kiki Arnita S.M', 'kiki20', 'Jalan Ikan Ikanan Nomor 1', '10001', 'Kepala Desa'),
('The Hot One', 'hot11', 'Artistic Drink Street Number 1', '10002', 'Kaur Kesra'),
('James', 'haha123', 'Jalan Sudimoro', '12000', 'Kepala Desa'),
('James', '!!!', 'Jalan Sudimoro', '123', 'KAUR PEMBANGUNAN');

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
  `jenis_kelamin` varchar(20) NOT NULL,
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
('1', '12', 'Cold Coffe', 'California', '2023-05-12', 20, 'L', 'Single', 'Artistic Drink Street Number 12', 'Islam', 'Coffe Taster', 'United Kingdom (U.K)', '2019-04-29'),
('2', '12', 'Chocolate Bar', 'California', '2019-04-03', 21, 'P', 'Single', 'Artistic Drink Street Number 12', 'Islam', 'Chocolate Taster', 'United Kingdom (U.K)', '2019-04-29');

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
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
