-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 07:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password`, `gambar`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin.png'),
(2, 'admin2', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(128) NOT NULL,
  `username_admin_bagian` varchar(50) NOT NULL,
  `password_bagian` varchar(128) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `nama_bagian`, `username_admin_bagian`, `password_bagian`, `gambar`) VALUES
(1, 'Umum', 'umum', 'b617726c7f45ecb196ef74881089fa17d90d7276', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas1`
--

CREATE TABLE `tb_berkas1` (
  `id_berkas1` int(11) NOT NULL,
  `nomor_berkas1` varchar(128) NOT NULL,
  `tentang` text NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `file_berkas1` varchar(255) NOT NULL,
  `operator` varchar(15) NOT NULL,
  `tanggal_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_berkas1`
--

INSERT INTO `tb_berkas1` (`id_berkas1`, `nomor_berkas1`, `tentang`, `tahun`, `file_berkas1`, `operator`, `tanggal_entry`) VALUES
(126, '123456', '123456', '2017', '2023-123456.pdf', 'admin', '2023-04-07 11:09:11'),
(128, '1234', '1234', '2012', '2023-1234.pdf', 'admin', '2023-04-07 11:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas2`
--

CREATE TABLE `tb_berkas2` (
  `id_berkas2` int(11) NOT NULL,
  `nomor_berkas2` varchar(128) NOT NULL,
  `tentang` text NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `file_berkas2` varchar(255) NOT NULL,
  `operator` varchar(15) NOT NULL,
  `tanggal_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas3`
--

CREATE TABLE `tb_berkas3` (
  `id_berkas3` int(11) NOT NULL,
  `nomor_berkas3` varchar(128) NOT NULL,
  `tentang` text NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `file_berkas3` varchar(255) NOT NULL,
  `operator` varchar(15) NOT NULL,
  `tanggal_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`);

--
-- Indexes for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `tb_berkas1`
--
ALTER TABLE `tb_berkas1`
  ADD PRIMARY KEY (`id_berkas1`);

--
-- Indexes for table `tb_berkas2`
--
ALTER TABLE `tb_berkas2`
  ADD PRIMARY KEY (`id_berkas2`);

--
-- Indexes for table `tb_berkas3`
--
ALTER TABLE `tb_berkas3`
  ADD PRIMARY KEY (`id_berkas3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_berkas1`
--
ALTER TABLE `tb_berkas1`
  MODIFY `id_berkas1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tb_berkas2`
--
ALTER TABLE `tb_berkas2`
  MODIFY `id_berkas2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_berkas3`
--
ALTER TABLE `tb_berkas3`
  MODIFY `id_berkas3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
