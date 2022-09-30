-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 03:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntn_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `address`, `phone`, `ntn_no`, `web_url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rarykagazy', 'lozotomyhu', 'movawu@mailinator.com', NULL, 'Molestias minim sint', '0314-3731392', '23', 'https://www.bazoqyronex.ws', 'active', '2022-09-25 09:32:06', '2022-09-25 09:32:06', NULL),
(2, 'qihegamiw', 'racegal', 'ruvibi@mailinator.com', NULL, 'Quia assumenda vitae', '0314-8933711', '23', 'https://www.tagonurimykozyh.tv', 'active', '2022-09-25 09:32:41', '2022-09-25 09:32:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `region_id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Australia', 'active', '2022-09-28 05:21:59', '2022-09-28 05:21:59', NULL),
(2, 2, 'Newzealand', 'active', '2022-09-28 05:21:59', '2022-09-28 05:21:59', NULL),
(3, 1, 'Pakistan', 'active', '2022-09-28 05:24:45', '2022-09-28 05:24:45', NULL),
(4, 1, 'Srilanka', 'active', '2022-09-28 05:24:45', '2022-09-28 05:24:45', NULL),
(5, 1, 'Saudi Arabia', 'active', '2022-09-28 05:24:45', '2022-09-28 05:24:45', NULL),
(6, 2, 'England', 'active', '2022-09-28 05:25:39', '2022-09-28 05:25:39', NULL),
(7, 2, 'South Africa', 'active', '2022-09-28 05:25:39', '2022-09-28 05:25:39', NULL),
(8, 1, 'sdfsdf', 'active', '2022-09-28 07:51:45', '2022-09-28 07:51:45', NULL),
(9, 1, 'sfsf', 'active', '2022-09-28 07:51:45', '2022-09-28 07:51:45', NULL),
(10, 1, 'fdfd', 'active', '2022-09-28 07:51:45', '2022-09-28 07:51:45', NULL),
(11, 1, 'dfdfdf', 'active', '2022-09-28 07:51:45', '2022-09-28 07:51:45', NULL),
(12, 2, 'sfsdf', 'active', '2022-09-29 04:54:22', '2022-09-29 04:54:22', NULL),
(13, 2, 'sdfdsf', 'active', '2022-09-29 04:54:22', '2022-09-29 04:54:22', NULL),
(14, 2, 'sddfdsfg', 'active', '2022-09-29 04:54:22', '2022-09-29 04:54:22', NULL),
(15, 2, 'ggsgs', 'active', '2022-09-29 04:54:22', '2022-09-29 04:54:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logistic_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `vendor_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`id`, `logistic_name`, `vendor_name`, `vendor_email`, `email_verified_at`, `vendor_address`, `vendor_phone`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ali Courier Services', 'Ahmad Jan', 'ali@mail.com', NULL, 'G6 Markaz', '0319-3929458', 'active', '2022-09-26 00:51:58', '2022-09-26 00:51:58', NULL),
(2, 'Babar Courier Services', 'Bilal Ahmad', 'bilal@mail.com', NULL, 'G9 markaz', '0311-3318641', 'active', '2022-09-26 01:02:57', '2022-09-26 01:02:57', NULL),
(3, 'Danish Courier Services', 'Dawood Khan', 'danish@mail.com', NULL, 'G15 markaz', '0311-6387336', 'active', '2022-09-26 01:03:16', '2022-09-26 01:03:16', NULL);

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2022_09_02_070928_create_regions_table', 1),
(13, '2022_09_06_123657_create_countries_table', 1),
(14, '2022_09_08_133017_create_parcel_registrations_table', 1),
(15, '2022_09_16_105303_create_password_resets_table', 1),
(16, '2022_09_22_055640_create_logistics_table', 1),
(17, '2022_09_22_063145_create_companies_table', 1),
(18, '2022_09_22_070449_create_company_representatives_table', 1),
(19, '2022_09_07_075145_create_shipping_charges_table', 2),
(20, '2022_09_01_080253_create_customers_table', 3),
(21, '2022_09_06_112849_create_currencies_table', 3),
(22, '2022_09_27_081556_create_services_table', 4),
(23, '2022_09_27_112227_create_countries_table', 5),
(28, '2022_09_30_044813_create_parcels_table', 6),
(32, '2022_09_30_044906_create_parcel_shippers_table', 7),
(33, '2022_09_30_044922_create_parcel_consignees_table', 7),
(34, '2022_09_30_044942_create_parcel_notes_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_boxes` int(11) DEFAULT NULL,
  `pl_weight` double(8,2) DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pl_charges` double(8,2) DEFAULT NULL,
  `pl_extras` double(8,2) DEFAULT NULL,
  `pl_discount` double(8,2) DEFAULT NULL,
  `pl_final` double(8,2) DEFAULT NULL,
  `pl_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_status` enum('processed','allocated','delivered','returned','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'processed',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `pl_id`, `pl_boxes`, `pl_weight`, `service_id`, `pl_charges`, `pl_extras`, `pl_discount`, `pl_final`, `pl_description`, `pl_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-000001', 100, 30.00, NULL, 70.00, 66.00, 11.00, 53.00, 'Aliqua Distinctio', 'processed', 'active', '2022-09-30 07:21:49', '2022-09-30 07:21:49', NULL),
(2, '2022-PL-000001', 100, 30.00, 1, 70.00, 66.00, 11.00, 53.00, 'Aliqua Distinctio', 'processed', 'active', '2022-09-30 07:23:51', '2022-09-30 07:23:51', NULL),
(3, '2022-PL-000001', 100, 30.00, 1, 70.00, 66.00, 11.00, 53.00, 'Aliqua Distinctio', 'processed', 'active', '2022-09-30 07:25:13', '2022-09-30 07:25:13', NULL),
(4, '2022-PL-000001', 100, 30.00, 1, 70.00, 66.00, 11.00, 53.00, 'Aliqua Distinctio', 'processed', 'active', '2022-09-30 07:26:10', '2022-09-30 07:26:10', NULL),
(5, '2022-PL-000001', 100, 30.00, 1, 70.00, 66.00, 11.00, 53.00, 'Aliqua Distinctio', 'processed', 'active', '2022-09-30 07:26:49', '2022-09-30 07:26:49', NULL),
(6, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:30:16', '2022-09-30 07:30:16', NULL),
(7, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:30:49', '2022-09-30 07:30:49', NULL),
(8, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:30:59', '2022-09-30 07:30:59', NULL),
(9, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:31:06', '2022-09-30 07:31:06', NULL),
(10, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:31:16', '2022-09-30 07:31:16', NULL),
(11, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:31:27', '2022-09-30 07:31:27', NULL),
(12, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:31:36', '2022-09-30 07:31:36', NULL),
(13, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:31:44', '2022-09-30 07:31:44', NULL),
(14, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:31:52', '2022-09-30 07:31:52', NULL),
(15, '2022-PL-000006', 100, 30.00, 3, 70.00, 66.00, 11.00, 53.00, 'sdfdsf', 'processed', 'active', '2022-09-30 07:32:02', '2022-09-30 07:32:02', NULL),
(16, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:33:51', '2022-09-30 07:33:51', NULL),
(17, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:34:06', '2022-09-30 07:34:06', NULL),
(18, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:41:00', '2022-09-30 07:41:00', NULL),
(19, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:41:11', '2022-09-30 07:41:11', NULL),
(20, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:42:47', '2022-09-30 07:42:47', NULL),
(21, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:43:12', '2022-09-30 07:43:12', NULL),
(22, '2022-PL-0000016', 25, 48.00, 1, 33.00, 52.00, 47.00, 3.00, 'Consequuntur dolorum', 'processed', 'active', '2022-09-30 07:45:04', '2022-09-30 07:45:04', NULL),
(23, '2022-PL-0000023', 97, 78.00, 6, 79.00, 2.00, 81.00, 100.00, 'Rem ex nulla exercit', 'processed', 'active', '2022-09-30 07:45:38', '2022-09-30 07:45:38', NULL),
(24, '2022-PL-0000023', 97, 78.00, 6, 79.00, 2.00, 81.00, 100.00, 'Rem ex nulla exercit', 'processed', 'active', '2022-09-30 07:46:13', '2022-09-30 07:46:13', NULL),
(25, '2022-PL-0000023', 97, 78.00, 6, 79.00, 2.00, 81.00, 100.00, 'Rem ex nulla exercit', 'processed', 'active', '2022-09-30 07:46:29', '2022-09-30 07:46:29', NULL),
(26, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 07:56:05', '2022-09-30 07:56:05', NULL),
(27, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 07:56:58', '2022-09-30 07:56:58', NULL),
(28, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 07:58:46', '2022-09-30 07:58:46', NULL),
(29, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 07:58:51', '2022-09-30 07:58:51', NULL),
(30, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 07:58:57', '2022-09-30 07:58:57', NULL),
(31, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 07:59:14', '2022-09-30 07:59:14', NULL),
(32, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 08:00:15', '2022-09-30 08:00:15', NULL),
(33, '2022-PL-0000026', 9, 1.00, 1, 21.00, 68.00, 47.00, 33.00, 'Sed praesentium laud', 'processed', 'active', '2022-09-30 08:00:23', '2022-09-30 08:00:23', NULL),
(34, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:01:11', '2022-09-30 08:01:11', NULL),
(35, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:01:34', '2022-09-30 08:01:34', NULL),
(36, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:02:10', '2022-09-30 08:02:10', NULL),
(37, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:02:19', '2022-09-30 08:02:19', NULL),
(38, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:02:31', '2022-09-30 08:02:31', NULL),
(39, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:02:41', '2022-09-30 08:02:41', NULL),
(40, '2022-PL-0000034', 86, 65.00, 6, 73.00, 18.00, 34.00, 10.00, 'Sit delectus deser', 'processed', 'active', '2022-09-30 08:03:02', '2022-09-30 08:03:02', NULL),
(41, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:03:59', '2022-09-30 08:03:59', NULL),
(42, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:04:14', '2022-09-30 08:04:14', NULL),
(43, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:05:34', '2022-09-30 08:05:34', NULL),
(44, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:05:42', '2022-09-30 08:05:42', NULL),
(45, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:05:50', '2022-09-30 08:05:50', NULL),
(46, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:06:00', '2022-09-30 08:06:00', NULL),
(47, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:06:08', '2022-09-30 08:06:08', NULL),
(48, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:06:15', '2022-09-30 08:06:15', NULL),
(49, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:06:23', '2022-09-30 08:06:23', NULL),
(50, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:06:43', '2022-09-30 08:06:43', NULL),
(51, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:07:06', '2022-09-30 08:07:06', NULL),
(52, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:07:14', '2022-09-30 08:07:14', NULL),
(53, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:07:18', '2022-09-30 08:07:18', NULL),
(54, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:07:52', '2022-09-30 08:07:52', NULL),
(55, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:13:38', '2022-09-30 08:13:38', NULL),
(56, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:13:48', '2022-09-30 08:13:48', NULL),
(57, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:14:35', '2022-09-30 08:14:35', NULL),
(58, '2022-PL-0000041', 7, 22.00, 4, 32.00, 18.00, 13.00, 7.00, 'Ipsa irure quo ab n', 'processed', 'active', '2022-09-30 08:16:14', '2022-09-30 08:16:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_consignees`
--

CREATE TABLE `parcel_consignees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_business` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_country_id` bigint(20) UNSIGNED NOT NULL,
  `consignee_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcel_consignees`
--

INSERT INTO `parcel_consignees` (`id`, `pl_id`, `consignee_name`, `consignee_phone`, `consignee_business`, `consignee_country_id`, `consignee_state`, `consignee_city`, `consignee_zip`, `consignee_address1`, `consignee_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-0000041', 'Wanda Craig', '+1 (211) 153-5367', 'A repudfdfsdiandae voluptdfdsf', 1, 'Molestiae non offici', 'Et quis vitae qui la', '94327', 'Sit aperiam dolorem', 'Impedit labore nost', 'active', '2022-09-30 08:16:14', '2022-09-30 08:16:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notes`
--

CREATE TABLE `parcel_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disp_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disp_condition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `disp_price` double(8,2) DEFAULT NULL,
  `disp_quantity` int(11) DEFAULT NULL,
  `disp_total` double(8,2) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parcel_shippers`
--

CREATE TABLE `parcel_shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_date` date DEFAULT NULL,
  `pl_phone_id` int(11) DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_country_id` bigint(20) UNSIGNED NOT NULL,
  `shipper_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcel_shippers`
--

INSERT INTO `parcel_shippers` (`id`, `pl_id`, `pl_date`, `pl_phone_id`, `company_name`, `shipper_phone`, `shipper_country_id`, `shipper_state`, `shipper_city`, `shipper_zip`, `shipper_address1`, `shipper_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 07:56:58', '2022-09-30 07:56:58', NULL),
(2, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 07:58:46', '2022-09-30 07:58:46', NULL),
(3, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 07:58:51', '2022-09-30 07:58:51', NULL),
(4, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 07:58:57', '2022-09-30 07:58:57', NULL),
(5, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 07:59:14', '2022-09-30 07:59:14', NULL),
(6, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 08:00:15', '2022-09-30 08:00:15', NULL),
(7, '2022-PL-0000026', '1982-12-03', 123, 'Page Mcintyre Traders', '+1 (458) 383-9412', 12, 'Unde occaecat provid', 'Ea sit consectetur p', '85922', 'Quo quisquam repudia', 'In quis numquam cons', 'active', '2022-09-30 08:00:23', '2022-09-30 08:00:23', NULL),
(8, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:03:59', '2022-09-30 08:03:59', NULL),
(9, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:04:14', '2022-09-30 08:04:14', NULL),
(10, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:05:34', '2022-09-30 08:05:34', NULL),
(11, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:05:42', '2022-09-30 08:05:42', NULL),
(12, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:05:50', '2022-09-30 08:05:50', NULL),
(13, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:06:00', '2022-09-30 08:06:00', NULL),
(14, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:06:08', '2022-09-30 08:06:08', NULL),
(15, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:06:15', '2022-09-30 08:06:15', NULL),
(16, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:06:23', '2022-09-30 08:06:23', NULL),
(17, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:06:43', '2022-09-30 08:06:43', NULL),
(18, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:07:06', '2022-09-30 08:07:06', NULL),
(19, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:07:14', '2022-09-30 08:07:14', NULL),
(20, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:07:18', '2022-09-30 08:07:18', NULL),
(21, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:07:52', '2022-09-30 08:07:52', NULL),
(22, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:13:38', '2022-09-30 08:13:38', NULL),
(23, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:13:48', '2022-09-30 08:13:48', NULL),
(24, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:14:35', '2022-09-30 08:14:35', NULL),
(25, '2022-PL-0000041', '1973-05-12', 123, 'Vazquez and Roberts Plc', '+1 (642) 944-8246', 4, 'Dicta voluptatem do', 'Minim sint distincti', '40220', 'Molestiae deserunt i', 'Ad aperiam eius aut', 'active', '2022-09-30 08:16:14', '2022-09-30 08:16:14', NULL);

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
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Asia', 'active', '2022-09-24 09:43:07', '2022-09-24 09:43:07', NULL),
(2, 'Europe', 'active', '2022-09-24 09:45:40', '2022-09-28 01:27:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DHL via Dubai', 'active', '2022-09-27 05:27:47', '2022-09-27 05:27:47', NULL),
(2, 'DHL via UK', 'active', '2022-09-27 05:34:01', '2022-09-27 05:34:01', NULL),
(3, 'UPS via UK', 'active', '2022-09-27 05:34:21', '2022-09-27 05:34:21', NULL),
(4, 'UPS via Dubai', 'active', '2022-09-27 05:34:33', '2022-09-27 05:34:33', NULL),
(5, 'DHL via Express', 'active', '2022-09-27 05:35:46', '2022-09-27 05:35:46', NULL),
(6, 'Leopards Express', 'active', '2022-09-28 00:50:15', '2022-09-28 01:15:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$gFaIXg3A3E7THYyq3KdDKOnmMHEEe5sz9avglxSRIMBJLR7QxA4tu', NULL, '2022-09-24 09:16:59', '2022-09-29 23:23:28'),
(2, 'tatameduzi', 'fujasysahu@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2022-09-24 13:03:01', '2022-09-24 13:03:01'),
(3, 'tolazos', 'fuje@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2022-09-24 13:03:28', '2022-09-24 13:03:28'),
(4, 'vuritegufy', 'pefehifu@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2022-09-24 13:03:51', '2022-09-24 13:03:51'),
(5, 'Mubasshir', 'mubasshir@mail.com', NULL, 'admin1234', NULL, '2022-09-25 04:43:31', '2022-09-25 04:43:31'),
(6, 'jefin', 'dovyzuturo@mailinator.com', NULL, 'Pa$$w0rd!', NULL, '2022-09-28 00:49:51', '2022-09-28 00:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `logistics_vendor_email_unique` (`vendor_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logistics`
--
ALTER TABLE `logistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
