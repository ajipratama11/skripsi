-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 03:12 PM
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
-- Database: `sanggar`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `kimia` int(11) NOT NULL,
  `biologi` int(11) NOT NULL,
  `fisika` int(11) NOT NULL,
  `matematika` int(11) NOT NULL,
  `bhs_inggris` int(11) NOT NULL,
  `bhs_indonesia` int(11) NOT NULL,
  `realistis` int(11) NOT NULL,
  `intelektual` int(11) NOT NULL,
  `artistik` int(11) NOT NULL,
  `sosial` int(11) NOT NULL,
  `enterprise` int(11) NOT NULL,
  `konvensional` int(11) NOT NULL,
  `linguistik` int(11) NOT NULL,
  `matematikal` int(11) NOT NULL,
  `musikal` int(11) NOT NULL,
  `kinestik` int(11) NOT NULL,
  `spartial` int(11) NOT NULL,
  `intrapersonal` int(11) NOT NULL,
  `interpersonal` int(11) NOT NULL,
  `naturalistik` int(11) NOT NULL,
  `eksistensial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
