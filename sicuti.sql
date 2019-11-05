-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 02:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_cuti` int(11) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `is_publish` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_user`, `tahun`, `jumlah_cuti`, `jenis`, `is_publish`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 2019, 12, 'Cuti Tahunan', NULL, '2019-10-21 07:09:04', '2019-10-21 07:09:04', NULL),
(5, 1, 2019, 12, 'Cuti Khusus', NULL, '2019-10-21 07:10:51', '2019-10-21 07:10:51', NULL),
(6, 4, 2019, 12, 'Cuti Tahunan', NULL, '2019-11-05 05:30:16', '2019-11-05 05:30:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mohon_cuti`
--

CREATE TABLE `mohon_cuti` (
  `id_mohon_cuti` int(5) NOT NULL,
  `id_cuti` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `sisa_cuti` int(11) DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `jml_hari` int(1) DEFAULT NULL,
  `jenis` text,
  `alasan` varchar(50) DEFAULT NULL,
  `persetujuan` varchar(16) DEFAULT NULL,
  `manager_read` int(11) DEFAULT NULL,
  `pegawai_read` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mohon_cuti`
--

INSERT INTO `mohon_cuti` (`id_mohon_cuti`, `id_cuti`, `id_user`, `sisa_cuti`, `dari`, `sampai`, `jml_hari`, `jenis`, `alasan`, `persetujuan`, `manager_read`, `pegawai_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, NULL, '2019-10-25', '2019-10-25', 2, '1', 'Males aja si', '1', NULL, NULL, NULL, '2019-10-23 08:48:10', NULL),
(2, 4, 1, NULL, '2019-10-25', '2019-10-28', 3, NULL, 'CMau ke solo', '2', NULL, NULL, '2019-10-21 07:36:58', '2019-10-23 08:52:03', NULL),
(3, 6, 4, NULL, '2019-11-07', '2019-11-09', 2, NULL, 'Mau naik haji', NULL, NULL, NULL, '2019-11-05 05:32:39', '2019-11-05 05:32:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` int(11) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `handphone` int(11) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `kd_pegawai` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `handphone`, `join_date`, `password`, `remember_token`, `role`, `kd_pegawai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nopal', 'nopal@mail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$FdQh93pwQt3jkNpPs4B0X.8MtKgOMBfbHwnCVCS9ZdMbV4D7WweFK', 'fRfJpZt0lIFNsZ7BejSmagIxwnSoZkoam9bnerz8eaCF4RlOepVlqTnjHkm9', 2, NULL, '2019-10-09 06:34:59', '2019-10-11 07:55:35', '0000-00-00 00:00:00'),
(2, 'Mohamad Husni', 'husni@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$5zLKZMjMwItMWYjsXSNkLO3Ru9WdK7XKZCsZKQGoxE65qJhceRo0y', 'SvB3IphqwBiQGUDanTCIMXVfYXJSQujMWc0UGPAirmVGAUnfU6vCdGEAHN1m', 3, NULL, '2019-10-11 07:35:29', '2019-10-11 07:54:53', '0000-00-00 00:00:00'),
(3, 'Pieter Iman', 'pieter@gmail.com', '1992-10-02', NULL, NULL, NULL, NULL, '$2y$10$tIC.Q/E9aLRR9LUK2bT20e.sy9KepgTeyW0ea4v2A20y2REI1xYd.', 'RAXp2EETuA09ZZJ0cJmVQeBjFDbnMFR7xbwakMoOkWdmgsrQqq88lz5xq1Mg', 0, NULL, '2019-10-15 09:09:44', '2019-10-24 03:36:29', '0000-00-00 00:00:00'),
(4, 'richard', 'richard@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$eN1IAn1wBi92ZC4d4TCHK.V7fLdbwO6iNvePPPZESWeyL1nljfD7C', 'Tm44rmejuEsgKqUaWyuOMtXuOvvvBN6hPpV6AbCo8fG8JoVX08hcrzilgeu5', 3, NULL, '2019-10-16 06:49:09', '2019-10-16 06:49:09', '0000-00-00 00:00:00'),
(5, 'dipa', 'dipa@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$7LuDgHLWauLQ/mQbqL9q7.jgAGV6f4L6LeANmuhIaU5UnAMCbablK', NULL, 1, NULL, '2019-10-19 08:22:52', '2019-10-19 08:22:52', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `mohon_cuti`
--
ALTER TABLE `mohon_cuti`
  ADD PRIMARY KEY (`id_mohon_cuti`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mohon_cuti`
--
ALTER TABLE `mohon_cuti`
  MODIFY `id_mohon_cuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
