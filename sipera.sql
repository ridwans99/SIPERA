-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 05:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipera`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `full_name`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@unj.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stock` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`barang_id`, `nama_barang`, `stock`, `status`) VALUES
(1, 'Kabel HDMI', 3, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `ordersbarang`
--

CREATE TABLE `ordersbarang` (
  `orderbarang_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `tgl_pinjam` date NOT NULL DEFAULT current_timestamp(),
  `jam_mulai` int(2) NOT NULL,
  `jam_akhir` int(2) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersbarang`
--

INSERT INTO `ordersbarang` (`orderbarang_id`, `user_id`, `barang_id`, `tgl_pinjam`, `jam_mulai`, `jam_akhir`, `nama_dosen`, `mata_kuliah`, `prodi`, `status`) VALUES
(1, 1, 1, '2020-12-23', 1, 3, 'Med Irzal', 'Dasar-dasar Pemrograman', 'Ilmu Komputer', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `ordersruangan`
--

CREATE TABLE `ordersruangan` (
  `orderruangan_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ruangan_id` int(10) NOT NULL,
  `tgl_pinjam` date NOT NULL DEFAULT current_timestamp(),
  `jam_mulai` int(2) NOT NULL,
  `jam_akhir` int(2) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersruangan`
--

INSERT INTO `ordersruangan` (`orderruangan_id`, `user_id`, `ruangan_id`, `tgl_pinjam`, `jam_mulai`, `jam_akhir`, `nama_dosen`, `mata_kuliah`, `prodi`, `status`) VALUES
(1, 1, 1, '2020-12-23', 1, 3, 'Med Irzal', 'Dasar-dasar Pemrograman', 'Ilmu Komputer', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `ruangan_id` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`ruangan_id`, `nama_ruangan`, `deskripsi`, `status`) VALUES
(1, 'GDS 507', 'Ruang Belajar', 'Terse');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nrm` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `nrm`, `full_name`, `jenis_kelamin`, `prodi`, `angkatan`) VALUES
(1, 'ardani77', 'ardani', 1313618014, 'Muhammad Ardani', 'Laki-laki', 'Ilmu Komputer', '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `ordersbarang`
--
ALTER TABLE `ordersbarang`
  ADD PRIMARY KEY (`orderbarang_id`);

--
-- Indexes for table `ordersruangan`
--
ALTER TABLE `ordersruangan`
  ADD PRIMARY KEY (`orderruangan_id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`ruangan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordersbarang`
--
ALTER TABLE `ordersbarang`
  MODIFY `orderbarang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordersruangan`
--
ALTER TABLE `ordersruangan`
  MODIFY `orderruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `ruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
