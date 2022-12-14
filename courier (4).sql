-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 08:58 AM
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
(1, 8, 1, 7, 'active', '2022-11-29 10:25:00', '2022-11-29 10:25:00', NULL),
(2, 7, 1, 3, 'active', '2022-11-29 11:34:47', '2022-11-29 11:34:47', NULL),
(3, 9, 2, 4, 'active', '2022-11-29 13:08:58', '2022-11-29 13:08:58', NULL),
(4, 10, 3, 3, 'active', '2022-11-29 13:59:21', '2022-11-29 13:59:21', NULL);

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
(3, 'Ali Express', 'active', '2022-11-28 03:28:28', '2022-11-28 03:28:28', NULL),
(4, 'Zahid Express', 'active', '2022-11-28 03:28:28', '2022-11-28 03:28:28', NULL),
(5, 'Salman express', 'active', '2022-11-28 03:29:19', '2022-11-28 03:29:19', NULL),
(6, 'Imran Softech', 'active', '2022-11-28 06:43:21', '2022-11-28 06:43:21', NULL),
(7, 'Tauseef Enterprises', 'active', '2022-11-29 10:13:21', '2022-11-29 10:13:21', NULL);

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
(1, 'Shoes', 'active', '2022-11-28 09:37:24', '2022-11-29 10:15:00', NULL),
(2, 'Presents', 'active', '2022-11-28 09:37:34', '2022-11-29 10:15:12', NULL),
(3, 'watches', 'active', '2022-11-28 09:37:41', '2022-11-28 09:37:41', NULL),
(4, 'Electronics', 'active', '2022-11-29 10:15:27', '2022-11-29 10:15:27', NULL),
(5, 'Mobile Phone', 'active', '2022-11-29 10:15:37', '2022-11-29 10:15:37', NULL);

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
(1, 1, 'Pakistan', 'active', '2022-11-01 01:39:23', '2022-11-01 01:39:23', NULL),
(2, 1, 'India', 'active', '2022-11-01 01:39:23', '2022-11-01 01:39:23', NULL),
(3, 1, 'Saudi Arabia', 'active', '2022-11-01 01:39:23', '2022-11-01 01:39:23', NULL),
(4, 2, 'England', 'active', '2022-11-01 01:39:51', '2022-11-03 03:34:33', '2022-11-03 03:34:33'),
(5, 2, 'United Kingdom', 'active', '2022-11-01 01:39:51', '2022-11-01 01:39:51', NULL),
(6, 2, 'Australia', 'active', '2022-11-01 01:39:51', '2022-11-03 03:35:14', '2022-11-03 03:35:14'),
(7, 1, 'China', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(8, 1, 'Japan', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(9, 1, 'Singapore', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(10, 1, 'Hong Kong', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(11, 1, 'Qatar', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(12, 1, 'UAE', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(13, 1, 'Bangladesh', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(14, 1, 'Sri Lanka', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(15, 1, 'Afghanistan', 'active', '2022-11-03 03:33:58', '2022-11-03 03:33:58', NULL),
(16, 2, 'France', 'active', '2022-11-03 03:36:06', '2022-11-03 03:36:06', NULL),
(17, 2, 'Spain', 'active', '2022-11-03 03:36:06', '2022-11-03 03:36:06', NULL),
(18, 2, 'Germany', 'active', '2022-11-03 03:36:06', '2022-11-03 03:36:06', NULL),
(19, 2, 'Italy', 'active', '2022-11-03 03:36:06', '2022-11-03 03:36:06', NULL),
(20, 2, 'Poland', 'active', '2022-11-03 03:36:06', '2022-11-03 03:36:06', NULL),
(21, 2, 'Ireland', 'active', '2022-11-03 03:36:06', '2022-11-03 03:36:06', NULL),
(22, 3, 'USA', 'active', '2022-11-03 03:38:04', '2022-11-03 03:38:04', NULL),
(23, 3, 'Canada', 'active', '2022-11-03 03:38:04', '2022-11-03 03:38:04', NULL),
(24, 3, 'Brazil', 'active', '2022-11-03 03:38:04', '2022-11-03 03:38:04', NULL),
(25, 3, 'Mexico', 'active', '2022-11-03 03:38:04', '2022-11-03 03:38:04', NULL),
(26, 3, 'Argentina', 'active', '2022-11-03 03:38:04', '2022-11-03 03:38:04', NULL),
(27, 1, 'Iraq', 'active', '2022-11-03 04:01:15', '2022-11-03 04:01:15', NULL),
(28, 1, 'Iran', 'active', '2022-11-03 04:01:15', '2022-11-03 04:01:15', NULL),
(29, 1, 'Jordan', 'active', '2022-11-03 04:01:15', '2022-11-03 04:01:15', NULL),
(30, 4, 'Mali', 'active', '2022-11-28 06:37:04', '2022-11-28 06:37:04', NULL),
(31, 4, 'Cameron', 'active', '2022-11-28 06:37:04', '2022-11-28 06:37:04', NULL),
(32, 4, 'South Africa', 'active', '2022-11-28 06:41:32', '2022-11-28 06:41:32', NULL),
(33, 4, 'Senegal', 'active', '2022-11-28 06:41:32', '2022-11-28 06:41:32', NULL),
(34, 2, 'Norway', 'active', '2022-11-29 10:11:08', '2022-11-29 10:11:08', NULL),
(35, 2, 'Finland', 'active', '2022-11-29 10:11:08', '2022-11-29 10:11:08', NULL),
(36, 2, 'Sweden', 'active', '2022-11-29 10:11:08', '2022-11-29 10:11:08', NULL);

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
(1, 'PKR', 'Rs', 'active', '2022-11-28 14:41:04', NULL, NULL),
(2, 'USD', '$', 'active', '2022-11-28 14:41:04', NULL, NULL),
(3, 'Euro', '??? ', 'active', '2022-11-28 15:05:08', NULL, NULL);

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
(18, 3, 'ali@gmail.com', '0121-2113212312', 'Peshawar', 1, 'active', '2022-11-28 03:28:28', '2022-11-28 03:28:28', NULL),
(19, 4, 'ali@gmail.com', '0121-2113212312', 'Peshawar', 2, 'active', '2022-11-28 03:28:28', '2022-11-28 03:28:28', NULL),
(20, 3, 'ali@gmail.com', '0121-2113212312', 'Peshawar', 3, 'active', '2022-11-28 03:28:28', '2022-11-28 03:28:28', NULL),
(21, 4, 'ali@gmail.com', '0121-2113212312', 'Peshawar', 4, 'active', '2022-11-28 03:28:28', '2022-11-28 03:28:28', NULL),
(22, 5, 'salman@mail.com', '0133-4564564564', 'islamabad', 3, 'active', '2022-11-28 03:29:19', '2022-11-28 03:29:19', NULL),
(23, 5, 'salman@mail.com', '0133-4564564564', 'islamabad', 4, 'active', '2022-11-28 03:29:19', '2022-11-28 03:29:19', NULL),
(24, 5, 'salman@mail.com', '0133-4564564564', 'islamabad', 5, 'active', '2022-11-28 03:29:19', '2022-11-28 03:29:19', NULL),
(25, 6, 'imran@lsuk.org', '0335-5743800___', 'Blue Area islamabad', 2, 'active', '2022-11-28 06:43:21', '2022-11-28 06:43:21', NULL),
(26, 6, 'imran@lsuk.org', '0335-5743800___', 'Blue Area islamabad', 4, 'active', '2022-11-28 06:43:21', '2022-11-28 06:43:21', NULL),
(27, 6, 'imran@lsuk.org', '0335-5743800___', 'Blue Area islamabad', 6, 'active', '2022-11-28 06:43:21', '2022-11-28 06:43:21', NULL),
(28, 7, 'admin@admin.com', '0092-3311555446', 'wkfwedlfwekgwserk', 1, 'active', '2022-11-29 10:13:21', '2022-11-29 10:13:21', NULL),
(29, 7, 'admin@admin.com', '0092-3311555446', 'wkfwedlfwekgwserk', 3, 'active', '2022-11-29 10:13:21', '2022-11-29 10:13:21', NULL);

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_09_01_080253_create_customers_table', 1),
(4, '2022_09_02_070928_create_regions_table', 1),
(5, '2022_09_06_112849_create_currencies_table', 1),
(6, '2022_09_16_105303_create_password_resets_table', 1),
(7, '2022_09_27_081556_create_services_table', 1),
(8, '2022_09_27_112227_create_countries_table', 1),
(9, '2022_10_04_122805_create_allocate_parcels_table', 1),
(10, '2022_10_04_123018_create_payment_methods_table', 1),
(11, '2022_10_14_061941_create_companies_table', 1),
(12, '2022_10_14_065703_create_logistics_table', 1),
(13, '2022_10_19_054441_create_contact_us_table', 1),
(22, '2022_10_19_054512_create_parcel_shippers_table', 2),
(23, '2022_10_19_054523_create_parcel_consignees_table', 2),
(24, '2022_10_19_054627_create_vendor_id_trackings_table', 2),
(25, '2022_10_19_173022_create_payment_logs_table', 2),
(26, '2022_10_24_095649_create_contents_table', 2),
(27, '2022_10_25_160226_create_parcels_table', 2),
(28, '2022_11_01_111935_create_parcel_notes_table', 2),
(29, '2022_11_01_113259_create_vendor_charges_table', 2);

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
(7, 'pl000001', 7, 7, 12, 48.00, 1, 1, 500.00, 200.00, 150.00, 550.00, '[\"1\",\"2\"]', 'delivered', 'active', '2022-11-29 09:24:21', '2022-11-29 12:00:46', NULL),
(8, 'pl000008', 8, 8, 2, 15.00, 1, 3, 5870.00, 0.00, 0.00, 5870.00, '[\"1\",\"3\",\"4\",\"5\"]', 'delivered', 'active', '2022-11-29 10:22:24', '2022-11-29 10:26:43', NULL),
(9, 'pl000009', 7, 9, 12, 41.00, 2, 1, 570.00, 64.00, 89.00, 545.00, '[\"4\",\"5\"]', 'delivered', 'active', '2022-11-29 12:49:26', '2022-11-29 14:10:25', NULL),
(10, 'pl0000010', 7, 10, 44, 17.00, 3, 3, 2000.00, 620.00, 700.00, 1920.00, '[\"3\",\"4\"]', 'intransit', 'active', '2022-11-29 13:50:50', '2022-11-29 14:38:28', NULL),
(11, 'pl0000011', 7, 11, 37, 84.00, 5, 4, 860.00, 72.00, 42.00, 890.00, '[\"4\",\"5\"]', 'processed', 'active', '2022-11-29 13:51:51', '2022-11-29 13:51:51', NULL),
(12, 'pl0000012', 9, 12, 54, 27.00, 4, 5, 2900.00, 200.00, 160.00, 2940.00, '[\"2\",\"3\",\"5\"]', 'processed', 'active', '2022-11-29 13:53:31', '2022-11-29 13:53:31', NULL),
(13, 'pl0000013', 8, 13, 46, 18.00, 18, 2, 890.00, 380.00, 90.00, 1180.00, '[\"2\",\"3\"]', 'processed', 'active', '2022-11-30 02:54:57', '2022-11-30 02:54:57', NULL),
(14, 'pl0000014', 9, 14, 87, 45.00, 3, 4, 1800.00, 81.00, 86.00, 1795.00, '[\"3\",\"4\",\"5\"]', 'processed', 'active', '2022-11-30 02:56:35', '2022-11-30 02:56:35', NULL),
(15, 'pl0000015', 7, 15, 14, 87.00, 7, 2, 1000.00, 70.00, 90.00, 980.00, '[\"2\",\"4\",\"5\"]', 'processed', 'active', '2022-11-30 02:58:05', '2022-11-30 02:58:05', NULL);

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
(7, 'Bilal Ahmad', '0345-12345678__', 'Bilal Ads', 15, 'Laghman', 'laghman city', '12345', 'laghman border', 'afghan border', 'active', '2022-11-29 09:24:21', '2022-11-29 09:24:21', NULL),
(8, 'Tony Robinson', '0044-135248762_', 'Tony Robinson', 5, 'England', 'London', 'W192EL', '458 Queens Way', 'Hampshire', 'active', '2022-11-29 10:22:24', '2022-11-29 10:22:24', NULL),
(9, 'salman khan', '0312-1212312121', 'Salman khan and co', 12, 'uae state', 'uae state', 'uae state', 'uae state', 'uae state', 'active', '2022-11-29 12:49:26', '2022-11-29 12:49:26', NULL),
(10, 'Ila Hunter', '0155-38712772__', 'Esse praesentium asp', 3, 'Sit dicta praesenti', 'Exercitationem lauda', '30017', 'Excepteur non eos di', 'Cum et et magnam adi', 'active', '2022-11-29 13:50:50', '2022-11-29 13:50:50', NULL),
(11, 'Hakeem Mayo', '0129-48712395__', 'Beatae mollit dolore', 23, 'Accusantium veniam', 'Ut suscipit doloribu', '77710', 'Quis amet nostrud v', 'Aliquid omnis et est', 'active', '2022-11-29 13:51:51', '2022-11-29 13:51:51', NULL),
(12, 'Rashad Carroll', '0129-92056861__', 'Molestiae aut et in', 7, 'Illo ut qui quidem p', 'Consequuntur labore', '98956', 'Atque eos ullam mai', 'Qui sit voluptatem', 'active', '2022-11-29 13:53:31', '2022-11-29 13:53:31', NULL),
(13, 'john', '0112-3212331123', 'sdfsdf', 11, 'qatar', 'city', 'zip', 'fsf', 'fs', 'active', '2022-11-30 02:54:57', '2022-11-30 02:54:57', NULL),
(14, 'Abhinandan', '0315-6552122___', 'Abhinandan Carporates', 10, 'sdfsdfsdf', 'sdfsdf', 'sfsdfds', 'sdfsdf', 'sdfsdf', 'active', '2022-11-30 02:56:35', '2022-11-30 02:56:35', NULL),
(15, 'Nehru Vasquez', '0162-12752712__', 'Cumque ratione sunt', 13, 'Neque sint pariatur', 'Sint nisi exercitati', '36302', 'Consectetur nemo li', 'Velit cum fugiat ut', 'active', '2022-11-30 02:58:05', '2022-11-30 02:58:05', NULL);

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
(12, 7, 'shoes', 'new', 1, 100.00, 3, 300.00, 'active', '2022-11-29 09:24:21', '2022-11-29 09:24:21', NULL),
(13, 7, 'gifts', 'new', 1, 150.00, 1, 150.00, 'active', '2022-11-29 09:24:21', '2022-11-29 09:24:21', NULL),
(14, 7, 'watches', 'new', 1, 100.00, 1, 100.00, 'active', '2022-11-29 09:24:21', '2022-11-29 09:24:21', NULL),
(15, 8, 'Watches', 'used', 1, 500.00, 2, 1000.00, 'active', '2022-11-29 10:22:24', '2022-11-29 10:22:24', NULL),
(16, 8, 'Mobile', 'used', 1, 35000.00, 1, 35000.00, 'active', '2022-11-29 10:22:24', '2022-11-29 10:22:24', NULL),
(17, 8, 'Presents', 'new', 1, 50.00, 10, 500.00, 'active', '2022-11-29 10:22:24', '2022-11-29 10:22:24', NULL),
(18, 9, 'sdfdsf', 'new', 1, 570.00, 1, 570.00, 'active', '2022-11-29 12:49:26', '2022-11-29 12:49:26', NULL),
(19, 10, 'shoes', 'new', 1, 2500.00, 1, 2500.00, 'active', '2022-11-29 13:50:50', '2022-11-29 13:50:50', NULL),
(20, 10, 'sdfsdf', 'new', 1, 1.00, 1, 1.00, 'active', '2022-11-29 13:50:50', '2022-11-29 13:50:50', NULL),
(21, 11, 'shoes', 'new', 1, 9.00, 100, 900.00, 'active', '2022-11-29 13:51:51', '2022-11-29 13:51:51', NULL),
(22, 12, 'watches', 'new', 1, 29.00, 100, 2900.00, 'active', '2022-11-29 13:53:31', '2022-11-29 13:53:31', NULL),
(23, 13, 'sdfsdfs', 'new', 1, 23.00, 56, 1288.00, 'active', '2022-11-30 02:54:57', '2022-11-30 02:54:57', NULL),
(24, 14, 'sdff', 'new', 1, 15.00, 32, 480.00, 'active', '2022-11-30 02:56:35', '2022-11-30 02:56:35', NULL),
(25, 15, 'fsdfsdf', 'new', 1, 980.00, 1, 980.00, 'active', '2022-11-30 02:58:05', '2022-11-30 02:58:05', NULL);

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
(7, NULL, 'Intel computers', '0310-9488696___', 1, 'Select an option???', 'Peshawar', '25000', 'Nahaqi  daudzai', 'Charsadda Road Peshawar.', 'active', '2022-11-29 09:24:21', '2022-11-29 09:24:21', NULL),
(8, NULL, 'Asif Munir', '0331-11111111__', 1, 'Islamabad', 'Islamabad', '440000', '651 Kashmir Highway', 'G10', 'active', '2022-11-29 10:22:24', '2022-11-29 10:22:24', NULL),
(9, NULL, 'Rehan Khan', '0312-3155465456', 11, 'dfdsfs', 'sdfsdf', 'sdfsd', 'sfdsd', 'sdfsdf', 'active', '2022-11-29 13:53:31', '2022-11-29 13:53:31', NULL);

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
(3, '1', 8, 5, 0, 3000.00, 2870.00, NULL, '2022-11-29 10:27:55', '2022-11-29 10:27:55'),
(4, '2', 7, 3, 0, 5000.00, -2000.00, NULL, '2022-11-29 10:31:14', '2022-11-29 10:31:14');

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
(1, 'Easypaisa', 'active', '2022-11-01 02:24:18', '2022-11-01 02:24:18', NULL),
(2, 'Jazz Cash', 'active', '2022-11-01 02:24:27', '2022-11-01 02:24:27', NULL),
(3, 'Bank Transfer', 'active', '2022-11-01 02:24:35', '2022-11-01 02:24:35', NULL),
(4, 'Cash', 'active', '2022-11-01 02:24:56', '2022-11-03 04:02:06', NULL),
(5, 'Mezan Account', 'active', '2022-11-29 10:08:58', '2022-11-29 10:09:13', NULL);

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
(1, 'Asia & Far East', 'active', '2022-11-01 01:38:52', '2022-11-03 03:32:00', NULL),
(2, 'Europe', 'active', '2022-11-01 01:39:01', '2022-11-01 01:39:01', NULL),
(3, 'USA and Canada', 'active', '2022-11-03 03:07:39', '2022-11-03 03:36:40', NULL),
(4, 'Africa', 'active', '2022-11-03 04:00:13', '2022-11-03 04:00:13', NULL),
(5, 'Other Region', 'active', '2022-11-03 04:00:23', '2022-11-03 04:00:23', NULL);

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
(1, 'DHL PK', 'active', '2022-11-01 02:16:45', '2022-11-01 02:16:45', NULL),
(2, 'FEDEX PK', 'active', '2022-11-01 02:16:54', '2022-11-01 02:16:54', NULL),
(3, 'UPS PK', 'active', '2022-11-01 02:17:06', '2022-11-01 02:17:06', NULL),
(4, 'DHL DXB', 'active', '2022-11-01 02:17:14', '2022-11-01 02:17:14', NULL),
(5, 'UPS DXB', 'active', '2022-11-01 02:17:25', '2022-11-01 02:17:25', NULL),
(6, 'FEDEX DXB', 'active', '2022-11-01 02:17:36', '2022-11-01 02:17:36', NULL),
(7, 'DHL AIR UK', 'active', '2022-11-01 02:17:50', '2022-11-01 02:17:50', NULL),
(8, 'FEDEX AIR UK', 'active', '2022-11-01 02:18:02', '2022-11-01 02:18:02', NULL),
(9, 'UPS UK BY AIR', 'active', '2022-11-01 02:18:16', '2022-11-01 02:18:16', NULL),
(10, 'UPS UK BY ROAD', 'active', '2022-11-01 02:18:26', '2022-11-01 02:18:26', NULL),
(11, 'DIRECT EUROPE ALL INCLUSIVE', 'active', '2022-11-01 02:18:34', '2022-11-01 02:18:34', NULL),
(12, 'VIA UK VAT PAID IN PAKISTAN', 'active', '2022-11-01 02:18:41', '2022-11-01 02:18:41', NULL),
(13, 'COURIER VIA UK', 'active', '2022-11-01 02:18:51', '2022-11-01 02:21:10', NULL),
(14, 'CARGO BY AIR', 'active', '2022-11-01 02:19:23', '2022-11-01 02:19:23', NULL),
(15, 'CARGO BY AIR DDU', 'active', '2022-11-01 02:19:36', '2022-11-01 02:19:36', NULL),
(16, 'CARGO BY AIR DDP', 'active', '2022-11-01 02:19:45', '2022-11-01 02:19:59', NULL),
(17, 'CARGO BY SEA', 'active', '2022-11-01 02:20:26', '2022-11-01 02:20:26', NULL),
(18, 'CARGO BY SEA DDU', 'active', '2022-11-01 02:20:38', '2022-11-01 02:20:38', NULL),
(19, 'CARGO BY SEA DDP', 'active', '2022-11-01 02:20:50', '2022-11-01 02:20:50', NULL),
(20, 'Testing UPS', 'active', '2022-11-29 10:14:15', '2022-11-29 10:14:15', NULL);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tSoUIMMfu211LPalr1rhuOk6U6GyeqlT7UN82dQlTE4GEYfV2zsfi', NULL, '2022-11-28 09:34:45', '2022-11-28 11:02:12');

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
(2, 8, 7, '3000', 'active', '2022-11-29 10:25:47', '2022-11-29 10:25:47', NULL),
(3, 7, 3, '300', 'active', '2022-11-29 11:43:51', '2022-11-29 11:43:51', NULL),
(4, 9, 4, '230', 'active', '2022-11-29 13:09:20', '2022-11-29 13:09:20', NULL),
(5, 10, 3, '100', 'active', '2022-11-29 14:03:13', '2022-11-29 14:03:13', NULL);

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
(2, 8, 7, 'UPS123456', 'active', '2022-11-29 10:25:37', '2022-11-29 10:25:37', NULL),
(3, 7, 3, 't2222', 'active', '2022-11-29 11:35:01', '2022-11-29 11:35:01', NULL),
(4, 9, 4, 't3', 'active', '2022-11-29 13:09:06', '2022-11-29 13:09:06', NULL),
(5, 10, 3, 't10', 'active', '2022-11-29 14:01:38', '2022-11-29 14:01:38', NULL),
(6, 10, 3, 't10', 'active', '2022-11-29 14:01:48', '2022-11-29 14:01:48', NULL);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcel_notes_pl_id_foreign` (`pl_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_charges`
--
ALTER TABLE `vendor_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  ADD CONSTRAINT `parcel_notes_pl_id_foreign` FOREIGN KEY (`pl_id`) REFERENCES `parcels` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
