-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2025 at 05:32 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outfitz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jual`
--

CREATE TABLE `tb_jual` (
  `id_jual` varchar(10) NOT NULL,
  `id_user` varchar(10) DEFAULT NULL,
  `tgl_jual` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `diskon` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jualdtl`
--

CREATE TABLE `tb_jualdtl` (
  `id_jual` varchar(10) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_produk` varchar(10) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_user` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` varchar(10) NOT NULL,
  `nm_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `desk` text,
  `id_kategori` varchar(10) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_jualdtl`
--
ALTER TABLE `tb_jualdtl`
  ADD PRIMARY KEY (`id_jual`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD CONSTRAINT `tb_jual_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jualdtl`
--
ALTER TABLE `tb_jualdtl`
  ADD CONSTRAINT `tb_jualdtl_ibfk_1` FOREIGN KEY (`id_jual`) REFERENCES `tb_jual` (`id_jual`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jualdtl_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
