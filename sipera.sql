-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 23.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `full_name`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@unj.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stock` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`barang_id`, `nama_barang`, `stock`, `status`) VALUES
(1, 'Kabel HDMI', 3, 'Tersedia'),
(2, 'Alat Tulis', 4, 'Terpakai'),
(3, 'Proyektor', 4, 'Tersedia'),
(6, 'kabel vga', 2, 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `day1`
--

CREATE TABLE `day1` (
  `day1_id` int(11) NOT NULL,
  `waktu_perkuliahan` int(50) NOT NULL,
  `ruangan1` varchar(50) NOT NULL,
  `ruangan2` varchar(50) NOT NULL,
  `ruangan3` varchar(50) NOT NULL,
  `ruangan4` varchar(50) NOT NULL,
  `ruangan5` varchar(50) NOT NULL,
  `ruangan6` varchar(50) NOT NULL,
  `ruangan7` varchar(50) NOT NULL,
  `ruangan8` varchar(50) NOT NULL,
  `ruangan9` varchar(50) NOT NULL,
  `ruangan10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `day1`
--

INSERT INTO `day1` (`day1_id`, `waktu_perkuliahan`, `ruangan1`, `ruangan2`, `ruangan3`, `ruangan4`, `ruangan5`, `ruangan6`, `ruangan7`, `ruangan8`, `ruangan9`, `ruangan10`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', ''),
(2, 1, '', '', '', '', '', '', '', '', '', ''),
(3, 2, '', '', '', '', '', '', '', '', '', ''),
(4, 3, '', '', '', '', '', '', '', '', '', ''),
(5, 4, '', '', '', '', '', '', '', '', '', ''),
(6, 5, '', '', '', '', '', '', '', '', '', ''),
(7, 6, '', '', '', '', '', '', '', '', '', ''),
(8, 7, '', '', '', '', '', '', '', '', '', ''),
(9, 8, '', '', '', '', '', '', '', '', '', ''),
(10, 9, '', '', '', '', '', '', '', '', '', ''),
(11, 10, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `day2`
--

CREATE TABLE `day2` (
  `day2_id` int(11) NOT NULL,
  `waktu_perkuliahan` int(50) NOT NULL,
  `ruangan1` varchar(50) NOT NULL,
  `ruangan2` varchar(50) NOT NULL,
  `ruangan3` varchar(50) NOT NULL,
  `ruangan4` varchar(50) NOT NULL,
  `ruangan5` varchar(50) NOT NULL,
  `ruangan6` varchar(50) NOT NULL,
  `ruangan7` varchar(50) NOT NULL,
  `ruangan8` varchar(50) NOT NULL,
  `ruangan9` varchar(50) NOT NULL,
  `ruangan10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `day2`
--

INSERT INTO `day2` (`day2_id`, `waktu_perkuliahan`, `ruangan1`, `ruangan2`, `ruangan3`, `ruangan4`, `ruangan5`, `ruangan6`, `ruangan7`, `ruangan8`, `ruangan9`, `ruangan10`) VALUES
(1, 0, '', 'HCI', '', '', '', '', '', '', '', ''),
(2, 1, '', 'HCI', '', '', '', '', '', '', '', ''),
(3, 2, '', '', '', '', '', '', '', '', '', ''),
(4, 3, '', '', '', '', '', '', '', '', '', ''),
(5, 4, '', '', '', '', '', '', '', '', '', ''),
(6, 5, '', '', '', '', '', '', '', '', '', ''),
(7, 6, '', '', '', '', '', '', '', '', '', ''),
(8, 7, '', '', '', '', '', '', '', '', '', ''),
(9, 8, '', '', '', '', '', '', '', '', '', ''),
(10, 9, '', '', '', '', '', '', '', '', '', ''),
(11, 10, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `day3`
--

CREATE TABLE `day3` (
  `day3_id` int(11) NOT NULL,
  `waktu_perkuliahan` int(50) NOT NULL,
  `ruangan1` varchar(50) NOT NULL,
  `ruangan2` varchar(50) NOT NULL,
  `ruangan3` varchar(50) NOT NULL,
  `ruangan4` varchar(50) NOT NULL,
  `ruangan5` varchar(50) NOT NULL,
  `ruangan6` varchar(50) NOT NULL,
  `ruangan7` varchar(50) NOT NULL,
  `ruangan8` varchar(50) NOT NULL,
  `ruangan9` varchar(50) NOT NULL,
  `ruangan10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `day3`
--

INSERT INTO `day3` (`day3_id`, `waktu_perkuliahan`, `ruangan1`, `ruangan2`, `ruangan3`, `ruangan4`, `ruangan5`, `ruangan6`, `ruangan7`, `ruangan8`, `ruangan9`, `ruangan10`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', ''),
(2, 1, '', '', '', '', '', '', '', '', '', ''),
(3, 2, '', '', '', '', '', '', '', '', '', ''),
(4, 3, '', '', '', '', '', '', '', '', '', ''),
(5, 4, '', '', '', '', '', '', '', '', '', ''),
(6, 5, '', '', '', '', '', '', '', '', '', ''),
(7, 6, '', '', '', '', '', '', '', '', '', ''),
(8, 7, '', '', '', '', '', '', '', '', '', ''),
(9, 8, '', '', '', '', '', '', '', '', '', ''),
(10, 9, '', '', '', '', '', '', '', '', '', ''),
(11, 10, '', '', '', '', '', '', '', '', '', 'HCI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `day4`
--

CREATE TABLE `day4` (
  `day4_id` int(11) NOT NULL,
  `waktu_perkuliahan` int(50) NOT NULL,
  `ruangan1` varchar(50) NOT NULL,
  `ruangan2` varchar(50) NOT NULL,
  `ruangan3` varchar(50) NOT NULL,
  `ruangan4` varchar(50) NOT NULL,
  `ruangan5` varchar(50) NOT NULL,
  `ruangan6` varchar(50) NOT NULL,
  `ruangan7` varchar(50) NOT NULL,
  `ruangan8` varchar(50) NOT NULL,
  `ruangan9` varchar(50) NOT NULL,
  `ruangan10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `day4`
--

INSERT INTO `day4` (`day4_id`, `waktu_perkuliahan`, `ruangan1`, `ruangan2`, `ruangan3`, `ruangan4`, `ruangan5`, `ruangan6`, `ruangan7`, `ruangan8`, `ruangan9`, `ruangan10`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', ''),
(2, 1, '', '', '', '', '', '', '', '', '', ''),
(3, 2, '', '', '', '', '', '', '', '', '', ''),
(4, 3, '', '', '', '', '', '', '', '', '', ''),
(5, 4, '', '', '', '', '', '', '', '', '', ''),
(6, 5, '', '', '', '', '', '', '', '', '', ''),
(7, 6, '', '', '', '', '', '', '', '', '', ''),
(8, 7, '', '', '', '', '', '', '', '', '', ''),
(9, 8, '', '', '', 'Metode Numerik', '', '', '', '', '', ''),
(10, 9, '', '', '', '', '', '', '', '', '', ''),
(11, 10, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `day5`
--

CREATE TABLE `day5` (
  `day5_id` int(11) NOT NULL,
  `waktu_perkuliahan` int(50) NOT NULL,
  `ruangan1` varchar(50) NOT NULL,
  `ruangan2` varchar(50) NOT NULL,
  `ruangan3` varchar(50) NOT NULL,
  `ruangan4` varchar(50) NOT NULL,
  `ruangan5` varchar(50) NOT NULL,
  `ruangan6` varchar(50) NOT NULL,
  `ruangan7` varchar(50) NOT NULL,
  `ruangan8` varchar(50) NOT NULL,
  `ruangan9` varchar(50) NOT NULL,
  `ruangan10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `day5`
--

INSERT INTO `day5` (`day5_id`, `waktu_perkuliahan`, `ruangan1`, `ruangan2`, `ruangan3`, `ruangan4`, `ruangan5`, `ruangan6`, `ruangan7`, `ruangan8`, `ruangan9`, `ruangan10`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', ''),
(2, 1, '', '', '', '', '', '', '', '', '', ''),
(3, 2, '', '', '', '', '', '', '', '', '', ''),
(4, 3, '', '', '', '', '', '', '', '', '', ''),
(5, 4, '', '', '', '', '', '', '', '', '', ''),
(6, 5, '', '', '', '', '', '', '', '', '', ''),
(7, 6, '', '', '', '', '', '', '', '', '', ''),
(8, 7, '', '', '', 'Metode Numerik', '', '', '', '', '', ''),
(9, 8, '', '', '', '', '', '', '', '', '', ''),
(10, 9, '', '', '', '', '', '', '', '', '', ''),
(11, 10, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputdata`
--

CREATE TABLE `inputdata` (
  `input_id` int(11) NOT NULL,
  `ruangan_id` int(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jam_mulai` int(2) NOT NULL,
  `jam_akhir` int(2) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inputdata`
--

INSERT INTO `inputdata` (`input_id`, `ruangan_id`, `tgl_pinjam`, `jam_mulai`, `jam_akhir`, `nama_dosen`, `mata_kuliah`, `prodi`, `status`) VALUES
(1, 1, '2021-01-06', 1, 3, 'Fariani', 'Metode Penelitian', 'Ilmu Komputer', 'Disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` int(10) NOT NULL,
  `ip_adress` int(10) NOT NULL,
  `page_url` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logs`
--

INSERT INTO `logs` (`id`, `ip_adress`, `page_url`, `create_at`, `update_at`) VALUES
(59, 0, 'http://localhost:8080/adduser', '2021-01-07 00:46:34', '2021-01-07 00:46:34'),
(60, 0, 'http://localhost:8080/tambahuser', '2021-01-07 00:46:52', '2021-01-07 00:46:52'),
(61, 0, 'http://localhost:8080/edituser', '2021-01-07 00:47:22', '2021-01-07 00:47:22'),
(62, 0, 'http://localhost:8080/deleteuser', '2021-01-07 00:47:31', '2021-01-07 00:47:31'),
(63, 0, 'http://localhost:8080/dashboard', '2021-01-07 02:42:17', '2021-01-07 02:42:17'),
(64, 0, 'http://localhost:8080/dashboard', '2021-01-07 02:42:18', '2021-01-07 02:42:18'),
(65, 0, 'http://localhost:8080/dashboard', '2021-01-07 03:33:16', '2021-01-07 03:33:16'),
(66, 0, 'http://localhost:8080/dashboard', '2021-01-07 03:33:17', '2021-01-07 03:33:17'),
(67, 0, 'http://localhost:8080/dashboard', '2021-01-07 03:33:22', '2021-01-07 03:33:22'),
(68, 0, 'http://localhost:8080/index', '2021-01-07 03:34:36', '2021-01-07 03:34:36'),
(69, 0, 'http://localhost:8080/index', '2021-01-07 03:34:44', '2021-01-07 03:34:44'),
(70, 0, 'http://localhost:8080/index', '2021-01-07 03:39:07', '2021-01-07 03:39:07'),
(71, 0, 'http://localhost:8080/dashboard', '2021-01-07 03:47:15', '2021-01-07 03:47:15'),
(72, 0, 'http://localhost:8080/dashboard', '2021-01-07 16:03:35', '2021-01-07 16:03:35'),
(73, 0, 'http://localhost:8080/dashboard', '2021-01-07 16:03:37', '2021-01-07 16:03:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordersbarang`
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
-- Dumping data untuk tabel `ordersbarang`
--

INSERT INTO `ordersbarang` (`orderbarang_id`, `user_id`, `barang_id`, `tgl_pinjam`, `jam_mulai`, `jam_akhir`, `nama_dosen`, `mata_kuliah`, `prodi`, `status`) VALUES
(1, 1, 1, '2020-12-23', 1, 3, 'Med Irzal', 'Dasar-dasar Pemrograman', 'Ilmu Komputer', 'Disetujui'),
(2, 2, 2, '2021-01-07', 0, 3, 'ficky', 'jarkom', 'Ilmu Komputer', 'Belum Disetujui'),
(3, 3, 3, '2021-01-07', 4, 6, 'med', 'oop', 'Ilmu Komputer', 'Belum Disetujui'),
(4, 2, 3, '2021-01-14', 1, 3, 'fariani', 'jarkom', 'Matematika', 'Disetujui'),
(5, 4, 6, '2021-01-08', 0, 3, 'ficky', 'bigdat', 'Ilmu Komputer', 'Disetujui'),
(6, 2, 2, '2021-01-10', 4, 6, 'ria', 'bigdat', 'Matematika', 'Disetujui'),
(7, 2, 2, '2021-01-08', 0, 10, 'fariani', 'jarkom', 'Ilmu Komputer', 'Disetujui'),
(8, 2, 3, '2021-01-09', 3, 5, 'med', 'bigdat', 'Ilmu Komputer', 'Belum Disetujui'),
(9, 2, 1, '2021-01-09', 0, 4, 'fariani', 'jarkom', 'Ilmu Komputer', 'Belum Disetujui'),
(10, 2, 2, '2021-01-02', 3, 6, 'fariani', 'bigdat', 'Ilmu Komputer', 'Belum Disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordersruangan`
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
-- Dumping data untuk tabel `ordersruangan`
--

INSERT INTO `ordersruangan` (`orderruangan_id`, `user_id`, `ruangan_id`, `tgl_pinjam`, `jam_mulai`, `jam_akhir`, `nama_dosen`, `mata_kuliah`, `prodi`, `status`) VALUES
(1, 1, 1, '2020-12-23', 1, 3, 'Med Irzal', 'Dasar-dasar Pemrograman', 'Ilmu Komputer', 'Disetujui'),
(2, 2, 2, '2021-01-30', 9, 10, 'med', 'metlit', 'Ilmu Komputer', 'Disetujui'),
(3, 2, 1, '2021-01-07', 3, 4, 'ficky', 'jarkom', 'Matematika', 'Disetujui'),
(6, 2, 1, '2021-01-09', 0, 3, 'ria', 'bigdat', 'Ilmu Komputer', 'Belum Disetujui'),
(7, 2, 10, '2021-01-08', 0, 10, 'ficky', 'jarkom', 'Ilmu Komputer', 'Disetujui'),
(10, 2, 2, '2021-01-06', 1, 2, 'fariani', 'bigdat', 'Ilmu Komputer', 'Belum Disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangans`
--

CREATE TABLE `ruangans` (
  `ruangan_id` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangans`
--

INSERT INTO `ruangans` (`ruangan_id`, `nama_ruangan`, `deskripsi`, `status`) VALUES
(1, 'GDS 507', 'Ruang Belajar', 'Tersedia'),
(2, 'GDS 508', 'Ruang Belajar', 'Tersedia'),
(3, 'GDS 512', 'Lab Komputer', 'Tersedia'),
(4, 'GDS 513', 'Lab Komputer', 'Tersedia'),
(5, 'GDS 514', 'Lab Komputer', 'Tersedia'),
(6, 'GDS 607', 'Ruang Belajar', 'Tersedia'),
(7, 'GDS 608', 'Ruang Belajar', 'Tersedia'),
(8, 'GDS 612', 'Ruang Belajar', 'Tersedia'),
(9, 'GDS 613', 'Ruang Belajar', 'Tersedia'),
(10, 'GDS 614', 'Ruang Belajar', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `nrm`, `full_name`, `jenis_kelamin`, `prodi`, `angkatan`) VALUES
(1, 'ridwans99', 'ridwan1233', 1313618016, 'Ridwan Syah', 'Laki-Laki', 'Ilmu Komputer', '2018'),
(2, 'ardani77', 'ardani77', 1313618014, 'M. Ardani', 'Laki-Laki', 'Ilmu Komputer', '2018'),
(3, 'asyraf', 'asyraf123', 1313618008, 'asyraf', 'Laki-Laki', 'Ilmu Komputer', '2018'),
(4, 'lazu', 'lazu123', 1313618014, 'lazu', 'Laki-Laki', 'Ilmu Komputer', '2018');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indeks untuk tabel `day1`
--
ALTER TABLE `day1`
  ADD PRIMARY KEY (`day1_id`);

--
-- Indeks untuk tabel `day2`
--
ALTER TABLE `day2`
  ADD PRIMARY KEY (`day2_id`);

--
-- Indeks untuk tabel `day3`
--
ALTER TABLE `day3`
  ADD PRIMARY KEY (`day3_id`);

--
-- Indeks untuk tabel `day4`
--
ALTER TABLE `day4`
  ADD PRIMARY KEY (`day4_id`);

--
-- Indeks untuk tabel `day5`
--
ALTER TABLE `day5`
  ADD PRIMARY KEY (`day5_id`);

--
-- Indeks untuk tabel `inputdata`
--
ALTER TABLE `inputdata`
  ADD PRIMARY KEY (`input_id`);

--
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ordersbarang`
--
ALTER TABLE `ordersbarang`
  ADD PRIMARY KEY (`orderbarang_id`);

--
-- Indeks untuk tabel `ordersruangan`
--
ALTER TABLE `ordersruangan`
  ADD PRIMARY KEY (`orderruangan_id`);

--
-- Indeks untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`ruangan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `day1`
--
ALTER TABLE `day1`
  MODIFY `day1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `day2`
--
ALTER TABLE `day2`
  MODIFY `day2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `day3`
--
ALTER TABLE `day3`
  MODIFY `day3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `day4`
--
ALTER TABLE `day4`
  MODIFY `day4_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `day5`
--
ALTER TABLE `day5`
  MODIFY `day5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `inputdata`
--
ALTER TABLE `inputdata`
  MODIFY `input_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `ordersbarang`
--
ALTER TABLE `ordersbarang`
  MODIFY `orderbarang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ordersruangan`
--
ALTER TABLE `ordersruangan`
  MODIFY `orderruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `ruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
