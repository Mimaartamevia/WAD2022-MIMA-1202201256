-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Generation Time: Nov 21, 2022 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_mima_table`
--

CREATE TABLE `showroom_mima_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_mima_table`
--

INSERT INTO `showroom_mima_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(7, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(8, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(9, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(10, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(11, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(12, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(13, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(14, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-17', 'Toyota Kijang Innova adalah sebuah  mobil SUV dari produsen asal Jepang, Toyota.\r\nMerupakan salah satu mobil pilihan keluarga karena kenyamanannya dan sangat luas\r\n Mobil ini banyak digemari oleh laki - laki karena designnya yang gagah', 'mobilinnova.jpg', 'Lunas'),
(15, 'Kijang Innova', 'Mima - 1202201256', 'toyota', '2022-11-09', 'Mobil ternyaman untuk keluarga ', 'mobilinnova.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_mima_table`
--
ALTER TABLE `showroom_mima_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_mima_table`
--
ALTER TABLE `showroom_mima_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
