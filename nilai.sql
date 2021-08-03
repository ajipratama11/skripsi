-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 02:19 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `nis`, `id_mapel`, `mapel`, `nilai`) VALUES
(1, 8, 1610853, 5, 'Biologi', 69),
(2, 8, 1610853, 4, 'Fisika', 82),
(3, 8, 1610853, 6, 'Kimia', 77),
(4, 8, 1610853, 2, 'Bahasa Indonesia', 74),
(5, 8, 1610853, 3, 'Bahasa Inggris', 75),
(6, 8, 1610853, 1, 'Matematika', 84),
(7, 8, 1610853, 7, 'Realistis', 81),
(8, 8, 1610853, 8, 'Intelektual', 75),
(9, 8, 1610853, 9, 'Artistik', 65),
(10, 8, 1610853, 10, 'Sosial', 70),
(11, 8, 1610853, 11, 'Enterprise', 66),
(12, 8, 1610853, 12, 'Konvensional', 89),
(13, 8, 1610853, 13, 'Linguistik', 81),
(14, 8, 1610853, 14, 'Matematikal', 78),
(15, 8, 1610853, 15, 'Musikal', 60),
(16, 8, 1610853, 16, 'Kinestik', 70),
(17, 8, 1610853, 17, 'Spartial', 71),
(18, 8, 1610853, 18, 'Intrapersonal', 82),
(19, 8, 1610853, 19, 'Interpersonal', 70),
(20, 8, 1610853, 20, 'Naturalistik', 70),
(21, 8, 1610853, 21, 'Eksistensial', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
