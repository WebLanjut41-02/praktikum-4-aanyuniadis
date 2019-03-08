-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 05:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `posisi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `posisi`) VALUES
('AD001', 'Admin', 'Admin123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(5) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE `benefit` (
  `id_benefit` varchar(5) NOT NULL,
  `level` enum('Level 1','Level 2','Level 3','Level 4','Level 5') NOT NULL,
  `desc_benefit` text NOT NULL,
  `tgl_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` varchar(5) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `dana_dibutuhkan` varchar(20) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `detail_project` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `dana_dibutuhkan`, `jatuh_tempo`, `detail_project`) VALUES
('1010', 'MObil Terbang', '100000000', '0000-00-00', 'asxdcfvgbhjk'),
('10101', 'Guci Kaca', '10000000', '0000-00-00', 'jhkhkjljlkl;kl;klk;'),
('12', 'Jendela emas', '1500000', '0000-00-00', 'khkjkljlkjl'),
('123', 'Patung Cerdas', '1200000000', '0000-00-00', 'jhkhkjljlkl;kl;klk;'),
('1234', 'Guci Kaca', '10000000', '0000-00-00', 'jjlkjljou bhjhkojoiu '),
('12345', 'aplikasi clever', '1230000', '0000-00-00', 'asxdcfvgbhjk'),
('134', 'Patung emas', '123450000', '0000-00-00', '4fghvjbklknjbhvbmn,bnv'),
('456', 'Aplikasi Pengusaha', '20000000', '0000-00-00', 'pengusaha adalah');

-- --------------------------------------------------------

--
-- Table structure for table `project_maker`
--

CREATE TABLE `project_maker` (
  `id_maker` varchar(10) NOT NULL,
  `nama_maker` varchar(20) NOT NULL,
  `ttl_maker` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `r_password` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`id_benefit`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `project_maker`
--
ALTER TABLE `project_maker`
  ADD PRIMARY KEY (`id_maker`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
