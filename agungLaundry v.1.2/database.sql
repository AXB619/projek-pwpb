-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 04:13 PM
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
-- Database: `agunglaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `no hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jenis laundry` varchar(20) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderan`
--

INSERT INTO `orderan` (`id`, `nama`, `no hp`, `alamat`, `jenis laundry`, `unit`, `waktu`) VALUES
(1, 'Ucup Surucup', '085797827754', 'RT 2 RW 1 Pangandaran Kab. Pangandaran, Jawa Barat', 'Setrika Pakaian', '6 kg', '2023-05-02'),
(2, 'Budi Pecel Lele', '082345678901', 'Gang Kencana No. 45, Surabaya', 'Cuci-Setrika Pakaian', '4 kg', '2023-04-01'),
(3, 'Budi Pecel Lele', '082345678901', 'Gang Kencana No. 45, Surabaya', 'Cuci-Setrika Pakaian', '4 kg', '2023-05-04'),
(4, 'Ani Penghuni Kos', '087654321098', 'Kosan ABC No. 12, Bandung', 'Setrika Pakaian', '3 kg', '2023-05-05'),
(5, 'Siti Baju Ngepul', '085678901234', 'Jl. Diponegoro No. 56, Jakarta Pusat', 'Cuci-Setrika Pakaian', '1 kg', '2023-05-07'),
(6, 'Siti Baju Ngepul', '085678901234', 'Jl. Diponegoro No. 56, Jakarta Pusat', 'Cuci-Setrika Pakaian', '5 kg', '2023-05-07'),
(7, 'Dodi Rajut Mania', '081234567890', 'Jl. Rajut Indah No. 78, Bandung', 'Setrika Pakaian', '4 kg', '2023-05-08'),
(8, 'Andi Seragam Lapangan', '087654321098', 'Jl. Seragam No. 23, Jakarta Selatan', 'Cuci-Setrika Pakaian', '2 kg', '2023-02-13'),
(9, 'Andi Seragam Lapangan', '087654321098', 'Jl. Seragam No. 23, Jakarta Selatan', 'Cuci-Setrika Pakaian', '6 kg', '2023-05-10'),
(10, 'Lina Kebaya', '089876543210', 'Komplek Kebaya Indah No. 45, Bandung', 'Setrika Pakaian', '2 kg', '2023-05-11'),
(11, 'Doni Seragam Olahraga', '081234567890', 'Jl. Olahraga No. 78, Jakarta Barat', 'Cuci-Setrika Pakaian', '7 kg', '2023-03-07'),
(12, 'Doni Seragam Olahraga', '081234567890', 'Jl. Olahraga No. 78, Jakarta Barat', 'Cuci-Setrika Pakaian', '4 kg', '2023-05-13'),
(13, 'Eka Kemeja', '082345678901', 'Perumahan Kemeja Permai No. 90, Bandung', 'Setrika Pakaian', '3 kg', '2023-03-07'),
(14, 'Ucup Surucup', '089876543210', 'Jl. Jaket Jaya No. 56, Jakarta Selatan', 'Cuci-Setrika Pakaian', '3 kg', '2023-05-16'),
(15, 'Riko Jaket', '089876543210', 'Jl. Jaket Jaya No. 56, Jakarta Selatan', 'Cuci-Setrika Pakaian', '6 kg', '2023-03-20'),
(16, 'Dina Sarung Bantal', '085678901234', 'Jl. Sarung No. 78, Bandung', 'Setrika Pakaian', '2 kg', '2023-05-17'),
(18, 'Vina Spirtus', '085797528865', 'Jln. Sutarman, Bandung', 'Setrika Pakaian', '2 kg', '2023-05-19'),
(19, 'Roni Celana', '087654321098', 'Jl. Celana No. 23, Bandung', 'Setrika Pakaian', '3 kg', '2023-02-20'),
(21, 'Toni Pakaian Dalam', '085678901234', 'Jl. Pakaian Dalam No. 67, Jakarta Selatan', 'Cuci-Setrika Pakaian', '4 kg', '2023-05-22'),
(22, 'Linda Selendang', '081234567890', 'Jl. Selendang Indah No. 78, Bandung', 'Setrika Pakaian', '1 kg', '2023-05-23'),
(24, 'Ani Baju Renang', '087654321098', 'Jl. Renang Indah No. 34, Jakarta Barat', 'Cuci-Setrika Pakaian', '3 kg', '2023-05-25'),
(27, 'Dono Jas', '081234567890', 'Perumahan Jas Sejahtera No. 90, Jakarta Selatan', 'Cuci-Setrika Pakaian', '6 kg', '2023-05-28'),
(217, 'Ucup Surucup', '628579782775', 'Parigi', 'Cuci Karpet', '6 m²', '2023-05-22'),
(218, 'Ucup Surucup', '085797528865', 'Parigi', 'Setrika Pakaian', '2 kg', '2023-05-22'),
(219, 'Ucup Surucup', '085678901234', 'Jl. Diponegoro No. 56, Jakarta Pusat', 'Cuci-Setrika Pakaian', '5 kg', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jenis` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `jenis`) VALUES
(1, 'dinar', 'dinar@gmail.com', 'dinarsaja', 'user'),
(2, 'faris', 'faris@gmail.com', 'farizz', 'user'),
(3, 'agung', 'agung@gmail.com', 'agung', 'admin'),
(10, 'Sumanto', 'sami_toh@gmail.com', 'sumantono', 'user'),
(11, 'SIMIRA@MESSI', 'asd@as', 'WOWOW', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
