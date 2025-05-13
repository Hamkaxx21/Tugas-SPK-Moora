-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 10, 2025 at 04:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(42) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Pegawai', 'pegawai', '5b6ba13f79129a74a3e819b78e36b922', 'admin'),
(2, 'Administrator Petugas 2', 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_pegawai` int(11) NOT NULL,
  `namapegawai` varchar(50) NOT NULL,
  `jam_kerja` int(11) NOT NULL,
  `jumlah_proyek` int(11) NOT NULL,
  `jam_lembur` int(11) NOT NULL,
  `hari_sakit` int(11) NOT NULL,
  `gaji_bulanan` decimal(10,2) NOT NULL,
  `jam_training` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_pegawai`, `namapegawai`, `jam_kerja`, `jumlah_proyek`, `jam_lembur`, `hari_sakit`, `gaji_bulanan`, `jam_training`) VALUES
(1, 'Aldi', 33, 32, 22, 2, 6750.00, 66),
(2, 'Bima', 34, 34, 13, 14, 7500.00, 61),
(3, 'Citra', 37, 27, 6, 3, 5850.00, 1),
(4, 'Dian', 52, 10, 28, 12, 4800.00, 0),
(5, 'Eka', 38, 11, 29, 13, 4800.00, 9),
(6, 'Fajar', 46, 31, 8, 0, 7800.00, 95),
(7, 'Gita', 55, 20, 29, 2, 5250.00, 27),
(8, 'Hani', 42, 46, 7, 8, 7200.00, 64),
(9, 'Indra', 51, 23, 21, 14, 4200.00, 0),
(10, 'Joko', 41, 33, 2, 6, 6050.00, 53),
(11, 'Kiki', 38, 1, 5, 0, 7800.00, 90),
(12, 'Lia', 39, 13, 2, 13, 5250.00, 88),
(13, 'Mira', 31, 11, 16, 1, 4900.00, 17),
(14, 'Nina', 33, 30, 5, 13, 5600.00, 26),
(15, 'Oki', 33, 49, 13, 1, 4400.00, 37),
(16, 'Putri', 33, 41, 9, 13, 6000.00, 46),
(17, 'Rian', 43, 26, 29, 12, 7200.00, 76),
(18, 'Sari', 47, 36, 6, 12, 6500.00, 54),
(19, 'Tata', 57, 9, 24, 1, 5500.00, 36),
(20, 'Umar', 52, 0, 9, 1, 4200.00, 66),
(21, 'Vina', 33, 28, 13, 13, 6600.00, 53),
(22, 'Wawan', 30, 22, 9, 2, 9000.00, 20),
(23, 'Yani', 48, 40, 9, 13, 6300.00, 71),
(24, 'Zaki', 55, 2, 28, 8, 6600.00, 78),
(25, 'Anya', 50, 21, 24, 11, 4800.00, 49),
(26, 'Bagas', 59, 24, 0, 13, 6750.00, 9),
(27, 'Cahya', 59, 24, 23, 6, 7200.00, 26),
(28, 'Dafa', 44, 42, 3, 10, 7800.00, 45),
(29, 'Elma', 31, 34, 14, 6, 5400.00, 42),
(30, 'Farah', 45, 25, 29, 9, 5200.00, 37),
(31, 'Galih', 38, 15, 25, 2, 6050.00, 16),
(32, 'Hesti', 39, 25, 7, 7, 8400.00, 22),
(33, 'Iqbal', 48, 49, 16, 14, 4800.00, 37),
(34, 'Jihan', 44, 26, 24, 8, 8400.00, 37),
(35, 'Kevin', 34, 13, 0, 10, 5600.00, 36),
(36, 'Luna', 31, 9, 18, 11, 9000.00, 21),
(37, 'Mega', 53, 42, 10, 2, 6600.00, 18),
(38, 'Niko', 31, 6, 15, 7, 6600.00, 48),
(39, 'Omar', 46, 7, 1, 1, 4950.00, 6),
(40, 'Prita', 44, 2, 2, 8, 9000.00, 85),
(41, 'Raka', 59, 45, 9, 13, 4800.00, 28),
(42, 'Sinta', 33, 10, 6, 2, 6300.00, 28),
(43, 'Tomi', 46, 48, 4, 6, 7800.00, 21),
(44, 'Utami', 43, 25, 2, 3, 7800.00, 85),
(45, 'Vito', 58, 7, 29, 3, 6000.00, 4),
(46, 'Wulan', 31, 19, 11, 6, 5400.00, 90),
(47, 'Yoga', 41, 19, 26, 1, 4900.00, 21),
(48, 'Zara', 45, 31, 20, 2, 4950.00, 82),
(49, 'Adel', 59, 49, 0, 2, 6750.00, 13),
(50, 'Benny', 53, 10, 19, 13, 6000.00, 15),
(51, 'Cinta', 55, 26, 29, 4, 6050.00, 28),
(52, 'Didi', 46, 9, 12, 8, 6000.00, 18),
(53, 'Erlin', 38, 34, 4, 3, 7150.00, 12),
(54, 'Fikri', 50, 22, 0, 8, 4200.00, 92),
(55, 'Gilang', 32, 26, 6, 6, 5250.00, 68),
(56, 'Huda', 41, 18, 21, 3, 6500.00, 7),
(57, 'Intan', 33, 46, 28, 8, 4950.00, 36),
(58, 'Jaya', 32, 42, 8, 12, 7000.00, 27),
(59, 'Kirana', 53, 7, 5, 2, 4550.00, 74),
(60, 'Lesti', 51, 17, 19, 8, 6600.00, 99),
(61, 'Miko', 40, 17, 14, 4, 6600.00, 20),
(62, 'Nadia', 43, 44, 0, 13, 6750.00, 75),
(63, 'Opik', 44, 29, 12, 0, 7800.00, 73),
(64, 'Panca', 50, 10, 14, 9, 8400.00, 21),
(65, 'Rita', 41, 37, 13, 9, 4950.00, 3),
(66, 'Seno', 54, 32, 4, 3, 4900.00, 12),
(67, 'Tari', 55, 30, 19, 0, 7200.00, 93),
(68, 'Uci', 53, 10, 17, 14, 6600.00, 64),
(69, 'Via', 52, 6, 9, 6, 6300.00, 9),
(70, 'Wira', 32, 2, 13, 11, 6600.00, 8),
(71, 'Yuda', 53, 20, 13, 8, 5500.00, 75),
(72, 'Zeni', 53, 1, 16, 11, 5600.00, 15),
(73, 'Alya', 36, 42, 15, 1, 6000.00, 41),
(74, 'Bayu', 37, 6, 15, 1, 6000.00, 8),
(75, 'Cindy', 31, 6, 24, 10, 6600.00, 1),
(76, 'Danu', 55, 36, 22, 3, 7700.00, 84),
(77, 'Endah', 32, 46, 19, 0, 4550.00, 82),
(78, 'Fani', 42, 28, 6, 6, 7500.00, 38),
(79, 'Gerry', 60, 36, 27, 13, 7150.00, 94),
(80, 'Hana', 31, 27, 5, 6, 4950.00, 53),
(81, 'Ira', 38, 12, 25, 6, 6500.00, 94),
(82, 'Jojo', 40, 19, 14, 14, 5850.00, 0),
(83, 'Kamal', 35, 24, 10, 13, 4800.00, 85),
(84, 'Lani', 53, 38, 22, 14, 4400.00, 67),
(85, 'Oscar', 44, 16, 13, 13, 5400.00, 0),
(86, 'Putra', 33, 11, 7, 4, 8400.00, 40),
(87, 'Raisa', 59, 1, 9, 1, 4550.00, 59),
(88, 'Salsa', 33, 45, 2, 4, 4200.00, 12),
(89, 'Tika', 31, 1, 25, 5, 7200.00, 22),
(90, 'Udin', 33, 11, 10, 2, 8400.00, 53),
(91, 'Vera', 44, 42, 5, 6, 6600.00, 26),
(92, 'Wahyu', 42, 11, 26, 12, 5500.00, 84),
(93, 'Yuni', 54, 9, 29, 7, 8400.00, 3),
(94, 'Zidan', 44, 19, 10, 7, 6300.00, 81),
(95, 'Nanda', 47, 4, 19, 10, 5500.00, 33),
(96, 'Reno', 49, 24, 20, 2, 7800.00, 43),
(97, 'Syifa', 45, 24, 16, 12, 5850.00, 0),
(98, 'Tito', 41, 31, 12, 10, 7800.00, 64),
(99, 'Laila', 50, 33, 0, 9, 6000.00, 37),
(100, 'Arga', 36, 9, 10, 14, 7800.00, 30);

