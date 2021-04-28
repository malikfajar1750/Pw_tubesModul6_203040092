-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 09:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_malik`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kaset`
--

CREATE TABLE `daftar_kaset` (
  `id` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul_kaset` varchar(100) NOT NULL,
  `rilis_kaset` varchar(100) NOT NULL,
  `stock_kaset` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_kaset`
--

INSERT INTO `daftar_kaset` (`id`, `gambar`, `judul_kaset`, `rilis_kaset`, `stock_kaset`, `harga`) VALUES
(1, 'kaset-pita.jpg', 'Lagu Jadul Tahun 80', '1980', '5', '20.000'),
(2, 'kaset-pita2.jpg', 'lagu lagu 1990', '1990', '10', '50.000'),
(3, 'kaset-pita3.jpg', 'lagu lagu 2000', '2000', '20', '100.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kaset`
--
ALTER TABLE `daftar_kaset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_kaset`
--
ALTER TABLE `daftar_kaset`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
