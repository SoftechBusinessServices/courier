-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 06:43 PM
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
-- Table structure for table `allocate_parcels`
--

CREATE TABLE `allocate_parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ali Logistic', 'active', '2022-10-24 10:12:29', '2022-10-24 10:12:29', NULL),
(2, 'Kamran Logistic', 'active', '2022-10-24 10:13:44', '2022-10-24 10:13:44', NULL),
(3, 'Salman Logistic', 'active', '2022-10-24 10:14:21', '2022-10-24 10:14:21', NULL),
(4, 'Zahid Logistics', 'active', '2022-10-24 10:15:07', '2022-10-24 10:15:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wrist Watches', 'active', '2022-10-24 10:08:17', '2022-10-24 10:08:17', NULL),
(2, 'Shoes', 'active', '2022-10-24 10:08:41', '2022-10-24 10:08:41', NULL),
(3, 'Documents', 'active', '2022-10-24 10:08:51', '2022-10-24 10:08:51', NULL),
(4, 'Gift Packs', 'active', '2022-10-24 10:09:03', '2022-10-24 10:09:03', NULL),
(5, 'Electronic Gadgets', 'active', '2022-10-24 10:09:30', '2022-10-24 10:09:30', NULL);

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
(1, 1, 'Pakistan', 'active', '2022-10-24 10:16:06', '2022-10-24 10:16:06', NULL),
(2, 1, 'India', 'active', '2022-10-24 10:16:06', '2022-10-24 10:16:06', NULL),
(3, 1, 'Srilanka', 'active', '2022-10-24 10:16:06', '2022-10-24 10:16:06', NULL),
(4, 1, 'Afghanistan', 'active', '2022-10-24 10:16:06', '2022-10-24 10:16:06', NULL),
(5, 1, 'Saudi Arabia', 'active', '2022-10-24 10:16:06', '2022-10-24 10:16:06', NULL),
(6, 2, 'Australia', 'active', '2022-10-24 10:16:54', '2022-10-24 10:16:54', NULL),
(7, 2, 'United Kingdom', 'active', '2022-10-24 10:16:54', '2022-10-24 10:16:54', NULL),
(8, 2, 'United States', 'active', '2022-10-24 10:16:54', '2022-10-24 10:16:54', NULL),
(9, 2, 'England', 'active', '2022-10-24 10:16:54', '2022-10-24 10:16:54', NULL),
(10, 2, 'South Africa', 'active', '2022-10-24 10:16:54', '2022-10-24 10:16:54', NULL);

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

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PKR', 'Rs', 'active', '2022-10-24 16:04:58', '2022-10-24 16:04:58', NULL),
(2, 'USD', '$', 'active', '2022-10-24 16:04:58', '2022-10-24 16:04:58', NULL),
(3, 'Euro', '€', 'active', '2022-10-24 16:05:49', '2022-10-24 16:05:49', NULL);

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
  `company_id` int(11) DEFAULT NULL,
  `vendor_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`id`, `company_id`, `vendor_email`, `vendor_phone`, `vendor_address`, `service_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ali@mail.com', '0312-1212121212', 'islamabad', 1, 'active', '2022-10-24 10:12:29', '2022-10-24 10:12:29', NULL),
(2, 1, 'ali@mail.com', '0312-1212121212', 'islamabad', 2, 'active', '2022-10-24 10:12:29', '2022-10-24 10:12:29', NULL),
(3, 1, 'ali@mail.com', '0312-1212121212', 'islamabad', 3, 'active', '2022-10-24 10:12:29', '2022-10-24 10:12:29', NULL),
(4, 2, 'kamran@mail.com', '0345-5122212554', 'peshawar', 2, 'active', '2022-10-24 10:13:44', '2022-10-24 10:13:44', NULL),
(5, 2, 'kamran@mail.com', '0345-5122212554', 'peshawar', 3, 'active', '2022-10-24 10:13:44', '2022-10-24 10:13:44', NULL),
(6, 2, 'kamran@mail.com', '0345-5122212554', 'peshawar', 4, 'active', '2022-10-24 10:13:44', '2022-10-24 10:13:44', NULL),
(7, 3, 'salman@mail.com', '0361-2545454545', 'Rawalpindi', 1, 'active', '2022-10-24 10:14:21', '2022-10-24 10:14:21', NULL),
(8, 3, 'salman@mail.com', '0361-2545454545', 'Rawalpindi', 4, 'active', '2022-10-24 10:14:21', '2022-10-24 10:14:21', NULL),
(9, 4, 'zahid@mail.com', '0311-4561323797', 'Bannu', 2, 'active', '2022-10-24 10:15:07', '2022-10-24 10:15:07', NULL),
(10, 4, 'zahid@mail.com', '0311-4561323797', 'Bannu', 3, 'active', '2022-10-24 10:15:07', '2022-10-24 10:15:07', NULL);

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
(27, '2022_10_05_102639_create_vendor_tackings_table', 4),
(28, '2022_10_05_102653_create_vendor_charges_table', 4),
(33, '2022_10_05_110450_create_vendor_tackings_table', 5),
(40, '2022_09_30_044813_create_parcels_table', 6),
(50, '2022_09_22_063145_create_companies_table', 7),
(53, '2022_09_30_044906_create_parcel_shippers_table', 7),
(54, '2022_09_30_044922_create_parcel_consignees_table', 7),
(56, '2022_10_04_122543_create_logistics_table', 7),
(59, '2022_10_05_110506_create_vendor_charges_table', 7),
(60, '2022_10_05_115556_create_vendor_id_trackings_table', 7),
(61, '2022_10_07_122734_create_parcels_table', 7),
(66, '2022_10_17_130047_create_payment_logs_table', 9),
(67, '2022_10_18_032422_create_contact_us_table', 10),
(118, '2014_10_12_000000_create_users_table', 11),
(119, '2019_08_19_000000_create_failed_jobs_table', 11),
(120, '2022_09_01_080253_create_customers_table', 11),
(121, '2022_09_02_070928_create_regions_table', 11),
(122, '2022_09_06_112849_create_currencies_table', 11),
(123, '2022_09_16_105303_create_password_resets_table', 11),
(124, '2022_09_27_081556_create_services_table', 11),
(125, '2022_09_27_112227_create_countries_table', 11),
(126, '2022_09_30_044942_create_parcel_notes_table', 11),
(127, '2022_10_04_122805_create_allocate_parcels_table', 11),
(128, '2022_10_04_123018_create_payment_methods_table', 11),
(129, '2022_10_14_061941_create_companies_table', 11),
(130, '2022_10_14_065703_create_logistics_table', 11),
(131, '2022_10_19_054420_create_parcels_table', 11),
(132, '2022_10_19_054441_create_contact_us_table', 11),
(133, '2022_10_19_054512_create_parcel_shippers_table', 11),
(134, '2022_10_19_054523_create_parcel_consignees_table', 11),
(135, '2022_10_19_054601_create_vendor_charges_table', 11),
(136, '2022_10_19_054627_create_vendor_id_trackings_table', 11),
(137, '2022_10_19_173022_create_payment_logs_table', 11),
(138, '2022_10_24_095649_create_contents_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parcel_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `consignee_id` int(11) DEFAULT NULL,
  `pl_boxes` int(11) DEFAULT NULL,
  `pl_weight` double(8,2) DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `parcels` (`id`, `parcel_id`, `shipper_id`, `consignee_id`, `pl_boxes`, `pl_weight`, `service_id`, `payment_id`, `pl_charges`, `pl_extras`, `pl_discount`, `pl_final`, `pl_description`, `pl_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PL000001', 1, 1, 63, 75.00, 1, 1, 930.00, 70.00, 100.00, 900.00, '[\"2\",\"3\"]', 'processed', 'active', '2022-10-24 11:07:53', '2022-10-24 11:07:53', NULL),
(2, 'PL000002', 2, 2, 63, 79.00, 2, 4, 600.00, 100.00, 60.00, 640.00, '[\"2\",\"3\",\"4\"]', 'processed', 'active', '2022-10-24 11:09:54', '2022-10-24 11:09:54', NULL),
(3, 'PL000003', 1, 3, 15, 91.00, 3, 2, 890.00, 60.00, 80.00, 870.00, '[\"2\",\"3\",\"5\"]', 'processed', 'active', '2022-10-24 11:11:04', '2022-10-24 11:11:04', NULL),
(4, 'PL000004', 1, 4, 57, 75.00, 2, 3, 900.00, 200.00, 150.00, 950.00, '[\"1\",\"3\",\"5\"]', 'processed', 'active', '2022-10-24 11:12:14', '2022-10-24 11:12:14', NULL),
(5, 'PL000005', 2, 5, 29, 14.00, 4, 1, 500.00, 170.00, 50.00, 620.00, '[\"2\",\"3\",\"4\",\"5\"]', 'processed', 'active', '2022-10-24 11:13:40', '2022-10-24 11:13:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_consignees`
--

CREATE TABLE `parcel_consignees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consignee_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_business` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_country_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `parcel_consignees` (`id`, `consignee_name`, `consignee_phone`, `consignee_business`, `consignee_country_id`, `consignee_state`, `consignee_city`, `consignee_zip`, `consignee_address1`, `consignee_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Attaullah', '0345-6787878151', 'Attaullah Carporate', 10, 'fsdf', 'sdfsdf', 'sfsdf', 'sdfsdf', 'sdfsdf', 'active', '2022-10-24 11:07:53', '2022-10-24 11:07:53', NULL),
(2, 'Abbas', '0345-1316164654', 'Abbas Carporate', 9, 'sdfsf', 'sdfsdf', 'sdfds', 'fdfdsf', 'df', 'active', '2022-10-24 11:09:54', '2022-10-24 11:09:54', NULL),
(3, 'Zabih', '0336-4456487878', 'Zabihullah Company', 5, 'sdfsdf', 'sdfsdf', 'sdfsd', 'sdfsd', 'fsdf', 'active', '2022-10-24 11:11:04', '2022-10-24 11:11:04', NULL),
(4, 'Waheed', '0345-1212354654', 'Waheed computers', 5, 'sdfsf', 'sdfsd', 'fsdfsd', 'fsdfs', 'fsdf', 'active', '2022-10-24 11:12:14', '2022-10-24 11:12:14', NULL),
(5, 'Alamzaib', '0321-4115634878', 'Alamzaib Associates', 4, 'sdfds', 'dsf', 'sdf', 'dsf', 'df', 'active', '2022-10-24 11:13:40', '2022-10-24 11:13:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notes`
--

CREATE TABLE `parcel_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
  `disp_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disp_condition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disp_price` double(8,2) DEFAULT NULL,
  `disp_quantity` int(11) DEFAULT NULL,
  `disp_total` double(8,2) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcel_notes`
--

INSERT INTO `parcel_notes` (`id`, `pl_id`, `disp_content`, `disp_condition`, `currency_id`, `disp_price`, `disp_quantity`, `disp_total`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'fsdfdsf', 'new', '1', 90.00, 10, 900.00, 'active', '2022-10-24 11:07:53', '2022-10-24 11:07:53', NULL),
(2, 2, 'gdfgdf', 'new', NULL, 64.00, 10, 640.00, 'active', '2022-10-24 11:09:54', '2022-10-24 11:09:54', NULL),
(3, 3, 'fsdfsaf', 'new', '1', 87.00, 10, 870.00, 'active', '2022-10-24 11:11:04', '2022-10-24 11:11:04', NULL),
(4, 4, 'sdffsf', 'new', '2', 95.00, 10, 950.00, 'active', '2022-10-24 11:12:14', '2022-10-24 11:12:14', NULL),
(5, 5, 'hfgfdg', 'new', NULL, 62.00, 10, 620.00, 'active', '2022-10-24 11:13:40', '2022-10-24 11:13:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_shippers`
--

CREATE TABLE `parcel_shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_date` date DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_country_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `parcel_shippers` (`id`, `pl_date`, `company_name`, `shipper_phone`, `shipper_country_id`, `shipper_state`, `shipper_city`, `shipper_zip`, `shipper_address1`, `shipper_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Softech Company', '0312-2155454545', 1, 'sdfdsfs', 'fsdf', 'sdfd', 'sdfsd', 'sdf', 'active', '2022-10-24 11:07:53', '2022-10-24 11:07:53', NULL),
(2, NULL, 'CoreTech Company', '0141-4465465654', 2, 'fsdfs', 'fsdfsdsdf', 'dsfsdf', 'dfd', 'fdfd', 'active', '2022-10-24 11:09:54', '2022-10-24 11:09:54', NULL);

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
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=customer,2=vendor',
  `vcid` bigint(20) NOT NULL COMMENT 'vendor customer id',
  `payment_method_id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `collected_amount` double(8,2) NOT NULL,
  `remaining_amount` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment_method`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cash Payment', 'active', '2022-10-24 10:17:02', '2022-10-24 10:17:02', NULL),
(2, 'Jazz Cash', 'active', '2022-10-24 10:17:06', '2022-10-24 10:17:06', NULL),
(3, 'Bank Transfer', 'active', '2022-10-24 10:17:11', '2022-10-24 10:17:11', NULL),
(4, 'Easy Paisa', 'active', '2022-10-24 10:17:15', '2022-10-24 10:17:15', NULL);

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
(1, 'Asia', 'active', '2022-10-24 10:15:22', '2022-10-24 10:15:22', NULL),
(2, 'Europe', 'active', '2022-10-24 10:15:29', '2022-10-24 10:15:29', NULL);

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
(1, 'DHL via Dubai', 'active', '2022-10-24 10:10:49', '2022-10-24 10:10:49', NULL),
(2, 'UPS via UK', 'active', '2022-10-24 10:11:00', '2022-10-24 10:11:00', NULL),
(3, 'UPS via Dubai', 'active', '2022-10-24 10:11:07', '2022-10-24 10:11:07', NULL),
(4, 'DHL via Express', 'active', '2022-10-24 10:11:25', '2022-10-24 10:11:25', NULL);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HcNuBm2DNMfmWUli.i.iCOtxzgAZgqWqbvpEwxWROMomIC76W6lt2', NULL, '2022-10-24 10:02:42', '2022-10-24 10:02:42'),
(2, 'user', 'user@gmail.com', NULL, 'user1234', NULL, '2022-10-24 10:08:01', '2022-10-24 10:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_charges`
--

CREATE TABLE `vendor_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `vendor_tracking_charges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_id_trackings`
--

CREATE TABLE `vendor_id_trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `vendor_tracking_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate_parcels`
--
ALTER TABLE `allocate_parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `vendor_charges`
--
ALTER TABLE `vendor_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocate_parcels`
--
ALTER TABLE `allocate_parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_charges`
--
ALTER TABLE `vendor_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
