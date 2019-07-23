-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 12:39 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance2`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_time_records`
--

CREATE TABLE `daily_time_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `Date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `am_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `halfday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ot_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `undertime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `late` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `logout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_infos`
--

CREATE TABLE `employee_infos` (
  `emp_id` int(10) UNSIGNED NOT NULL,
  `emp_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_nickName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_middlename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Employee',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intern_infos`
--

CREATE TABLE `intern_infos` (
  `intern_id` int(10) UNSIGNED NOT NULL,
  `intern_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_middlename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intern_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'intern',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_25_152141_create_employee_infos_table', 1),
(4, '2019_02_25_152220_create_intern_infos_table', 1),
(5, '2019_02_25_152307_create_daily_time_records_table', 1),
(6, '2019_05_11_110701_create_departments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_time_records`
--
ALTER TABLE `daily_time_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_infos`
--
ALTER TABLE `employee_infos`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `intern_infos`
--
ALTER TABLE `intern_infos`
  ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_time_records`
--
ALTER TABLE `daily_time_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_infos`
--
ALTER TABLE `employee_infos`
  MODIFY `emp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intern_infos`
--
ALTER TABLE `intern_infos`
  MODIFY `intern_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
