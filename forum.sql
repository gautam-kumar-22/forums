-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2021 at 10:22 AM
-- Server version: 10.3.22-MariaDB-1:10.3.22+maria~bionic-log
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `form_email` varchar(255) NOT NULL,
  `submited_form` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 0 COMMENT '0 for active 1 for deactive',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `title`, `form_email`, `submited_form`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Larger Order Form32', 'ravindra765@mailinator.com', 21, 0, '2021-07-10 00:00:00', '2021-07-11 11:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `form_one`
--

CREATE TABLE `form_one` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_one`
--

INSERT INTO `form_one` (`id`, `form_id`, `first_name`, `last_name`, `phone_number`, `email`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:28:47', '2021-07-10 17:33:35'),
(2, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:29:00', '2021-07-10 17:33:41'),
(3, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:31:31', '2021-07-10 17:33:41'),
(4, 1, 'Ravindra', 'Singh', '987654321', 'ravindra.k@cisinlabs.com', 'testing', '2021-07-10 17:32:02', '2021-07-10 17:33:41'),
(5, 1, '9876543210', '40000', '09876543210', 'ravi@gmail.com', 'testing21', '2021-07-10 17:32:16', '2021-07-10 17:33:41'),
(6, 1, 'Ravindra', 'Singh', '987654321', 'ravindra.k@cisinlabs.com', NULL, '2021-07-10 17:34:33', '2021-07-10 12:04:33'),
(7, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:41:36', '2021-07-10 12:11:36'),
(8, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:42:31', '2021-07-10 12:12:31'),
(9, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:42:52', '2021-07-10 12:12:52'),
(10, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:53:42', '2021-07-11 00:23:42'),
(11, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:54:00', '2021-07-11 00:24:00'),
(12, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:54:36', '2021-07-11 00:24:36'),
(13, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:55:23', '2021-07-11 00:25:23'),
(14, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:56:17', '2021-07-11 00:26:17'),
(15, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:56:33', '2021-07-11 00:26:33'),
(16, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:56:42', '2021-07-11 00:26:42'),
(17, 1, 'Sid', '40000', '9876543210', 'ravindra.32@cisinlabs.com', 'google', '2021-07-11 08:12:25', '2021-07-11 02:42:25'),
(18, 1, 'Sid', '40000', '9876543210', 'ravindra.32@cisinlabs.com', 'google', '2021-07-11 08:13:22', '2021-07-11 02:43:22'),
(19, 1, 'Raghav', 'Singh', '09876543210', 'ravi@gmail.com', 'testing21', '2021-07-11 16:07:14', '2021-07-11 10:37:14'),
(20, 1, 'Ravindra', 'Singh', '9876543201', 'recon@mailinator.com', 'testing', '2021-07-11 16:25:59', '2021-07-11 10:55:59'),
(21, 1, 'Ravindra', 'Singh', '+440000000', 'ravindra.k@cisinlabs.com', 'testing', '2021-07-11 16:35:12', '2021-07-11 11:05:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin432@mailinator.com', '$2y$10$iRWSwUGJ0aVgJ2IbbOyssefkgq4qbnQxovm7hgO4VNrvPcgNPn6Vi', '2021-07-10 00:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin32', 'admin@gmail.com', '2021-07-09 18:30:00', '$2y$10$AmbKwnQC35J5DWf.Wgsd4.EIVA9agyAA.rYu7RXNU3RMXWF7cVpCS', 1, NULL, '2021-07-09 18:30:00', '2021-07-11 11:04:08'),
(2, 'Admin2', 'admin21@gmail.com', '2021-07-09 18:30:00', '$2y$10$AmbKwnQC35J5DWf.Wgsd4.EIVA9agyAA.rYu7RXNU3RMXWF7cVpCS', 1, NULL, '2021-07-09 18:30:00', '2021-07-10 00:34:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_one`
--
ALTER TABLE `form_one`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `form_one`
--
ALTER TABLE `form_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
