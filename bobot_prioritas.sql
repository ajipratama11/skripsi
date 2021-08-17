-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 09:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

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
-- Table structure for table `bobot_prioritas`
--

CREATE TABLE `bobot_prioritas` (
  `id_bobot_alternatif` int(35) NOT NULL,
  `id_alternatif` int(35) NOT NULL,
  `kimia` double NOT NULL,
  `biologi` double NOT NULL,
  `fisika` double NOT NULL,
  `matematika` double NOT NULL,
  `bhs_inggris` double NOT NULL,
  `bhs_indonesia` double NOT NULL,
  `realistis` double NOT NULL,
  `intelektual` double NOT NULL,
  `artistik` double NOT NULL,
  `sosial` double NOT NULL,
  `enterprise` double NOT NULL,
  `konvensional` double NOT NULL,
  `linguistik` double NOT NULL,
  `matematikal` double NOT NULL,
  `musikal` double NOT NULL,
  `kinestik` double NOT NULL,
  `spartial` double NOT NULL,
  `intrapersonal` double NOT NULL,
  `interpersonal` double NOT NULL,
  `natrularistik` double NOT NULL,
  `eksistensial` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot_prioritas`
--

INSERT INTO `bobot_prioritas` (`id_bobot_alternatif`, `id_alternatif`, `kimia`, `biologi`, `fisika`, `matematika`, `bhs_inggris`, `bhs_indonesia`, `realistis`, `intelektual`, `artistik`, `sosial`, `enterprise`, `konvensional`, `linguistik`, `matematikal`, `musikal`, `kinestik`, `spartial`, `intrapersonal`, `interpersonal`, `natrularistik`, `eksistensial`) VALUES
(1, 1, 0.33, 0.43, 0.75, 0.75, 0.13, 0.33, 0.33, 0.33, 0.33, 0.25, 0.2, 0.62, 0.33, 0.33, 0.33, 0.25, 0.33, 0.4, 0.33, 0.55, 0.33),
(2, 2, 0.33, 0.14, 0.13, 0.13, 0.75, 0.33, 0.33, 0.33, 0.33, 0.25, 0.4, 0.24, 0.33, 0.33, 0.33, 0.25, 0.33, 0.4, 0.33, 0.23, 0.33),
(3, 3, 0.33, 0.43, 0.13, 0.13, 0.13, 0.33, 0.33, 0.33, 0.33, 0.5, 0.4, 0.14, 0.33, 0.33, 0.33, 0.5, 0.33, 0.2, 0.33, 0.23, 0.33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_prioritas`
--
ALTER TABLE `bobot_prioritas`
  ADD PRIMARY KEY (`id_bobot_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_prioritas`
--
ALTER TABLE `bobot_prioritas`
  MODIFY `id_bobot_alternatif` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
