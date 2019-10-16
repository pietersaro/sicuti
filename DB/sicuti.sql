-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 04:13 PM
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
  `id_cuti` int(5) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `sisa_cuti` int(11) DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `jml_hari` int(1) DEFAULT NULL,
  `jenis` text,
  `alasan` varchar(50) DEFAULT NULL,
  `persetujuan` varchar(16) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `kd_pegawai` varchar(20) DEFAULT NULL,
  `jumlah_cuti` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role`, `kd_pegawai`, `jumlah_cuti`, `created_at`, `updated_at`) VALUES
(1, 'nopal', 'nopal@mail.com', '$2y$10$FdQh93pwQt3jkNpPs4B0X.8MtKgOMBfbHwnCVCS9ZdMbV4D7WweFK', 'HBa3nB7cxO5gW6KXNAHorGjmk4qAWdcSTrG2CvmlcdIpbWUhh9NK8OHD57BB', 2, NULL, NULL, '2019-10-09 06:34:59', '2019-10-11 07:55:35'),
(2, 'Mohamad Husni', 'husni@gmail.com', '$2y$10$5zLKZMjMwItMWYjsXSNkLO3Ru9WdK7XKZCsZKQGoxE65qJhceRo0y', '7U5uZKsXaLpheQ9Gp6O0yO4gt16rXJ8OqwAWunJhqbayuCsw5LmuhOIiN0Xy', 1, NULL, NULL, '2019-10-11 07:35:29', '2019-10-11 07:54:53'),
(3, 'Pieter Iman', 'pieter@gmail.com', '$2y$10$cqcM9GBOKona0S35G1rb/OHEOyB9etn9O9y4R9mXNfcouaCLmkI6K', 'dA9gUxTNvwC5XukcNi9QFTtNp0qhj8Q21SGdBydagI8381c6AQPD33mWMOLq', 1, NULL, NULL, '2019-10-15 09:09:44', '2019-10-15 09:09:44'),
(4, 'richard', 'richard@gmail.com', '$2y$10$eN1IAn1wBi92ZC4d4TCHK.V7fLdbwO6iNvePPPZESWeyL1nljfD7C', 'Tm44rmejuEsgKqUaWyuOMtXuOvvvBN6hPpV6AbCo8fG8JoVX08hcrzilgeu5', 3, NULL, NULL, '2019-10-16 06:49:09', '2019-10-16 06:49:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

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
  MODIFY `id_cuti` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