-- --------------------------------------------------------

--
-- Table structure for table `kriteriagajibulanan`
--

CREATE TABLE `kriteriagajibulanan` (
  `id_gaji` int(11) NOT NULL,
  `gaji_bulanan` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteriagajibulanan`
--

INSERT INTO `kriteriagajibulanan` (`id_gaji`, `gaji_bulanan`, `nilai`) VALUES
(1, '3500-5000', '40'),
(2, '5000-6500', '30'),
(3, '6500-8000', '20'),
(4, '8000>', '10');

-- --------------------------------------------------------

--
-- Table structure for table `kriteriaharisakit`
--

CREATE TABLE `kriteriaharisakit` (
  `id_sakit` int(11) NOT NULL,
  `hari_sakit` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteriaharisakit`
--

INSERT INTO `kriteriaharisakit` (`id_sakit`, `hari_sakit`, `nilai`) VALUES
(1, '0-3', '40'),
(2, '4-7', '30'),
(3, '8-10', '20'),
(4, '11-14', '10');

-- --------------------------------------------------------

--
-- Table structure for table `kriteriajamkerja`
--

CREATE TABLE `kriteriajamkerja` (
  `id_kerja` int(11) NOT NULL,
  `jam_kerja` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteriajamkerja`
--

INSERT INTO `kriteriajamkerja` (`id_kerja`, `jam_kerja`, `nilai`) VALUES
(1, '30-39', '10'),
(2, '40-49', '20'),
(3, '50-59', '30'),
(4, '60>', '40');

-- --------------------------------------------------------

--
-- Table structure for table `kriteriajamlembur`
--

CREATE TABLE `kriteriajamlembur` (
  `id_lembur` int(11) NOT NULL,
  `jam_lembur` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteriajamlembur`
--

INSERT INTO `kriteriajamlembur` (`id_lembur`, `jam_lembur`, `nilai`) VALUES
(1, '0-7', '10'),
(2, '8-14', '20'),
(3, '15-21', '30'),
(4, '22-30', '40');

-- --------------------------------------------------------

--
-- Table structure for table `kriteriajamtraining`
--

CREATE TABLE `kriteriajamtraining` (
  `id_training` int(11) NOT NULL,
  `jam_training` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteriajamtraining`
--

INSERT INTO `kriteriajamtraining` (`id_training`, `jam_training`, `nilai`) VALUES
(1, '0-25', '10'),
(2, '26-50', '20'),
(3, '51-75', '30'),
(4, '76-100', '40');

-- --------------------------------------------------------

--
-- Table structure for table `kriteriajumlahproyek`
--

CREATE TABLE `kriteriajumlahproyek` (
  `id_proyek` int(11) NOT NULL,
  `jumlah_proyek` varchar(20) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteriajumlahproyek`
--

INSERT INTO `kriteriajumlahproyek` (`id_proyek`, `jumlah_proyek`, `nilai`) VALUES
(1, '0-19', '10'),
(2, '20-31', '20'),
(3, '32-41', '30'),
(4, '42-50', '40');

-- --------------------------------------------------------

--
-- Table structure for table `moo_alternatif`
--

CREATE TABLE `moo_alternatif` (
  `id_alternatif` tinyint(3) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `namapegawai` varchar(50) DEFAULT NULL,
  `jam_kerja` int(11) DEFAULT NULL,
  `jumlah_proyek` int(11) DEFAULT NULL,
  `jam_lembur` int(11) DEFAULT NULL,
  `hari_sakit` int(11) DEFAULT NULL,
  `gaji_bulanan` decimal(10,2) DEFAULT NULL,
  `jam_training` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moo_alternatif`
--

INSERT INTO `moo_alternatif` (`id_alternatif`, `id_pegawai`, `namapegawai`, `jam_kerja`, `jumlah_proyek`, `jam_lembur`, `hari_sakit`, `gaji_bulanan`, `jam_training`) VALUES
(1, 1, 'Aldi', 33, 32, 22, 2, 6750.00, 66),
(2, 2, 'Bima', 34, 34, 13, 14, 7500.00, 61),
(3, 3, 'Citra', 37, 27, 6, 3, 5850.00, 1),
(4, 4, 'Dian', 52, 10, 28, 12, 4800.00, 0),
(5, 5, 'Eka', 38, 11, 29, 13, 4800.00, 9),
(6, 6, 'Fajar', 46, 31, 8, 0, 7800.00, 95),
(7, 7, 'Gita', 55, 20, 29, 2, 5250.00, 27),
(8, 8, 'Hani', 42, 46, 7, 8, 7200.00, 64),
(9, 9, 'Indra', 51, 23, 21, 14, 4200.00, 0),
(10, 10, 'Joko', 41, 33, 2, 6, 6050.00, 53),
(11, 11, 'Kiki', 38, 1, 5, 0, 7800.00, 90),
(12, 12, 'Lia', 39, 13, 2, 13, 5250.00, 88),
(13, 13, 'Mira', 31, 11, 16, 1, 4900.00, 17),
(14, 14, 'Nina', 33, 30, 5, 13, 5600.00, 26),
(15, 15, 'Oki', 33, 49, 13, 1, 4400.00, 37),
(16, 16, 'Putri', 33, 41, 9, 13, 6000.00, 46),
(17, 17, 'Rian', 43, 26, 29, 12, 7200.00, 76),
(18, 18, 'Sari', 47, 36, 6, 12, 6500.00, 54),
(19, 19, 'Tata', 57, 9, 24, 1, 5500.00, 36),
(20, 20, 'Umar', 52, 0, 9, 1, 4200.00, 66),
(21, 21, 'Vina', 33, 28, 13, 13, 6600.00, 53),
(22, 22, 'Wawan', 30, 22, 9, 2, 9000.00, 20),
(23, 23, 'Yani', 48, 40, 9, 13, 6300.00, 71),
(24, 24, 'Zaki', 55, 2, 28, 8, 6600.00, 78),
(25, 25, 'Anya', 50, 21, 24, 11, 4800.00, 49),
(26, 26, 'Bagas', 59, 24, 0, 13, 6750.00, 9),
(27, 27, 'Cahya', 59, 24, 23, 6, 7200.00, 26),
(28, 28, 'Dafa', 44, 42, 3, 10, 7800.00, 45),
(29, 29, 'Elma', 31, 34, 14, 6, 5400.00, 42),
(30, 30, 'Farah', 45, 25, 29, 9, 5200.00, 37),
(31, 31, 'Galih', 38, 15, 25, 2, 6050.00, 16),
(32, 32, 'Hesti', 39, 25, 7, 7, 8400.00, 22),
(33, 33, 'Iqbal', 48, 49, 16, 14, 4800.00, 37),
(34, 34, 'Jihan', 44, 26, 24, 8, 8400.00, 37),
(35, 35, 'Kevin', 34, 13, 0, 10, 5600.00, 36),
(36, 36, 'Luna', 31, 9, 18, 11, 9000.00, 21),
(37, 37, 'Mega', 53, 42, 10, 2, 6600.00, 18),
(38, 38, 'Niko', 31, 6, 15, 7, 6600.00, 48),
(39, 39, 'Omar', 46, 7, 1, 1, 4950.00, 6),
(40, 40, 'Prita', 44, 2, 2, 8, 9000.00, 85),
(41, 41, 'Raka', 59, 45, 9, 13, 4800.00, 28),
(42, 42, 'Sinta', 33, 10, 6, 2, 6300.00, 28),
(43, 43, 'Tomi', 46, 48, 4, 6, 7800.00, 21),
(44, 44, 'Utami', 43, 25, 2, 3, 7800.00, 85),
(45, 45, 'Vito', 58, 7, 29, 3, 6000.00, 4),
(46, 46, 'Wulan', 31, 19, 11, 6, 5400.00, 90),
(47, 47, 'Yoga', 41, 19, 26, 1, 4900.00, 21),
(48, 48, 'Zara', 45, 31, 20, 2, 4950.00, 82),
(49, 49, 'Adel', 59, 49, 0, 2, 6750.00, 13),
(50, 50, 'Benny', 53, 10, 19, 13, 6000.00, 15),
(51, 51, 'Cinta', 55, 26, 29, 4, 6050.00, 28),
(52, 52, 'Didi', 46, 9, 12, 8, 6000.00, 18),
(53, 53, 'Erlin', 38, 34, 4, 3, 7150.00, 12),
(54, 54, 'Fikri', 50, 22, 0, 8, 4200.00, 92),
(55, 55, 'Gilang', 32, 26, 6, 6, 5250.00, 68),
(56, 56, 'Huda', 41, 18, 21, 3, 6500.00, 7),
(57, 57, 'Intan', 33, 46, 28, 8, 4950.00, 36),
(58, 58, 'Jaya', 32, 42, 8, 12, 7000.00, 27),
(59, 59, 'Kirana', 53, 7, 5, 2, 4550.00, 74),
(60, 60, 'Lesti', 51, 17, 19, 8, 6600.00, 99),
(61, 61, 'Miko', 40, 17, 14, 4, 6600.00, 20),
(62, 62, 'Nadia', 43, 44, 0, 13, 6750.00, 75),
(63, 63, 'Opik', 44, 29, 12, 0, 7800.00, 73),
(64, 64, 'Panca', 50, 10, 14, 9, 8400.00, 21),
(65, 65, 'Rita', 41, 37, 13, 9, 4950.00, 3),
(66, 66, 'Seno', 54, 32, 4, 3, 4900.00, 12),
(67, 67, 'Tari', 55, 30, 19, 0, 7200.00, 93),
(68, 68, 'Uci', 53, 10, 17, 14, 6600.00, 64),
(69, 69, 'Via', 52, 6, 9, 6, 6300.00, 9),
(70, 70, 'Wira', 32, 2, 13, 11, 6600.00, 8),
(71, 71, 'Yuda', 53, 20, 13, 8, 5500.00, 75),
(72, 72, 'Zeni', 53, 1, 16, 11, 5600.00, 15),
(73, 73, 'Alya', 36, 42, 15, 1, 6000.00, 41),
(74, 74, 'Bayu', 37, 6, 15, 1, 6000.00, 8),
(75, 75, 'Cindy', 31, 6, 24, 10, 6600.00, 1),
(76, 76, 'Danu', 55, 36, 22, 3, 7700.00, 84),
(77, 77, 'Endah', 32, 46, 19, 0, 4550.00, 82),
(78, 78, 'Fani', 42, 28, 6, 6, 7500.00, 38),
(79, 79, 'Gerry', 60, 36, 27, 13, 7150.00, 94),
(80, 80, 'Hana', 31, 27, 5, 6, 4950.00, 53),
(81, 81, 'Ira', 38, 12, 25, 6, 6500.00, 94),
(82, 82, 'Jojo', 40, 19, 14, 14, 5850.00, 0),
(83, 83, 'Kamal', 35, 24, 10, 13, 4800.00, 85),
(84, 84, 'Lani', 53, 38, 22, 14, 4400.00, 67),
(85, 85, 'Oscar', 44, 16, 13, 13, 5400.00, 0),
(86, 86, 'Putra', 33, 11, 7, 4, 8400.00, 40),
(87, 87, 'Raisa', 59, 1, 9, 1, 4550.00, 59),
(88, 88, 'Salsa', 33, 45, 2, 4, 4200.00, 12),
(89, 89, 'Tika', 31, 1, 25, 5, 7200.00, 22),
(90, 90, 'Udin', 33, 11, 10, 2, 8400.00, 53),
(91, 91, 'Vera', 44, 42, 5, 6, 6600.00, 26),
(92, 92, 'Wahyu', 42, 11, 26, 12, 5500.00, 84),
(93, 93, 'Yuni', 54, 9, 29, 7, 8400.00, 3),
(94, 94, 'Zidan', 44, 19, 10, 7, 6300.00, 81),
(95, 95, 'Nanda', 47, 4, 19, 10, 5500.00, 33),
(96, 96, 'Reno', 49, 24, 20, 2, 7800.00, 43),
(97, 97, 'Syifa', 45, 24, 16, 12, 5850.00, 0),
(98, 98, 'Tito', 41, 31, 12, 10, 7800.00, 64),
(99, 99, 'Laila', 50, 33, 0, 9, 6000.00, 37),
(100, 100, 'Arga', 36, 9, 10, 14, 7800.00, 30);

-- --------------------------------------------------------

--
-- Table structure for table `moo_kriteria`
--

CREATE TABLE `moo_kriteria` (
  `id_kriteria` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `kriteria` varchar(100) DEFAULT NULL,
  `type` set('Benefit','Cost') DEFAULT NULL,
  `bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moo_kriteria`
--

INSERT INTO `moo_kriteria` (`id_kriteria`, `kode`, `kriteria`, `type`, `bobot`) VALUES
(1, 'C1', 'Gaji bulanan (dollar)', 'Cost', 0.05),
(2, 'C2', 'Hari sakit', 'Cost', 0.1),
(3, 'C3', 'Jam kerja perminggu', 'Benefit', 0.25),
(4, 'C4', 'Jumlah proyek', 'Benefit', 0.3),
(5, 'C5', 'Jam lembur', 'Benefit', 0.15),
(6, 'C6', 'Waktu training (jam)', 'Benefit', 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `moo_nilai`
--

CREATE TABLE `moo_nilai` (
  `Id_nilai` int(11) UNSIGNED NOT NULL,
  `Id_alternatif` tinyint(3) NOT NULL,
  `Id_kriteria` tinyint(3) UNSIGNED NOT NULL,
  `nilai` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(42) NOT NULL,
  `level` enum('User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Rasyid Misbahuddin', 'rasyidm', '5b6ba13f79129a74a3e819b78e36b922', 'User'),
(2, 'rasyid', 'rasyid', '21232f297a57a5a743894a0e4a801fc3', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `kriteriagajibulanan`
--
ALTER TABLE `kriteriagajibulanan`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `kriteriaharisakit`
--
ALTER TABLE `kriteriaharisakit`
  ADD PRIMARY KEY (`id_sakit`);

--
-- Indexes for table `kriteriajamkerja`
--
ALTER TABLE `kriteriajamkerja`
  ADD PRIMARY KEY (`id_kerja`);

--
-- Indexes for table `kriteriajamlembur`
--
ALTER TABLE `kriteriajamlembur`
  ADD PRIMARY KEY (`id_lembur`);

--
-- Indexes for table `kriteriajamtraining`
--
ALTER TABLE `kriteriajamtraining`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `kriteriajumlahproyek`
--
ALTER TABLE `kriteriajumlahproyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `fk_pegawai` (`id_pegawai`);

--
-- Indexes for table `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `moo_nilai`
--
ALTER TABLE `moo_nilai`
  ADD PRIMARY KEY (`Id_nilai`),
  ADD KEY `Id_alternatif` (`Id_alternatif`),
  ADD KEY `Id_kriteria` (`Id_kriteria`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `kriteriagajibulanan`
--
ALTER TABLE `kriteriagajibulanan`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteriaharisakit`
--
ALTER TABLE `kriteriaharisakit`
  MODIFY `id_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteriajamkerja`
--
ALTER TABLE `kriteriajamkerja`
  MODIFY `id_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteriajamlembur`
--
ALTER TABLE `kriteriajamlembur`
  MODIFY `id_lembur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteriajamtraining`
--
ALTER TABLE `kriteriajamtraining`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteriajumlahproyek`
--
ALTER TABLE `kriteriajumlahproyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  MODIFY `id_alternatif` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  MODIFY `id_kriteria` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `moo_nilai`
--
ALTER TABLE `moo_nilai`
  MODIFY `Id_nilai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `data_siswa` (`id_pegawai`),
  ADD CONSTRAINT `moo_alternatif_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `data_siswa` (`id_pegawai`);

--
-- Constraints for table `moo_nilai`
--
ALTER TABLE `moo_nilai`
  ADD CONSTRAINT `moo_nilai_ibfk_1` FOREIGN KEY (`Id_alternatif`) REFERENCES `moo_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `moo_nilai_ibfk_2` FOREIGN KEY (`Id_kriteria`) REFERENCES `moo_kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
