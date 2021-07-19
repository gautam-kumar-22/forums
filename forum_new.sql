-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2021 at 02:25 PM
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
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 for active 1 for deactive',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `title`, `form_email`, `submited_form`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Larger Order Form', 'ravindra765@mailinator.com', 24, 0, '2021-07-10 00:00:00', '2021-07-16 11:06:04'),
(2, 'Box Ship Order Form', 'form2@mailinator.com', 6, 0, '2021-07-16 00:00:00', '2021-07-16 13:00:20'),
(3, 'Real Estate Program Sign', 'form3@mailinator.com', 2, 0, '2021-07-17 00:00:00', '2021-07-17 14:17:33'),
(4, 'Corporate Gift Program', 'form4@mailinator.com', 2, 0, '2021-07-17 00:00:00', '2021-07-17 10:26:44'),
(5, 'Realtor Program', 'form5@mailinator.com', 2, 0, '2021-07-17 00:00:00', '2021-07-17 10:57:05'),
(6, 'Gift Reminder', 'form6@mailinator.com', 2, 0, '2021-07-17 00:00:00', '2021-07-17 11:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `form_five`
--

CREATE TABLE `form_five` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_five`
--

INSERT INTO `form_five` (`id`, `form_id`, `first_name`, `last_name`, `email`, `phone_number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ravindra', 'Singh', 'raghu@gmail.com', '987654321', 'System is slow', 'Please check my issues first!!!', '2021-07-17 16:19:52', '2021-07-17 10:49:52'),
(2, 5, 'Ravindra', '40000', 'ravindra.kdgfhfghj@cisinlabs.com', '987654321', 'System is slow', NULL, '2021-07-17 16:20:23', '2021-07-17 10:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `form_four`
--

CREATE TABLE `form_four` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `gift_areas` text NOT NULL,
  `other` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_four`
--

INSERT INTO `form_four` (`id`, `form_id`, `first_name`, `last_name`, `email`, `phone_number`, `company`, `gift_areas`, `other`, `created_at`, `updated_at`) VALUES
(1, 4, 'Ravindra', 'Singh', 'raghu@gmail.com', '987654321', 'Cyber Infrastructure22', 'Client Appreciation Gifts,Employee Appreciation Gifts,Referral Gifts', NULL, '2021-07-17 15:55:58', '2021-07-17 10:25:58'),
(2, 4, 'Sid', 'Sharma', 'sid@gmail.com', '987654321', 'Cyber Infrastructure22', '', 'Other', '2021-07-17 15:56:44', '2021-07-17 10:26:44');

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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `name_of_gift1` varchar(100) DEFAULT NULL,
  `quantity_of_gift1` int(11) DEFAULT NULL,
  `name_of_gift2` varchar(100) DEFAULT NULL,
  `quantity_of_gift2` int(11) DEFAULT NULL,
  `name_of_gift3` varchar(100) DEFAULT NULL,
  `quantity_of_gift3` int(11) DEFAULT NULL,
  `name_of_gift4` varchar(100) DEFAULT NULL,
  `quantity_of_gift4` int(11) DEFAULT NULL,
  `name_of_gift5` varchar(100) DEFAULT NULL,
  `quantity_of_gift5` int(11) DEFAULT NULL,
  `pickup_delivery_date` varchar(100) DEFAULT NULL,
  `pickup_delivery` varchar(100) DEFAULT NULL,
  `personalize_gift` varchar(100) DEFAULT NULL,
  `gift_for_corporate` varchar(100) DEFAULT NULL,
  `desired_theme` varchar(100) DEFAULT NULL,
  `preference_of_basket` varchar(100) DEFAULT NULL,
  `quantity_of_gift` int(11) DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL,
  `is_alcohol_required` varchar(100) DEFAULT NULL,
  `alcohol_name` varchar(100) DEFAULT NULL,
  `local_calgary` varchar(100) DEFAULT NULL,
  `desired_time` varchar(100) DEFAULT NULL,
  `anything_else` varchar(100) DEFAULT NULL,
  `prefer_us` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_one`
--

INSERT INTO `form_one` (`id`, `form_id`, `first_name`, `last_name`, `phone_number`, `email`, `company_name`, `created_at`, `updated_at`, `name_of_gift1`, `quantity_of_gift1`, `name_of_gift2`, `quantity_of_gift2`, `name_of_gift3`, `quantity_of_gift3`, `name_of_gift4`, `quantity_of_gift4`, `name_of_gift5`, `quantity_of_gift5`, `pickup_delivery_date`, `pickup_delivery`, `personalize_gift`, `gift_for_corporate`, `desired_theme`, `preference_of_basket`, `quantity_of_gift`, `budget`, `is_alcohol_required`, `alcohol_name`, `local_calgary`, `desired_time`, `anything_else`, `prefer_us`) VALUES
(1, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:28:47', '2021-07-10 17:33:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:29:00', '2021-07-10 17:33:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:31:31', '2021-07-10 17:33:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'Ravindra', 'Singh', '987654321', 'ravindra.k@cisinlabs.com', 'testing', '2021-07-10 17:32:02', '2021-07-10 17:33:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, '9876543210', '40000', '09876543210', 'ravi@gmail.com', 'testing21', '2021-07-10 17:32:16', '2021-07-10 17:33:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 'Ravindra', 'Singh', '987654321', 'ravindra.k@cisinlabs.com', NULL, '2021-07-10 17:34:33', '2021-07-10 12:04:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:41:36', '2021-07-10 12:11:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:42:31', '2021-07-10 12:12:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 'Ravindra', 'Singh', '987654321', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-10 17:42:52', '2021-07-10 12:12:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:53:42', '2021-07-11 00:23:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:54:00', '2021-07-11 00:24:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:54:36', '2021-07-11 00:24:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:55:23', '2021-07-11 00:25:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:56:17', '2021-07-11 00:26:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:56:33', '2021-07-11 00:26:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-11 05:56:42', '2021-07-11 00:26:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 'Sid', '40000', '9876543210', 'ravindra.32@cisinlabs.com', 'google', '2021-07-11 08:12:25', '2021-07-11 02:42:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1, 'Sid', '40000', '9876543210', 'ravindra.32@cisinlabs.com', 'google', '2021-07-11 08:13:22', '2021-07-11 02:43:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 'Raghav', 'Singh', '09876543210', 'ravi@gmail.com', 'testing21', '2021-07-11 16:07:14', '2021-07-11 10:37:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 1, 'Ravindra', 'Singh', '9876543201', 'recon@mailinator.com', 'testing', '2021-07-11 16:25:59', '2021-07-11 10:55:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1, 'Ravindra', 'Singh', '+440000000', 'ravindra.k@cisinlabs.com', 'testing', '2021-07-11 16:35:12', '2021-07-11 11:05:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 1, 'gata', 'asd', '9876543210', 'test7@test.com', NULL, '2021-07-14 03:42:26', '2021-07-13 22:12:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, 'gata', 'asd', '9876543210', 'test7@test.com', 'test', '2021-07-14 11:02:45', '2021-07-14 05:32:45', 'adfg', 2, 'dfgsdd', 2, 'qwer', 1, 'werq', 2, 'asera', 3, '2021-07-21', 'deliver to my address', 'The gifts would include our customized / logo’d products (to be ordered, or I would supply)', 'ewrt wert ewrt', 'wert wert wert', 'wert wert', 3, '$45-$75', 'wert wert', NULL, 'wert wert wert', '2021-07-13', 'wert wert wert wert', 'wert wert'),
(24, 1, 'Ravindra', 'Singh', '9876543210', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 16:36:04', '2021-07-16 11:06:04', 'Ravindra Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Indore', '2022-02-05', NULL, 'raghu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `form_six`
--

CREATE TABLE `form_six` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `receipt_name` varchar(255) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `occassion` varchar(255) NOT NULL,
  `date_of_occassion` varchar(255) NOT NULL,
  `remind_me_days` varchar(255) NOT NULL,
  `remind_me_yearly_once` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_six`
--

INSERT INTO `form_six` (`id`, `form_id`, `name`, `email`, `receipt_name`, `gender`, `occassion`, `date_of_occassion`, `remind_me_days`, `remind_me_yearly_once`, `notes`, `created_at`, `updated_at`) VALUES
(1, 6, 'Ravindra Singh', 'ravindra.k@cisinlabs.com', 'tererr', 'female', '885', '2021-07-18', '4', 'only once', 'Test !!!', '2021-07-17 17:16:04', '2021-07-17 11:46:04'),
(2, 6, 'Ravindra Singh', 'raghu@gmail.com', 'Yaari', 'male', '784', '2022-05-06', '4', 'yearly', 'Test!!!', '2021-07-17 17:17:47', '2021-07-17 11:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `form_three`
--

CREATE TABLE `form_three` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bokerage` varchar(255) NOT NULL,
  `pmi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_three`
--

INSERT INTO `form_three` (`id`, `form_id`, `first_name`, `last_name`, `email`, `bokerage`, `pmi`, `created_at`, `updated_at`) VALUES
(1, 3, 'Ravindra', 'Singh', 'raghu@gmail.com', '55', 'Preferred – Closing Gift & Year 1 Anniversary Gift', '2021-07-17 14:14:43', '2021-07-17 08:44:43'),
(2, 3, 'Sid', 'Sharma', 'sid@gmail.com', '55', 'Premium – Closing Gift & Year 1/3/5 Anniversary Gift', '2021-07-17 14:15:10', '2021-07-17 08:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `form_two`
--

CREATE TABLE `form_two` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `bill_county_name` varchar(255) NOT NULL,
  `bill_first_name` varchar(255) NOT NULL,
  `bill_last_name` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_street_address` varchar(255) NOT NULL,
  `bill_city` varchar(255) NOT NULL,
  `bill_province` varchar(255) NOT NULL,
  `ship_order_notes` text NOT NULL,
  `bill_postal_code` varchar(255) NOT NULL,
  `ship_first_name` varchar(255) NOT NULL,
  `ship_last_name` varchar(255) NOT NULL,
  `ship_street_address` varchar(255) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `ship_province` varchar(255) NOT NULL,
  `ship_postal_code` varchar(255) NOT NULL,
  `ship_number` varchar(255) NOT NULL,
  `ship_msg` text NOT NULL,
  `ship_pdw` text NOT NULL,
  `ship_company_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_two`
--

INSERT INTO `form_two` (`id`, `form_id`, `product`, `bill_county_name`, `bill_first_name`, `bill_last_name`, `bill_email`, `bill_street_address`, `bill_city`, `bill_province`, `ship_order_notes`, `bill_postal_code`, `ship_first_name`, `ship_last_name`, `ship_street_address`, `ship_city`, `ship_province`, `ship_postal_code`, `ship_number`, `ship_msg`, `ship_pdw`, `ship_company_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'Snowy Surprise, $53', 'India', 'Ravindra', 'Singh', 'raghu@gmail.com', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', 'test', '452001', 'Ravindra', 'Singh', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', '452001', '987654321', 'test', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 18:28:03', '2021-07-16 12:58:03'),
(2, 2, '-----', 'India', 'Ravindra', 'Singh', 'raghu@gmail.com', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', 'test', '452001', 'Ravindra', 'Singh', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', '452001', '987654321', 'test', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 18:29:45', '2021-07-16 12:59:45'),
(3, 2, '-----', 'India', 'Ravindra', 'Singh', 'raghu@gmail.com', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', 'test', '452001', 'Ravindra', 'Singh', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', '452001', '987654321', 'test', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 18:29:46', '2021-07-16 12:59:46'),
(4, 2, '-----', 'India', 'Ravindra', 'Singh', 'raghu@gmail.com', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', 'test', '452001', 'Ravindra', 'Singh', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', '452001', '987654321', 'test', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 18:29:48', '2021-07-16 12:59:48'),
(5, 2, 'Winter Pampering Self Care, $82', 'India', 'Ravindra', 'Singh', 'raghu@gmail.com', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', 'test', '452001', 'Ravindra', 'Singh', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', '452001', '987654321', 'test', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 18:30:18', '2021-07-16 13:00:18'),
(6, 2, 'Winter Pampering Self Care, $82', 'India', 'Ravindra', 'Singh', 'raghu@gmail.com', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', 'test', '452001', 'Ravindra', 'Singh', 'Electronic Complex, Sukhlia, Indore, Madhya Pradesh, India', 'Indore', 'Madhya Pardesh', '452001', '987654321', 'test', 'raghu@gmail.com', 'Cyber Infrastructure22', '2021-07-16 18:30:20', '2021-07-16 13:00:20');

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
('admin432@mailinator.com', '$2y$10$iRWSwUGJ0aVgJ2IbbOyssefkgq4qbnQxovm7hgO4VNrvPcgNPn6Vi', '2021-07-10 00:43:06'),
('admin@gmail.com', '$2y$10$iuLWPKUNU./yaNhDa9oPPOiOeoBo5hFPcDg7g4.Mz2Mvfn4S2HL3C', '2021-07-18 03:23:47');

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
(1, 'Admin32', 'admin@gmail.com', '2021-07-09 18:30:00', '$2y$10$AmbKwnQC35J5DWf.Wgsd4.EIVA9agyAA.rYu7RXNU3RMXWF7cVpCS', 1, '6M83nwxID8lb9ZVi3OIEdfH4a9LRrtUJW2Gmep4COMmNwz8iQvjrH6Xi1UwJ', '2021-07-09 18:30:00', '2021-07-11 11:04:08'),
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
-- Indexes for table `form_five`
--
ALTER TABLE `form_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_four`
--
ALTER TABLE `form_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_one`
--
ALTER TABLE `form_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_six`
--
ALTER TABLE `form_six`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_three`
--
ALTER TABLE `form_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_two`
--
ALTER TABLE `form_two`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `form_five`
--
ALTER TABLE `form_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_four`
--
ALTER TABLE `form_four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_one`
--
ALTER TABLE `form_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `form_six`
--
ALTER TABLE `form_six`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_three`
--
ALTER TABLE `form_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_two`
--
ALTER TABLE `form_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
