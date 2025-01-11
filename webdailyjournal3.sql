-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2025 at 01:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal3`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(6, 'Acer Luncurkan Rangkaian Laptop Gaming Nitro V Terbaru dengan Dukungan AI', 'Acer baru saja mengumumkan rangkaian laptop gaming Nitro V terbaru dengan berbagai ukuran layar, dirancang untuk memenuhi segmen laptop gaming entry level dengan spesifikasi yang mendukung berbagai komputasi AI. Nitro V AI terbaru hadir dengan sejumlah model pilihan, termasuk Nitro V 17 AI, Nitro V 16 AI, dan Nitro V 14 AI.', '20250111184935.jpg', '2025-01-11 18:49:35', 'admin'),
(7, 'Rumor iPhone 17 Series akan Hadir dengan Inovasi Menarik di 2025', 'Meskipun baru tiga bulan sejak peluncuran iPhone 16 series pada bulan September, rumor mengenai iPhone 17 series yang akan datang sudah mulai beredar. Menurut laporan, Apple akan melakukan perubahan besar pada tahun 2025 dengan memperkenalkan model baru yang menggantikan varian Plus yang sudah lama ada, kemungkinan besar akan disebut iPhone 17 Air atau Slim. Ini berarti kita bisa melihat Apple meluncurkan empat model tahun depan: iPhone 17, iPhone 17 Air, iPhone 17 Pro, dan iPhone 17 Pro Max. Perangkat-perangkat ini dikabarkan akan memiliki kemampuan AI canggih, desain baru, dan peningkatan perangkat keras yang signifikan.', '20250111185030.jpg', '2025-01-11 18:50:30', 'admin'),
(8, 'CES 2025: GIGABYTE Hadirkan GeForce RTX 50 Series dengan Teknologi Pendinginan Mutakhir', 'GIGABYTE baru saja mengumumkan peluncuran kartu grafis NVIDIA GeForce RTX 50 Series yang ditenagai oleh NVIDIA Blackwell dan AI di gelaran CES 2025. Seri terbaru ini mencakup GeForce RTX 5090, RTX 5090 D, RTX 5080, RTX 5070 Ti, dan RTX 5070.', '20250111185057.jpeg', '2025-01-11 18:50:57', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_url`) VALUES
(1, '20250111185115.jpg'),
(2, '20250111185123.jpeg'),
(3, '20250111185130.jpg'),
(4, '20250111185137.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`, `role`) VALUES
(1, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', '20250111184409.jpg', 'admin'),
(2, 'gibran', 'd41d8cd98f00b204e9800998ecf8427e', '20250111184346.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
