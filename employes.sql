-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 06:13 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `employeeName`, `designation`, `salary`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'Rani', 'Designer', '25000', 'noimage.jpg', '2020-01-13 18:30:00', '2020-01-30 18:30:00'),
(3, 'Meenal', 'Artist', '30000', 'noimage.jpg', '2020-01-05 01:56:55', '2020-01-05 01:56:55'),
(4, 'Mimansha', 'Educator', '25000', 'noimage.jpg', '2020-01-05 01:57:52', '2020-01-05 01:57:52'),
(5, 'Deepali Bhansali', 'Marketing', '25000', 'noimage.jpg', '2020-01-05 01:59:24', '2020-01-05 01:59:24'),
(6, 'poonam singh', 'actor', '25000', 'noimage.jpg', '2020-01-05 02:26:53', '2020-01-05 02:26:53'),
(7, 'Priyanka singh', 'CSE', '18000', 'noimage.jpg', '2020-01-05 02:27:38', '2020-01-05 02:27:38'),
(8, 'Sagar', 'teacher', '25000', 'noimage.jpg', '2020-01-06 12:55:24', '2020-01-06 12:55:24'),
(9, 'poonam singh', 'actor', '25000', 'noimage.jpg', '2020-01-06 13:06:30', '2020-01-06 13:20:00'),
(11, 'poonam singh', 'actor', '27000', 'noimage.jpg', '2020-01-06 13:12:43', '2020-01-06 13:19:45'),
(12, 'Radey', 'helper', '45000', 'png_1578416823.png', '2020-01-07 11:37:04', '2020-01-07 11:37:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
