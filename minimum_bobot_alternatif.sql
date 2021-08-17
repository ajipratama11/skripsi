-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 04:14 AM
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
-- Table structure for table `minimum_bobot_alternatif`
--

CREATE TABLE `minimum_bobot_alternatif` (
  `id_bobot_alternatif` int(35) NOT NULL,
  `id_alternatif` int(35) NOT NULL,
  `kimia` int(35) NOT NULL,
  `biologi` int(35) NOT NULL,
  `fisika` int(35) NOT NULL,
  `matematika` int(35) NOT NULL,
  `bhs_inggris` int(35) NOT NULL,
  `bhs_indonesia` int(35) NOT NULL,
  `realistis` int(35) NOT NULL,
  `intelektual` int(35) NOT NULL,
  `artistik` int(35) NOT NULL,
  `sosial` int(35) NOT NULL,
  `enterprise` int(35) NOT NULL,
  `konvensional` int(35) NOT NULL,
  `linguistik` int(35) NOT NULL,
  `matematikal` int(35) NOT NULL,
  `musikal` int(35) NOT NULL,
  `kinestik` int(35) NOT NULL,
  `spartial` int(35) NOT NULL,
  `intrapersonal` int(35) NOT NULL,
  `interpersonal` int(35) NOT NULL,
  `natrularistik` int(35) NOT NULL,
  `eksistensial` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minimum_bobot_alternatif`
--

INSERT INTO `minimum_bobot_alternatif` (`id_bobot_alternatif`, `id_alternatif`, `kimia`, `biologi`, `fisika`, `matematika`, `bhs_inggris`, `bhs_indonesia`, `realistis`, `intelektual`, `artistik`, `sosial`, `enterprise`, `konvensional`, `linguistik`, `matematikal`, `musikal`, `kinestik`, `spartial`, `intrapersonal`, `interpersonal`, `natrularistik`, `eksistensial`) VALUES
(1, 1, 4, 4, 5, 5, 4, 4, 3, 3, 2, 2, 2, 4, 2, 2, 1, 1, 2, 2, 2, 2, 1),
(2, 2, 4, 3, 4, 4, 5, 4, 3, 3, 2, 2, 3, 3, 2, 2, 1, 1, 2, 2, 2, 1, 1),
(3, 3, 4, 4, 4, 4, 4, 4, 3, 3, 2, 3, 3, 2, 2, 2, 1, 3, 2, 1, 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minimum_bobot_alternatif`
--
ALTER TABLE `minimum_bobot_alternatif`
  ADD PRIMARY KEY (`id_bobot_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minimum_bobot_alternatif`
--
ALTER TABLE `minimum_bobot_alternatif`
  MODIFY `id_bobot_alternatif` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
