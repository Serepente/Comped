-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 09:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comped_db_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

CREATE TABLE `borrowed` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `borrower_name` varchar(255) NOT NULL,
  `borrowed_item` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_issued` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrowed`
--

INSERT INTO `borrowed` (`id`, `borrower_name`, `borrowed_item`, `quantity`, `admin_id`, `status`, `date_issued`, `return_date`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'allen veloso', 'Microcontroller', 2, 'System', 'pending', '2025-02-04', '2025-02-07', '2025-02-03 06:04:09', '2025-02-03 06:04:09', 0),
(2, 'allen awaw', 'Microcontroller', 2, 'Admin User', 'pending', '2025-02-04', '2025-02-07', '2025-02-03 06:11:07', '2025-02-03 06:11:07', 0),
(3, 'allen veloso', 'Microcontroller', 2, NULL, 'pending', '2025-02-03', '2025-02-05', '2025-02-03 07:43:06', '2025-02-03 07:43:06', 3),
(4, 'allen veloso', 'Microcontroller', 2, '3', 'pending', '2025-02-03', '2025-02-05', '2025-02-03 07:50:02', '2025-02-03 07:50:02', 3),
(7, 'Don Allen T. Veloso', 'USBs', 2, '5', 'approved', '2025-02-03', '2025-02-03', '2025-02-03 08:17:10', '2025-02-03 10:36:21', 5);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_02_02_075141_create_users_table', 1),
(2, '2025_02_02_185941_add_column_to_users_table', 2),
(3, '2025_02_03_065752_create_borrowed_table', 3),
(4, '2025_02_03_074347_add_column_to_borrowed_table', 4),
(6, '2025_02_03_152713_rename_column_in_table', 5),
(7, '2025_02_03_153006_drop_column_from_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `student_id_num` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `possition` varchar(255) DEFAULT NULL,
  `rfid` varchar(255) DEFAULT NULL,
  `year_level` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'images/default-pp.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `student_id_num`, `google_id`, `role`, `possition`, `rfid`, `year_level`, `profile_pic`, `created_at`, `updated_at`) VALUES
(2, 'Student User', 'student@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'officer', NULL, NULL, NULL, 'resources/assets/images/default-pp.jpg', '2025-02-02 10:25:57', '2025-02-02 06:48:15'),
(3, 'Admin User', 'admin@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', 'advisor', 'RFID00122', NULL, 'resources/assets/images/default-pp.jpg', '2025-02-02 13:24:25', '2025-02-03 04:39:41'),
(4, 'Alice Johnson', 'alice.johnson@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'officer', NULL, 'RFID001', '1st Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 06:48:21'),
(5, 'Bob Smith', 'bob.smith@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', 'secretary', 'RFID002', '2nd Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 11:39:11'),
(6, 'Charlie Brown', 'charlie.brown@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', 'treasurer', 'RFID003', '3rd Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 11:28:32'),
(7, 'David White', 'david.white@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', 'vice-president', 'RFID004', '4th Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 11:39:27'),
(8, 'Emma Garcia', 'emma.garcia@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', NULL, 'RFID005', '1st Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-03 04:39:32'),
(9, 'Frank Miller', 'frank.miller@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', 'secretary', 'RFID006', '2nd Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 11:35:12'),
(10, 'Grace Lee', 'grace.lee@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'admin', 'officer', 'RFID007', '3rd Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 11:56:03'),
(11, 'Henry Wilson', 'henry.wilson@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'student', 'secretary', 'RFID008', '4th Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 11:34:30'),
(12, 'Ivy Martinez', 'ivy.martinez@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'student', NULL, 'RFID009', '1st Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 14:43:30'),
(13, 'Jack Taylor', 'jack.taylor@example.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', NULL, NULL, 'student', NULL, 'RFID010', '2nd Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 14:43:30', '2025-02-02 14:43:30'),
(14, 'Don Allen T. Veloso', 'velosodonallen@gmail.com', '$2y$12$bFe0yOql08NHKC0dwZOZc.NxFDNhCEIw62q8TIFINr7nGqCrp7n26', '20-0713-219', NULL, 'student', NULL, '0009475502', '3rd Year', 'resources/assets/images/default-pp.jpg', '2025-02-02 20:21:47', '2025-02-04 00:24:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowed`
--
ALTER TABLE `borrowed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowed`
--
ALTER TABLE `borrowed`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
