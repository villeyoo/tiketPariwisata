-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 06:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dolan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelasbus`
--

CREATE TABLE `kelasbus` (
  `id` int NOT NULL,
  `Kelas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelasbus`
--

INSERT INTO `kelasbus` (`id`, `Kelas`) VALUES
(1, 'Eksekutif'),
(2, 'Bisnis'),
(3, 'Ekonomi Non Ac'),
(4, 'Ekonomi Ac'),
(5, 'Eksekutif VIP');

-- --------------------------------------------------------

--
-- Table structure for table `orderpariwisata`
--

CREATE TABLE `orderpariwisata` (
  `no_transaksi` int NOT NULL,
  `namaLengkap` varchar(225) NOT NULL,
  `NIK` int NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telepon` int NOT NULL,
  `tempat_wisata` varchar(225) NOT NULL,
  `tanggal_kunjungan` varchar(200) NOT NULL,
  `dewasa` varchar(100) NOT NULL,
  `anak` varchar(100) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `totalHarga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderpariwisata`
--

INSERT INTO `orderpariwisata` (`no_transaksi`, `namaLengkap`, `NIK`, `email`, `no_telepon`, `tempat_wisata`, `tanggal_kunjungan`, `dewasa`, `anak`, `harga`, `totalHarga`) VALUES
(1, 'nina handayani', 2147483647, 'nana@gmail.co', 2147483647, 'Lawang Sewu', '03/20/2024', '2', '1', '25000', '25000'),
(2, 'nabilmaulana al hakim', 2147483647, 'nabilmaulanaaalhakim@gmail.com', 2147483647, 'Karang Resik', '03/30/2024', '4', '0', '120000', '120000'),
(3, 'nina handayani', 2147483647, 'asdas@gmail.com', 2147483647, 'Malioboro', '03/01/2024', '4', '0', '9292', '9292'),
(4, 'nabilmaulana al hakim', 2147483647, 'nabilmaulana1140@gmail.com', 2147483647, 'Karang Resik', '03/20/2024', '3', '0', '90000', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `parwis`
--

CREATE TABLE `parwis` (
  `id` int NOT NULL,
  `Wisata` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parwis`
--

INSERT INTO `parwis` (`id`, `Wisata`, `Harga`) VALUES
(15, 'Taman Pintar Indonesia', 'RP 20.000'),
(17, 'Lawang Sewu', 'RP 10.000'),
(18, 'Pangandaran', 'RP 20.000'),
(19, 'Garut Dinoland', 'RP 30.000'),
(20, 'Kiara Artha Park', 'RP 25.000'),
(21, 'Karang Resik', 'RP 30.000'),
(22, 'Malioboro', 'RP 2.323');

-- --------------------------------------------------------

--
-- Table structure for table `rutebus`
--

CREATE TABLE `rutebus` (
  `id` int NOT NULL,
  `Kelas` varchar(128) NOT NULL,
  `Harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rutebus`
--

INSERT INTO `rutebus` (`id`, `Kelas`, `Harga`) VALUES
(123219, 'Non Ac', 'RP 300.000'),
(123220, 'Eksekutif', 'RP 1.200.000'),
(123222, 'Ekonomi AC', 'RP 80.000'),
(123223, 'Eksekutif', 'RP 250.000'),
(123224, 'Ekonomi ', 'RP 700.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelasbus`
--
ALTER TABLE `kelasbus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderpariwisata`
--
ALTER TABLE `orderpariwisata`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `parwis`
--
ALTER TABLE `parwis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rutebus`
--
ALTER TABLE `rutebus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelasbus`
--
ALTER TABLE `kelasbus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderpariwisata`
--
ALTER TABLE `orderpariwisata`
  MODIFY `no_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parwis`
--
ALTER TABLE `parwis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rutebus`
--
ALTER TABLE `rutebus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123226;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
