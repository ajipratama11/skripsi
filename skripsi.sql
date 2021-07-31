-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 09:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'muhammad zulfi izzulhaq', 'zulfi', '$2y$10$VwZi.Rg5260KsgiRun.0f.e6/7gnnW7X5YiYLgAIedf6GF7vo1EPm'),
(2, 'Administrator', 'admin', '$2b$10$iMdff0aXLdwjDYrjeWFDauZTwoTDNQr0M6U93r4xRbWvUdxDWJjLO'),
(5, 'muhammad zulfi', 'izz', '$2y$10$zBIDIfZKbzNO5cPQcsTpK.NTqKG.24B2FIDFDbRjtphZ5HDchDBGy');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_tb`
--

CREATE TABLE `alternatif_tb` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif_tb`
--

INSERT INTO `alternatif_tb` (`id_alternatif`, `nama_alternatif`) VALUES
(1, 'Teknologi Informasi'),
(2, 'Kedokteran'),
(3, 'Teknik Industri'),
(4, 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `data_set`
--

CREATE TABLE `data_set` (
  `id_data_set` int(11) NOT NULL,
  `nama_kriteria` int(11) NOT NULL,
  `nama_sub` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mapel` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `mapel`, `username`, `password`) VALUES
(1, 'Mamatika', 1, 'gurumtk', '1234'),
(2, 'Bu Indo', 2, 'guruindo', '1234');

--
-- Triggers `guru`
--
DELIMITER $$
CREATE TRIGGER `hapus_guru` BEFORE DELETE ON `guru` FOR EACH ROW BEGIN
	DELETE FROM soal WHERE soal.guru=OLD.id_guru;
	DELETE FROM ujian WHERE ujian.id_guru=OLD.id_guru;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ikut_ujian`
--

CREATE TABLE `ikut_ujian` (
  `id_tes` int(11) NOT NULL,
  `id_ujian` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `list_soal` longtext DEFAULT NULL,
  `list_jawaban` longtext DEFAULT NULL,
  `jml_benar` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `status` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikut_ujian`
--

INSERT INTO `ikut_ujian` (`id_tes`, `id_ujian`, `id_siswa`, `list_soal`, `list_jawaban`, `jml_benar`, `nilai`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(3, 2, 1, '5', '5:A', 0, 0, '2021-07-01 08:56:40', '2021-07-01 09:56:40', 'N'),
(4, 1, 1, '1,2,3,4', '1:D,2:E,3:B,4:D', 3, 75, '2021-07-01 09:13:01', '2021-07-01 09:43:01', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(2, 'IPA'),
(3, 'IPS');

--
-- Triggers `jurusan`
--
DELIMITER $$
CREATE TRIGGER `hapus_jurusan` BEFORE DELETE ON `jurusan` FOR EACH ROW BEGIN
	DELETE FROM kelas WHERE kelas.jurusan=OLD.id_jurusan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `rombel` int(11) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `jurusan`, `rombel`, `kode_kelas`) VALUES
(1, 12, 2, 2, '12 IPA 2'),
(2, 12, 2, 1, '12 IPA 1'),
(4, 11, 2, 1, '11 IPA 1'),
(5, 12, 2, 3, '12 IPA 3');

--
-- Triggers `kelas`
--
DELIMITER $$
CREATE TRIGGER `hapus_kelas` BEFORE DELETE ON `kelas` FOR EACH ROW BEGIN
	DELETE FROM siswa WHERE siswa.kelas=OLD.id_kelas;
	DELETE FROM soal WHERE soal.kelas=OLD.id_kelas;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id_konversi` int(11) NOT NULL,
  `atribut_konversi` varchar(12) NOT NULL,
  `nilai_kons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konversi`
--

INSERT INTO `konversi` (`id_konversi`, `atribut_konversi`, `nilai_kons`) VALUES
(12, 'A+', 1),
(13, 'A', 2),
(14, 'B+', 3),
(19, 'B', 4),
(20, 'B-', 5),
(21, 'C+', 6),
(22, 'C', 7),
(23, 'C-', 8),
(24, 'D', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Potensi Akademik Siswa'),
(2, 'Minat Siswa'),
(5, 'Bakat Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Fisika'),
(5, 'Biologi'),
(6, 'Kimia');

--
-- Triggers `mapel`
--
DELIMITER $$
CREATE TRIGGER `hapus_mapel` BEFORE DELETE ON `mapel` FOR EACH ROW BEGIN
	DELETE FROM guru WHERE guru.mapel=OLD.id_mapel;
	DELETE FROM soal WHERE soal.mapel=OLD.id_mapel;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `minimum_alternatif_tb`
--

CREATE TABLE `minimum_alternatif_tb` (
  `id_minimum` int(11) NOT NULL,
  `nama_alternatif` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minimum_alternatif_tb`
--

INSERT INTO `minimum_alternatif_tb` (`id_minimum`, `nama_alternatif`, `mapel`, `nilai`) VALUES
(5, 1, 1, 77),
(6, 1, 2, 70),
(7, 1, 6, 65),
(12, 1, 3, 66),
(13, 1, 4, 88),
(14, 1, 5, 55),
(15, 2, 1, 85);

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
(1, 8, 1610853, 2, 'Bahasa Indonesia', 80),
(2, 8, 1610853, 3, 'Bahasa Inggris', 85);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_konversi`
--

CREATE TABLE `nilai_konversi` (
  `id_nilai_konversi` int(11) NOT NULL,
  `nilai_kons` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_konversi`
--

INSERT INTO `nilai_konversi` (`id_nilai_konversi`, `nilai_kons`) VALUES
(1, '100-86'),
(2, '85-81'),
(3, '80-76'),
(4, '75-71'),
(5, '70-66'),
(6, '65-61'),
(7, '60-55'),
(8, '54-45'),
(9, '44-0');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nohp` char(12) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `nis`, `kelas`, `password`, `nohp`, `pertanyaan`, `jawaban`) VALUES
(1, 'M. Afakhan Saifudin Alwi', 1610846, 1, 'siswa', '', 'siapa saya', 'bram'),
(2, 'Makhi', 1610847, 1, '1610847', '', '', ''),
(3, 'Mochammad Dani Setiardi', 1610848, 1, '1610848', '', '', ''),
(4, 'Moh Zidni Khakim', 1610849, 1, '1610849', '', '', ''),
(5, 'Muhammad Afifurrohman', 1610850, 1, '1610850', '', '', ''),
(6, 'Muhammad I\'zzudin', 1610851, 1, '1610851', '', '', ''),
(7, 'Muhammad Nafidzul Abror', 1610852, 1, '1610852', '', '', ''),
(8, 'Muhammad Zulfi Izzulhaq', 1610853, 1, 'zxcv', '', 'siapa nama kucing peliharaan?', 'meong'),
(9, 'Nastiti Indriasari', 1610854, 1, '1610854', '', '', ''),
(10, 'Nayavakda Risvia Salsabila', 1610855, 1, '1610855', '', '', ''),
(11, 'Owos', 1610802, 4, '1610802', '1111', '1111', '1');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `mapel` int(11) DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `guru` int(11) DEFAULT NULL,
  `soal` text DEFAULT NULL,
  `media` varchar(50) DEFAULT NULL,
  `opsi_a` text DEFAULT NULL,
  `opsi_b` text DEFAULT NULL,
  `opsi_c` text DEFAULT NULL,
  `opsi_d` text DEFAULT NULL,
  `opsi_e` text DEFAULT NULL,
  `jawaban` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `mapel`, `kelas`, `guru`, `soal`, `media`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`) VALUES
(1, 1, 1, 1, '<p>1+1=</p>\r\n', NULL, '3', '23', '1', '2', '34', 'C'),
(2, 1, 1, 1, '<p>2 x 4 =</p>\r\n', NULL, '45', '23', '23', '3', '8', 'E'),
(3, 1, 1, 1, '<p>1 + 1</p>\r\n', NULL, '1', '2', '3', '4', '5', 'B'),
(4, 1, 1, 1, '<p>2 x 2</p>\r\n', NULL, '1', '3', '2', '4', '33', 'D'),
(5, 2, 1, 2, '<p>adasd</p>\r\n', NULL, 'as', 'ss', 'dddd', 'ssdd', 'cccc', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria_tb`
--

CREATE TABLE `sub_kriteria_tb` (
  `id_sub_kriteria` int(11) NOT NULL,
  `nama_sub` text NOT NULL,
  `nama_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kriteria_tb`
--

INSERT INTO `sub_kriteria_tb` (`id_sub_kriteria`, `nama_sub`, `nama_kriteria`) VALUES
(1, 'Biologi', 1),
(2, 'Fisika', 1),
(3, 'Kimia', 1),
(4, 'Bahasa Indonesia', 1),
(5, 'Bahasa Inggris', 1),
(6, 'Matematika', 1),
(7, 'Realistis', 2),
(8, 'Intelektual', 2),
(9, 'Artistik', 2),
(10, 'Sosial', 2),
(11, 'Enterprise', 2),
(12, 'Konvensional', 2),
(13, 'Linguistik', 5),
(14, 'Matematikal', 5),
(15, 'Musikal', 5),
(16, 'Kinestik', 5),
(17, 'Spartial', 5),
(18, 'Intrapersonal', 5),
(19, 'Interpersonal', 5),
(20, 'Naturalistik', 5),
(21, 'Eksistensial', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL DEFAULT '0',
  `id_kelas` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `nama_ujian`, `id_kelas`, `id_mapel`, `id_guru`, `waktu`, `tanggal`) VALUES
(1, 'kelas 12 TKJ 2', 1, 1, 1, 30, '2020-03-16'),
(2, 'B.Indonesia 1', 1, 2, 2, 60, '2021-07-01');

--
-- Triggers `ujian`
--
DELIMITER $$
CREATE TRIGGER `hapus_ujian` BEFORE DELETE ON `ujian` FOR EACH ROW BEGIN
	DELETE FROM ikut_ujian WHERE ikut_ujian.id_ujian=OLD.id_ujian;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif_tb`
--
ALTER TABLE `alternatif_tb`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `data_set`
--
ALTER TABLE `data_set`
  ADD PRIMARY KEY (`id_data_set`),
  ADD KEY `nama_sub` (`nama_sub`),
  ADD KEY `nilai` (`nilai`),
  ADD KEY `nama_kriteria` (`nama_kriteria`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `mapel` (`mapel`);

--
-- Indexes for table `ikut_ujian`
--
ALTER TABLE `ikut_ujian`
  ADD PRIMARY KEY (`id_tes`),
  ADD KEY `id_ujian` (`id_ujian`),
  ADD KEY `siswa` (`id_siswa`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD PRIMARY KEY (`id_konversi`),
  ADD KEY `nilai_kons` (`nilai_kons`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `minimum_alternatif_tb`
--
ALTER TABLE `minimum_alternatif_tb`
  ADD PRIMARY KEY (`id_minimum`) USING BTREE,
  ADD KEY `mapel` (`mapel`) USING BTREE,
  ADD KEY `nama_alternatif` (`nama_alternatif`),
  ADD KEY `mapel_2` (`mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_konversi`
--
ALTER TABLE `nilai_konversi`
  ADD PRIMARY KEY (`id_nilai_konversi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `mapel` (`mapel`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `guru` (`guru`);

--
-- Indexes for table `sub_kriteria_tb`
--
ALTER TABLE `sub_kriteria_tb`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `nama_kriteria` (`nama_kriteria`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `nama_ujian` (`nama_ujian`),
  ADD KEY `FK1_kelas` (`id_kelas`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `alternatif_tb`
--
ALTER TABLE `alternatif_tb`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_set`
--
ALTER TABLE `data_set`
  MODIFY `id_data_set` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ikut_ujian`
--
ALTER TABLE `ikut_ujian`
  MODIFY `id_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `konversi`
--
ALTER TABLE `konversi`
  MODIFY `id_konversi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `minimum_alternatif_tb`
--
ALTER TABLE `minimum_alternatif_tb`
  MODIFY `id_minimum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_konversi`
--
ALTER TABLE `nilai_konversi`
  MODIFY `id_nilai_konversi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_kriteria_tb`
--
ALTER TABLE `sub_kriteria_tb`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_set`
--
ALTER TABLE `data_set`
  ADD CONSTRAINT `FK1_Sub_kriteria` FOREIGN KEY (`nama_sub`) REFERENCES `sub_kriteria_tb` (`id_sub_kriteria`),
  ADD CONSTRAINT `FK2_Konversi` FOREIGN KEY (`nilai`) REFERENCES `konversi` (`id_konversi`),
  ADD CONSTRAINT `FK3_Nama_Kriteria` FOREIGN KEY (`nama_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `ikut_ujian`
--
ALTER TABLE `ikut_ujian`
  ADD CONSTRAINT `FK1_ujian` FOREIGN KEY (`id_ujian`) REFERENCES `ujian` (`id_ujian`),
  ADD CONSTRAINT `FK2_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `konversi`
--
ALTER TABLE `konversi`
  ADD CONSTRAINT `konversi_ibfk_1` FOREIGN KEY (`nilai_kons`) REFERENCES `nilai_konversi` (`id_nilai_konversi`);

--
-- Constraints for table `minimum_alternatif_tb`
--
ALTER TABLE `minimum_alternatif_tb`
  ADD CONSTRAINT `alternatif_ibfk_1` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `alternatif_ibfk_2` FOREIGN KEY (`nama_alternatif`) REFERENCES `alternatif_tb` (`id_alternatif`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_guruFK3` FOREIGN KEY (`guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `soal_kelasFK2` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `soal_mapelFK1` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `sub_kriteria_tb`
--
ALTER TABLE `sub_kriteria_tb`
  ADD CONSTRAINT `alternatif_sub_ibfk_1` FOREIGN KEY (`nama_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `FK1_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `FK2_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `FK3_guru` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
