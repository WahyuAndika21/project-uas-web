-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 11:23 AM
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
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `desc` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama_produk`, `harga`, `qty`, `desc`, `img`) VALUES
(21, 'CREWNECK - DESAIN NARUTO', 13000, 50, 'Spesifikasi:\r\n-  Soft Cotton Fleece 280gsm\r\n- Unisex reguler fit( cocok digunakan Pria maupun wanita )\r\n- Kualitas Jahitan terbaik\r\n\r\nSize Chart: \r\nM:    Panjang 65cm x Lebar 55cm \r\nL:     Panjang 67cm  x Lebar 57cm\r\nXL:   Panjang 69cm x  Lebar 59cm  \r\nXXL: Panjang 71cm x Lebar 61cm\r\n', '6596606d2575c.jpeg'),
(22, 'CELANA PENDEK - CARGO', 85000, 50, 'Bahan catton twill (NON STREED) nyaman di pakai dingin\r\ntidak luntur saat di wash, model trandy\r\nrecomended buat santai namun modis\r\n27,28,29,30,31,32,33,34,35,36,37,38\r\n-pajng celana 55cm ', '65966136d4448.jpeg'),
(23, 'CELANA PANJANG - JEANS SOBEK', 130000, 50, 'BAHAN JEANS ORIGINAL\r\n27,28,29,30,31,32,33,34,35,36,37,38', '659661c79fd1d.jpeg'),
(24, 'TOPI - EIGER', 75000, 50, '- Topi baseball.\r\n- Di bagian belakang, menggunakan adjuster elastis sehingga pas dipakai di kepala.\r\n- Menggunakan material yang mudah kering.\r\n- Logo Eiger di bagian depan.', '65966216efdb9.jpeg'),
(25, 'SEPATU - JORDAN', 220000, 30, 'Ukuran :\r\n36-37 : 23cm\r\n38-39 : 24cm\r\n40-41 : 25cm\r\n42-43 : 26cm\r\n44-45 : 27cm\r\nJenis kaki dengan punggung kaki yang tebal dan kaki yang lebar disarankan untuk pesan 1 ukuran lebih besar\r\n', '659662d42eb42.jpeg'),
(26, 'SANDAL SELOP - MERK JORDAN', 80000, 50, 'SANDAL SELOP BAHAN KARET\r\nUkuran :\r\n36-37 : 23cm\r\n38-39 : 24cm\r\n40-41 : 25cm\r\n42-43 : 26cm\r\n44-45 : 27cm\r\nJenis kaki dengan punggung kaki yang tebal dan kaki yang lebar disarankan untuk pesan 1 ukuran lebih besar\r\n', '65966327a961d.jpeg'),
(27, 'KACAMATA - HITAM - MODEL KOREA', 50000, 50, 'Kacamata Hitam Sunglasses\r\nStylish Korea Fashion Pria Wanita Unisex\r\nTipe : Colore.in Frida\r\nBahan : Plastik\r\nBahan Lensa : Mika', '659663b2cb1bd.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
