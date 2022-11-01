-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 02:36 PM
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

--
-- Dumping data for table `allocate_parcels`
--

INSERT INTO `allocate_parcels` (`id`, `pl_id`, `service_id`, `vendor_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 2, 'active', '2022-11-01 07:36:08', '2022-11-01 07:36:08', NULL),
(2, 2, 6, 3, 'active', '2022-11-01 07:50:51', '2022-11-01 07:50:51', NULL);

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
(1, 'Ali Logisitics', 'active', '2022-11-01 07:22:48', '2022-11-01 07:22:48', NULL),
(2, 'Salman Logistic', 'active', '2022-11-01 07:23:29', '2022-11-01 07:23:29', NULL),
(3, 'Zahid Logistics', 'active', '2022-11-01 07:24:09', '2022-11-01 07:24:09', NULL);

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
(1, 'Shoes', 'active', '2022-11-01 07:15:16', '2022-11-01 07:15:16', NULL),
(2, 'Watches', 'active', '2022-11-01 07:15:22', '2022-11-01 07:15:22', NULL),
(3, 'Clothes', 'active', '2022-11-01 07:15:29', '2022-11-01 07:15:29', NULL),
(4, 'Gifts', 'active', '2022-11-01 07:15:38', '2022-11-01 07:15:47', NULL),
(5, 'Documents', 'active', '2022-11-01 07:16:00', '2022-11-01 07:16:00', NULL);

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
(1, 1, 'Pakistan', 'active', '2022-11-01 06:39:23', '2022-11-01 06:39:23', NULL),
(2, 1, 'India', 'active', '2022-11-01 06:39:23', '2022-11-01 06:39:23', NULL),
(3, 1, 'Saudi Arabia', 'active', '2022-11-01 06:39:23', '2022-11-01 06:39:23', NULL),
(4, 2, 'England', 'active', '2022-11-01 06:39:51', '2022-11-01 06:39:51', NULL),
(5, 2, 'United Kingdom', 'active', '2022-11-01 06:39:51', '2022-11-01 06:39:51', NULL),
(6, 2, 'Australia', 'active', '2022-11-01 06:39:51', '2022-11-01 06:39:51', NULL);

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
(1, 'PKR', 'Rs', 'active', '2022-11-01 12:26:30', '2022-11-01 12:26:30', NULL),
(2, 'USD', '$', 'active', '2022-11-01 12:26:30', '2022-11-01 12:26:30', NULL);

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
(1, 1, 'ali@mail.com', '0312-1254545456', 'peshawar', 2, 'active', '2022-11-01 07:22:48', '2022-11-01 07:22:48', NULL),
(2, 1, 'ali@mail.com', '0312-1254545456', 'peshawar', 4, 'active', '2022-11-01 07:22:48', '2022-11-01 07:22:48', NULL),
(3, 1, 'ali@mail.com', '0312-1254545456', 'peshawar', 18, 'active', '2022-11-01 07:22:48', '2022-11-01 07:22:48', NULL),
(4, 2, 'salman@mail.com', '0312-4545487897', 'islamabad', 2, 'active', '2022-11-01 07:23:29', '2022-11-01 07:23:29', NULL),
(5, 2, 'salman@mail.com', '0312-4545487897', 'islamabad', 3, 'active', '2022-11-01 07:23:29', '2022-11-01 07:23:29', NULL),
(6, 2, 'salman@mail.com', '0312-4545487897', 'islamabad', 5, 'active', '2022-11-01 07:23:29', '2022-11-01 07:23:29', NULL),
(7, 3, 'zahid@mail.com', '0312-3154654654', 'lahore', 3, 'active', '2022-11-01 07:24:09', '2022-11-01 07:24:09', NULL),
(8, 3, 'zahid@mail.com', '0312-3154654654', 'lahore', 4, 'active', '2022-11-01 07:24:09', '2022-11-01 07:24:09', NULL),
(9, 3, 'zahid@mail.com', '0312-3154654654', 'lahore', 6, 'active', '2022-11-01 07:24:09', '2022-11-01 07:24:09', NULL),
(10, 3, 'zahid@mail.com', '0312-3154654654', 'lahore', 18, 'active', '2022-11-01 07:24:09', '2022-11-01 07:24:09', NULL);

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2022_09_01_080253_create_customers_table', 1),
(25, '2022_09_02_070928_create_regions_table', 1),
(26, '2022_09_06_112849_create_currencies_table', 1),
(27, '2022_09_16_105303_create_password_resets_table', 1),
(28, '2022_09_27_081556_create_services_table', 1),
(29, '2022_09_27_112227_create_countries_table', 1),
(30, '2022_10_04_122805_create_allocate_parcels_table', 1),
(31, '2022_10_04_123018_create_payment_methods_table', 1),
(32, '2022_10_14_061941_create_companies_table', 1),
(33, '2022_10_14_065703_create_logistics_table', 1),
(34, '2022_10_19_054441_create_contact_us_table', 1),
(35, '2022_10_19_054512_create_parcel_shippers_table', 1),
(36, '2022_10_19_054523_create_parcel_consignees_table', 1),
(37, '2022_10_19_054627_create_vendor_id_trackings_table', 1),
(38, '2022_10_19_173022_create_payment_logs_table', 1),
(39, '2022_10_24_095649_create_contents_table', 1),
(40, '2022_10_25_160226_create_parcels_table', 1),
(41, '2022_11_01_111935_create_parcel_notes_table', 1),
(42, '2022_11_01_113259_create_vendor_charges_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parcel_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_id` bigint(20) UNSIGNED DEFAULT NULL,
  `consignee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pl_boxes` int(11) DEFAULT NULL,
  `pl_weight` double(8,2) DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pl_charges` double(8,2) DEFAULT NULL,
  `pl_extras` double(8,2) DEFAULT NULL,
  `pl_discount` double(8,2) DEFAULT NULL,
  `pl_final` double(8,2) DEFAULT NULL,
  `pl_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_status` enum('processed','allocated','intransit','delivered','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'processed',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `parcel_id`, `shipper_id`, `consignee_id`, `pl_boxes`, `pl_weight`, `service_id`, `payment_id`, `pl_charges`, `pl_extras`, `pl_discount`, `pl_final`, `pl_description`, `pl_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PL000001', 1, 1, 12, 23.00, 3, 4, 800.00, 100.00, 50.00, 850.00, '[\"2\",\"3\"]', 'intransit', 'active', '2022-11-01 07:28:48', '2022-11-01 07:36:35', NULL),
(2, 'PL000002', 1, 2, 45, 20.00, 6, 3, 700.00, 300.00, 100.00, 900.00, '[\"4\",\"5\"]', 'delivered', 'active', '2022-11-01 07:30:30', '2022-11-01 07:51:42', NULL),
(3, 'PL000003', 1, 3, 20, 200.00, 2, 2, 500.00, 300.00, 50.00, 750.00, '[\"3\",\"4\"]', 'processed', 'active', '2022-11-01 07:32:01', '2022-11-01 07:32:01', NULL),
(4, 'PL000004', 2, 4, 60, 300.00, 2, 3, 600.00, 200.00, 100.00, 700.00, '[\"2\",\"3\"]', 'processed', 'active', '2022-11-01 07:33:52', '2022-11-01 07:33:52', NULL),
(5, 'PL000005', 2, 5, 56, 310.00, 3, 1, 850.00, 150.00, 200.00, 800.00, '[\"2\",\"4\"]', 'processed', 'active', '2022-11-01 07:35:32', '2022-11-01 08:29:40', '2022-11-01 08:29:40');

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
(1, 'Anees', '0031-3131231312', 'HBK Services', 6, 'sdfsf', 'sdf', 'sfsdf', 'sdfsd', 'fds', 'active', '2022-11-01 07:28:48', '2022-11-01 07:28:48', NULL),
(2, 'Ikram Khan', '0313-4654564654', 'Oppo services', 5, 'sfdfaf', 'sfdsfd', 'sfsdf', 'sdfsf', 'sfsdfs', 'active', '2022-11-01 07:30:30', '2022-11-01 07:30:30', NULL),
(3, 'Sabahat Khan', '0346-5345611651', 'Iphone Services', 4, 'gfhfh', 'jghjg', 'ghj', 'ghjhg', 'hjghj', 'active', '2022-11-01 07:32:01', '2022-11-01 07:32:01', NULL),
(4, 'Tasleem Khan', '0234-8654654654', 'Techno Services', 3, 'sdfdf', 'dfsdf', 'sdfs', 'sdfs', 'sdfsd', 'active', '2022-11-01 07:33:52', '2022-11-01 07:33:52', NULL),
(5, 'Asif Iqbal', '0345-4518978789', 'Infinix services', 4, 'sfsdf', 'sdfsdf', 'sdf', 'sdfs', 'sdfs', 'active', '2022-11-01 07:35:32', '2022-11-01 07:35:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notes`
--

CREATE TABLE `parcel_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` bigint(20) UNSIGNED DEFAULT NULL,
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

--
-- Dumping data for table `parcel_notes`
--

INSERT INTO `parcel_notes` (`id`, `pl_id`, `disp_content`, `disp_condition`, `currency_id`, `disp_price`, `disp_quantity`, `disp_total`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'sdfsdffd', 'new', 1, 85.00, 10, 850.00, 'active', '2022-11-01 07:28:48', '2022-11-01 07:28:48', NULL),
(2, 2, 'sfdfsdf', 'used', 2, 90.00, 10, 900.00, 'active', '2022-11-01 07:30:30', '2022-11-01 07:30:30', NULL),
(3, 3, 'sdff', 'used', 2, 75.00, 10, 750.00, 'active', '2022-11-01 07:32:01', '2022-11-01 07:32:01', NULL),
(4, 4, 'fgdg', 'new', 1, 700.00, 1, 700.00, 'active', '2022-11-01 07:33:52', '2022-11-01 07:33:52', NULL),
(5, 5, 'sdfsfsa', 'used', 1, 80.00, 10, 800.00, 'active', '2022-11-01 07:35:32', '2022-11-01 07:35:32', NULL);

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
(1, NULL, 'Tauseef', '0310-9448481162', 1, 'sdfdsf', 'sdfsd', 'sdfs', 'sdfsd', 'sdf', 'active', '2022-11-01 07:28:48', '2022-11-01 07:28:48', NULL),
(2, NULL, 'Tanveer', '0345-465465465_', 2, 'sdfsdf', 'sdfsdf', 'sdf', 'sdfs', 'sdf', 'active', '2022-11-01 07:33:52', '2022-11-01 07:33:52', NULL);

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

--
-- Dumping data for table `payment_logs`
--

INSERT INTO `payment_logs` (`id`, `customer_type`, `vcid`, `payment_method_id`, `invoice_id`, `collected_amount`, `remaining_amount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 1, 0, 200.00, 2300.00, NULL, '2022-11-01 07:36:50', '2022-11-01 07:36:50');

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
(1, 'Easypaisa', 'active', '2022-11-01 07:24:18', '2022-11-01 07:24:18', NULL),
(2, 'Jazz Cash', 'active', '2022-11-01 07:24:27', '2022-11-01 07:24:27', NULL),
(3, 'Bank Transfer', 'active', '2022-11-01 07:24:35', '2022-11-01 07:24:35', NULL),
(4, 'Cash in Hand', 'active', '2022-11-01 07:24:56', '2022-11-01 07:24:56', NULL);

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
(1, 'Asia', 'active', '2022-11-01 06:38:52', '2022-11-01 06:38:52', NULL),
(2, 'Europe', 'active', '2022-11-01 06:39:01', '2022-11-01 06:39:01', NULL);

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
(1, 'DHL PK', 'active', '2022-11-01 07:16:45', '2022-11-01 07:16:45', NULL),
(2, 'FEDEX PK', 'active', '2022-11-01 07:16:54', '2022-11-01 07:16:54', NULL),
(3, 'UPS PK', 'active', '2022-11-01 07:17:06', '2022-11-01 07:17:06', NULL),
(4, 'DHL DXB', 'active', '2022-11-01 07:17:14', '2022-11-01 07:17:14', NULL),
(5, 'UPS DXB', 'active', '2022-11-01 07:17:25', '2022-11-01 07:17:25', NULL),
(6, 'FEDEX DXB', 'active', '2022-11-01 07:17:36', '2022-11-01 07:17:36', NULL),
(7, 'DHL AIR UK', 'active', '2022-11-01 07:17:50', '2022-11-01 07:17:50', NULL),
(8, 'FEDEX AIR UK', 'active', '2022-11-01 07:18:02', '2022-11-01 07:18:02', NULL),
(9, 'UPS UK BY AIR', 'active', '2022-11-01 07:18:16', '2022-11-01 07:18:16', NULL),
(10, 'UPS UK BY ROAD', 'active', '2022-11-01 07:18:26', '2022-11-01 07:18:26', NULL),
(11, 'DIRECT EUROPE ALL INCLUSIVE', 'active', '2022-11-01 07:18:34', '2022-11-01 07:18:34', NULL),
(12, 'VIA UK VAT PAID IN PAKISTAN', 'active', '2022-11-01 07:18:41', '2022-11-01 07:18:41', NULL),
(13, 'COURIER VIA UK', 'active', '2022-11-01 07:18:51', '2022-11-01 07:21:10', NULL),
(14, 'CARGO BY AIR', 'active', '2022-11-01 07:19:23', '2022-11-01 07:19:23', NULL),
(15, 'CARGO BY AIR DDU', 'active', '2022-11-01 07:19:36', '2022-11-01 07:19:36', NULL),
(16, 'CARGO BY AIR DDP', 'active', '2022-11-01 07:19:45', '2022-11-01 07:19:59', NULL),
(17, 'CARGO BY SEA', 'active', '2022-11-01 07:20:26', '2022-11-01 07:20:26', NULL),
(18, 'CARGO BY SEA DDU', 'active', '2022-11-01 07:20:38', '2022-11-01 07:20:38', NULL),
(19, 'CARGO BY SEA DDP', 'active', '2022-11-01 07:20:50', '2022-11-01 07:20:50', NULL);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$30Gn8hBExNGqhIvRRU8O/Od9s06hBWcrf7qBY.b438.p.pUztjWLO', NULL, '2022-11-01 06:38:43', '2022-11-01 06:38:43');

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

--
-- Dumping data for table `vendor_charges`
--

INSERT INTO `vendor_charges` (`id`, `pl_id`, `vendor_id`, `vendor_tracking_charges`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '100', 'active', '2022-11-01 07:36:31', '2022-11-01 07:36:31', NULL),
(2, 2, 3, '200', 'active', '2022-11-01 07:51:04', '2022-11-01 07:51:04', NULL);

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
-- Dumping data for table `vendor_id_trackings`
--

INSERT INTO `vendor_id_trackings` (`id`, `pl_id`, `vendor_id`, `vendor_tracking_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 't1', 'active', '2022-11-01 07:36:26', '2022-11-01 07:36:26', NULL),
(2, 2, 3, 't2', 'active', '2022-11-01 07:51:00', '2022-11-01 07:51:00', NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcels_shipper_id_foreign` (`shipper_id`),
  ADD KEY `parcels_consignee_id_foreign` (`consignee_id`),
  ADD KEY `parcels_service_id_foreign` (`service_id`),
  ADD KEY `parcels_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcel_consignees_consignee_country_id_foreign` (`consignee_country_id`);

--
-- Indexes for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcel_notes_pl_id_foreign` (`pl_id`),
  ADD KEY `parcel_notes_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcel_shippers_shipper_country_id_foreign` (`shipper_country_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_charges`
--
ALTER TABLE `vendor_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parcels`
--
ALTER TABLE `parcels`
  ADD CONSTRAINT `parcels_consignee_id_foreign` FOREIGN KEY (`consignee_id`) REFERENCES `parcel_consignees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parcels_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parcels_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parcels_shipper_id_foreign` FOREIGN KEY (`shipper_id`) REFERENCES `parcel_shippers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  ADD CONSTRAINT `parcel_consignees_consignee_country_id_foreign` FOREIGN KEY (`consignee_country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  ADD CONSTRAINT `parcel_notes_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parcel_notes_pl_id_foreign` FOREIGN KEY (`pl_id`) REFERENCES `parcels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  ADD CONSTRAINT `parcel_shippers_shipper_country_id_foreign` FOREIGN KEY (`shipper_country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
