-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 04:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telfon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `nama`, `username`, `email`, `password`, `alamat`, `telfon`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'paijo legowo', 'paijo', 'paijo@mail.com', 'paijo', 'jember', '0872172391', 'null', '2017-10-09 12:19:12', '2017-10-09 12:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_10_09_183300_create_drivers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `idPesawat` int(11) NOT NULL,
  `namaPesawat` varchar(30) NOT NULL,
  `asalPesawat` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `berangkat` time NOT NULL,
  `tiba` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`idPesawat`, `namaPesawat`, `asalPesawat`, `tujuan`, `berangkat`, `tiba`, `harga`) VALUES
(1001, 'citilink', 'Surabaya', 'Jakarta', '13:50:00', '15:20:00', 479000),
(1002, 'Batik Air', 'Surabaya', 'Jakarta', '15:05:00', '16:35:00', 546000),
(1003, 'lion Air', 'Surabaya', 'bandung', '09:25:00', '10:40:00', 602000),
(1004, 'Nam Air', 'surabaya', 'bandung', '18:35:00', '20:10:00', 623000),
(1005, 'garuda Indonesia', 'Surabaya', 'bandung', '17:45:00', '19:20:00', 1531000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `level`) VALUES
(1, 'arif', 'arifkreator@gmail.com', '$2y$10$gsx5TblCzHcLIvtm.gml0u1UNRyuuSvaYykm7r8gEPlOBLz6k1eNa', 'EXGLWixHqHA7mn4u1diLM64jXonG0wjGYiFftrEMp3Xp08Jhx1MIL5Q9LzoU', '2017-09-30 19:33:30', '2017-09-30 19:33:30', NULL, 3),
(4, 'fathur', 'fathur@gmail.com', '$2y$10$EvXeEcYFrhYJxzwvRrj1FOl/kIpsUzVbKJNQeMZDmW.4p3rZmPRz6', '6RvfvMnEWvwRuVCgT4H5Qrkv1VLqu4Py35NOd3xHQFt35t8JZq3jhhVKmoUx', '2017-10-09 08:09:00', '2017-10-09 08:09:00', NULL, 3),
(5, 'admin', 'admin@mail.com', '$2y$10$iLh7NQEaWcgCKuD2Ii8rRekSxsX.HmM2T47bB9QNAkMBLTb36XDN.', 'aXTgJxgrZK2Ygqk4hjB59HoYL52fl8Lo2mSPRIcs3kIbzFz0DYDDCTJ8pnoe', '2017-10-09 08:18:31', '2017-10-09 08:18:31', NULL, 1),
(6, 'paijo legowo', 'paijo@mail.com', '$2y$10$bXIPtsTzHMsA8CRvT8dSTuAbgOclVoKSXfcyfprkGcAL2JLtkHAjW', NULL, '2017-10-09 12:19:13', '2017-10-09 12:19:13', NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`idPesawat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `idPesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
