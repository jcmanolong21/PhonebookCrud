-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 03:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crude_phnbooks`
--

CREATE TABLE `crude_phnbooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crude_phnbooks`
--

INSERT INTO `crude_phnbooks` (`id`, `contact_name`, `address`, `contact_number`, `created_at`, `updated_at`) VALUES
(13, 'John Walts', 'Washington, DC', '255-023-123', '2018-11-12 01:43:58', '2018-11-12 01:43:58'),
(14, 'Katarina Petrova', 'Oakswood', '991-223-123', '2018-11-12 01:44:21', '2018-11-12 01:44:21'),
(15, 'Eugine Monteclaro', 'Cebu, City', '69696969', '2018-11-12 01:44:57', '2018-11-12 01:44:57'),
(16, 'John Carlo Manolong', 'Guadalupe Cebu, City', '09950357546', '2018-11-12 01:45:54', '2018-11-12 01:45:54'),
(18, 'Julia Barreto', 'Manila Philipines', '213-213-69', '2018-11-12 01:47:17', '2018-11-12 01:47:17'),
(19, 'Vexana Aldous', 'North Carolina', '8752-1323', '2018-11-12 01:49:12', '2018-11-12 01:49:12'),
(21, 'Moira Dela Torre', 'Manila', '123123123', '2018-11-12 02:41:06', '2018-11-12 02:41:06'),
(22, 'Trisha Neri', 'Bulacao Cebu', '123123', '2018-11-12 02:41:45', '2018-11-12 02:41:45'),
(23, 'Willie Da Pooh', 'Manil', '95-232-123-23', '2018-11-12 03:04:53', '2018-11-12 03:04:53'),
(24, 'Navroj Sonell', 'V. Rama Cebu City', '58290239', '2018-11-12 03:05:07', '2018-11-12 03:05:07'),
(25, 'Albus Dumbledore', 'Hogwartsed', '823-23123-12', '2018-11-12 03:08:59', '2018-11-12 16:46:52'),
(26, 'Einstein Nepumoceno', 'Manila', '+63952321323', '2018-11-12 16:47:28', '2018-11-12 16:47:28'),
(27, 'John Travolta', 'Makati City', '0952-1232-123', '2018-11-12 17:07:05', '2018-11-12 17:07:05');

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
(1, '2018_11_11_051527_create_crude_phnbooks_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crude_phnbooks`
--
ALTER TABLE `crude_phnbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crude_phnbooks`
--
ALTER TABLE `crude_phnbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
