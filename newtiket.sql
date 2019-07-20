-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 02:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_bandara`
--

CREATE TABLE `daftar_bandara` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(25) DEFAULT NULL,
  `nama_bandara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_bandara`
--

INSERT INTO `daftar_bandara` (`id`, `lokasi`, `nama_bandara`) VALUES
(1, 'Bandung', 'Husein Sastranegara'),
(2, 'Bali', 'Ngurah Rai'),
(3, 'Jakarta', 'Halim Perdanakusuma');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_hp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `nama`, `nik`, `gender`, `no_hp`) VALUES
(2, 'aaaa', '1234', 'Laki-Laki', '1232');

-- --------------------------------------------------------

--
-- Table structure for table `last_order`
--

CREATE TABLE `last_order` (
  `id` int(11) NOT NULL,
  `idpelanggan` int(11) DEFAULT NULL,
  `nama` varchar(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `dari` varchar(11) NOT NULL,
  `tujuan` varchar(11) NOT NULL,
  `maskapai` varchar(25) NOT NULL,
  `jenis_tiket` varchar(11) NOT NULL,
  `tanggal_pemberangkatan` varchar(25) NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `total_harga` varchar(25) NOT NULL,
  `tanggal` varchar(24) DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 1),
('petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas@petugas.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(25) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `nohp` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `username`, `password`, `nama`, `nik`, `gender`, `nohp`) VALUES
(2, 'mangjuned', 'mangjuned', 'mangjuned', '1234567', 'Laki-Laki', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `pswt_bdg`
--

CREATE TABLE `pswt_bdg` (
  `id` int(11) NOT NULL,
  `dari` varchar(25) DEFAULT NULL,
  `tujuan` varchar(33) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `maskapai` varchar(25) DEFAULT NULL,
  `tipe` varchar(11) DEFAULT NULL,
  `qty` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pswt_bdg`
--

INSERT INTO `pswt_bdg` (`id`, `dari`, `tujuan`, `harga`, `maskapai`, `tipe`, `qty`) VALUES
(2, 'Bandung', 'Bali', 548000, 'Nam Air', 'Pesawat', 2),
(3, 'Bandung', 'Surabaya', 456000, 'Lion Air', 'Pesawat', 5),
(4, 'Bandung', 'Yogyakarta', 703000, 'Garuda Indonesia', 'Pesawat', 5),
(5, 'Bandung', 'Makassar', 909000, 'Garuda Indonesia', 'Pesawat', 5),
(6, 'Bandung', 'Semarang', 571000, 'Nam Air', 'Pesawat', 5),
(7, 'Bandung', 'Balikpapan', 978000, 'Lion Air', 'Pesawat', 5),
(8, 'Bandung', 'Palembang', 599000, 'Lion Air', 'Pesawat', 5),
(9, 'Bandung', 'Malang', 1154000, 'Nam Air', 'Pesawat', 5),
(10, 'Bandung', 'Bengkulu', 1098000, 'Garuda Indonesia', 'Pesawat', 5),
(11, 'Bandung', 'Ambon', 1457000, 'Garuda Indonesia', 'Pesawat', 5),
(12, 'Bandung', 'Merauke', 2865000, 'Garuda Indonesia', 'Pesawat', 5),
(13, 'Bandung', 'Jakarta', 1021000, 'Lion Air', 'Pesawat', 30),
(14, 'Bandung', 'Jakarta', 2035300, 'Garuda Indonesia', 'Pesawat', 1),
(15, 'Bandung', 'Bali', 2099500, 'Garuda Indonesia', 'Pesawat', 5),
(16, 'Jakarta', 'Bali', 2000, 'Garuda Indonesia', 'Pesawat', 55),
(17, 'Jakarta', 'Bandung', 5000, 'Garuda Indonesia', 'Pesawat', 5),
(18, 'Palembang', 'Jakarta', 5000, 'Garuda Indonesia', 'Pesawat', 5),
(19, 'Jakarta', 'Bandung', 5000, 'Ciremai Express', 'Kereta', 0),
(20, 'Bandung', 'Cirebon', 6000, 'Ciremai Express', 'Kereta', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pswt_jkt`
--

CREATE TABLE `pswt_jkt` (
  `id` int(11) NOT NULL,
  `dari` varchar(25) DEFAULT NULL,
  `tujuan` varchar(25) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `maskapai` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pswt_jkt`
--

INSERT INTO `pswt_jkt` (`id`, `dari`, `tujuan`, `harga`, `maskapai`) VALUES
(1, 'Jakarta', 'Bandung', 401000, 'Lion Air'),
(2, 'Jakarta', 'Bali', 563100, 'Lion Air'),
(3, 'Jakarta', 'Surabaya', 416500, 'Lion Air'),
(4, 'Jakarta', 'Yogyakarta', 350500, 'Lion Air'),
(5, 'Jakarta', 'Makassar', 741000, 'Lion Air'),
(6, 'Jakarta', 'Semarang', 0, 'Lion Air'),
(7, 'Jakarta', 'Balikpapan', 730000, 'Lion Air'),
(8, 'Jakarta', 'Palembang', 346100, 'Lion Air'),
(9, 'Jakarta', 'Malang', 463800, 'Lion Air'),
(10, 'Jakarta', 'Bengkulu', 447300, 'Lion Air'),
(11, 'Jakarta', 'Ambon', 1544000, 'Lion Air'),
(12, 'Jakarta', 'Merauke', 2699000, 'Lion Air');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_bandara`
--
ALTER TABLE `daftar_bandara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_order`
--
ALTER TABLE `last_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pswt_bdg`
--
ALTER TABLE `pswt_bdg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pswt_jkt`
--
ALTER TABLE `pswt_jkt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_bandara`
--
ALTER TABLE `daftar_bandara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `last_order`
--
ALTER TABLE `last_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pswt_bdg`
--
ALTER TABLE `pswt_bdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pswt_jkt`
--
ALTER TABLE `pswt_jkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
