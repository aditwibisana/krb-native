-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 02:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kebunraya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`email`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pin` int(10) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id_pengguna`, `email`, `pin`, `no_hp`, `jenis_kelamin`, `nama_lengkap`, `alamat`) VALUES
(2, 'pengguna@user.com', 0, '081256813171', 'Laki-Laki', 'Tanboy Kun', 'Pondok Gede Tanggerang'),
(3, 'jerapah@gmail.com', 0, '08881484148', 'Perempuan', 'Jerapah Leher Panjang', 'Kebun Binatang\r\n'),
(4, 'adit', 0, '212121', 'Laki-Laki', 'aagym', 'aaa'),
(5, 'b.awibisana@gmail.com', 210901, '081256813171', 'Laki-Laki', 'Bayu Adhitya Wibisana', 'Handil'),
(6, 'user@gmail.com', 4444, '081256813171', 'Laki-Laki', 'Jenggo Fulanwati', 'Tenggarong');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengunjung`
--

CREATE TABLE `data_pengunjung` (
  `nama_pengunjung` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengunjung`
--

INSERT INTO `data_pengunjung` (`nama_pengunjung`, `tanggal`, `no_hp`, `alamat`) VALUES
('Bayu Wibisana', '2020-03-20', '081256813171', 'Balikpapan'),
('Keiko', '2021-03-19', '085246557810', 'Manado'),
('adit', '2021-03-20', '085246557810', 'bpp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
