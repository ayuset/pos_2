-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 03:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `satuan_id` varchar(10) NOT NULL,
  `category_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga`, `stock`, `satuan_id`, `category_id`) VALUES
('5fb924cee19', 'GL01', 'Gula', '25000', 1000, '5', '5'),
('5fb926b16cb', 'B01', 'Beras', '100000', 1000, '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('5', 'Sembako'),
('5fb923772f2', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE IF NOT EXISTS `detail_penjualan` (
  `no_penjualan` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `penjualan_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `penjualan_id` varchar(20) NOT NULL,
  `penjualan_no` varchar(50) NOT NULL,
  `nama_kasir` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE IF NOT EXISTS `satuan` (
  `satuan_id` varchar(11) NOT NULL,
  `satuan_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`satuan_id`, `satuan_name`) VALUES
('5', 'Kilogram'),
('5fb923c641e', 'Gram'),
('5fb923d0440', 'Pcs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` enum('admin','customer') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `phone`, `role`) VALUES
(1, 'admin', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', 'admin@gmail.com', 'admin', '0854321000', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`penjualan_id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
 ADD PRIMARY KEY (`satuan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
