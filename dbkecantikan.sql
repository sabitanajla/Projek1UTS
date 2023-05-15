-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 10:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkecantikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jumlah_pesanan` int(100) NOT NULL,
  `produk_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `tanggal`, `nama_pemesan`, `no_hp`, `jumlah_pesanan`, `produk_id`) VALUES
(1, '2023-05-12', 'Sabita Najla', '087813580294', 3, 5),
(2, '2023-05-26', 'Saskia Puti', '081345672345', 4, 1),
(3, '2023-06-08', 'Kamila Bilqis', '081234567912', 2, 4),
(4, '2023-05-19', 'Zaqiyah Lailatul ', '0120120120', 2, 1),
(5, '2023-05-25', 'Khoirun nisa', '08123456783', 70, 7),
(6, '2023-05-25', 'Wildani Fadhillah', '08123456783', 2, 2),
(7, '2023-05-19', 'Syakira Puti Anandra', '0897654367', 2, 1),
(8, '2023-05-24', 'Khansa Nadia', '085809996795', 9, 7),
(9, '2023-05-15', 'Farras Khoirunnisa', '081234567912', 8, 4),
(10, '2023-06-10', 'Ghiyats', '085703280338', 10, 6),
(11, '2023-05-18', 'Syifa Rahmatia', '085809996795', 3, 1),
(12, '2023-05-31', 'Susanti', '08123456783', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe` int(5) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `tipe`, `stok`, `harga`) VALUES
(1, 'Aurora Beauty Acne Serum', 1, 45, 150000),
(2, 'Aurora UV Watery Suncreen Gel SPF 50++', 1, 67, 150000),
(3, 'Aurora Lip Totem Tint', 3, 25, 50000),
(4, 'Aurora 25 Pro Eyeshadow Palette', 3, 15, 250000),
(5, 'Aurora Whitenning Body Lotion', 2, 8, 75000),
(6, 'Aurora Coffeinc Body Scrub', 2, 50, 75000),
(7, 'Aurora Brightening Glow 10-Minutes Wash Off Mask', 1, 12, 80000),
(8, 'Aurora Airy Blush', 3, 10, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_produk`
--

CREATE TABLE `tipe_produk` (
  `id_tipe` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_produk`
--

INSERT INTO `tipe_produk` (`id_tipe`, `tipe`) VALUES
(1, 'Skincare'),
(2, 'Bodycare'),
(3, 'Make up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_produk`
--
ALTER TABLE `tipe_produk`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipe_produk`
--
ALTER TABLE `tipe_produk`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
