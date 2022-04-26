-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(50) DEFAULT NULL,
  `penerbit_buku` varchar(40) DEFAULT NULL,
  `stok` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penerbit_buku`, `stok`) VALUES
('A83', 'Kumpulan Cerpen', 'Penerbit ABC', 21),
('A84', 'The Vanished Thief', 'Delta Media', 4),
('A85', 'Bintang Malam Hari', 'Penerbit XYZ', 18),
('A86', 'Komet Major', 'Grupmedia', 6),
('A87', 'The Maze Walker', 'Delta Press', 9),
('A88', 'Divergenes', 'Penerbit XYZ', 7),
('A89', 'Heri Pottar', 'Gamma Media', 7),
('A90', 'Negeri 5 Gedung', 'Grupmedia', 2),
('B22', 'Pemrograman Dengan Java', 'Penerbit Qwerty', 7),
('B23', 'Basis Data', 'Penerbit JKL', 9),
('B24', 'Pemrograman Web', 'Penerbit AAA', 19),
('B25', 'Statistika dan Probabilitas', 'ALYX Media', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
