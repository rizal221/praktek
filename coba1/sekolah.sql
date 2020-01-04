-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jan 2020 pada 04.49
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
`id_admin` int(10) NOT NULL,
  `nama_admin` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbladmin`
--

INSERT INTO `tbladmin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
`NO_URUT` int(100) NOT NULL,
  `NamaDepan` varchar(255) NOT NULL,
  `NamaBelakang` varchar(255) NOT NULL,
  `NIM` int(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`NO_URUT`, `NamaDepan`, `NamaBelakang`, `NIM`, `Password`) VALUES
(1, 'aditya', 'suparno', 11, '6512bd43d9caa6e02c990b0a82652dca'),
(2, 'laila', 'afifah', 12, 'c20ad4d76fe97759aa27a0c99bff6710'),
(9, 'Rizal', 'Pangestu', 16, 'c74d97b01eae257e44aa9d5bade97baf'),
(10, 'Rizal', 'Pangestu', 44, 'f7177163c833dff4b38fc8d2872f1ec6'),
(11, 'iqbal', 'bojes', 22, 'b6d767d2f8ed5d21a44b0e5886680cb9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dat`
--

CREATE TABLE IF NOT EXISTS `tbl_dat` (
  `hasil` varchar(11) NOT NULL,
  `nim` int(12) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `kampus` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tanggalmulai` date NOT NULL,
  `alamatkampus` varchar(200) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `statuspost` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dat`
--

INSERT INTO `tbl_dat` (`hasil`, `nim`, `namalengkap`, `jk`, `kampus`, `tanggal`, `agama`, `tanggalmulai`, `alamatkampus`, `hp`, `tema`, `statuspost`) VALUES
('Lolos', 11, 'aditya suparno', 'Laki-Laki', 'purwakarta', '0000-00-00', 'islam', '0000-00-00', 'pasawahan', '085926237794', '', 0),
('Lolos', 44, 'Rizal Pangestu', 'Laki-Laki', '', '0000-00-00', 'islam', '0000-00-00', '', '', 'kerjaa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
 ADD PRIMARY KEY (`NO_URUT`);

--
-- Indexes for table `tbl_dat`
--
ALTER TABLE `tbl_dat`
 ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
MODIFY `NO_URUT` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
