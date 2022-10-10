-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 08:26 AM
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
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, '2022-PL-0000010', 4, 14, 'active', '2022-10-06 06:40:44', '2022-10-06 06:40:44', NULL),
(2, '2022-PL-000001', 2, 5, 'active', '2022-10-06 09:56:55', '2022-10-06 09:56:55', NULL),
(3, '2022-PL-000002', 3, 9, 'active', '2022-10-06 09:57:20', '2022-10-06 09:57:20', NULL),
(4, '2022-PL-000001', 4, 2, 'active', '2022-10-07 00:11:01', '2022-10-07 00:11:01', NULL),
(5, '2022-PL-000002', 2, 8, 'active', '2022-10-07 00:56:09', '2022-10-07 00:56:09', NULL);

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
(1, 1, 'Pakistan', 'active', '2022-10-06 06:05:50', '2022-10-06 06:05:50', NULL),
(2, 1, 'India', 'active', '2022-10-06 06:05:50', '2022-10-06 06:05:50', NULL),
(3, 1, 'Srilanka', 'active', '2022-10-06 06:05:50', '2022-10-06 06:05:50', NULL),
(4, 2, 'United Kingdom', 'active', '2022-10-06 06:06:24', '2022-10-06 06:06:24', NULL),
(5, 2, 'Australia', 'active', '2022-10-06 06:06:24', '2022-10-06 06:06:24', NULL),
(6, 2, 'United States of America', 'active', '2022-10-06 06:06:24', '2022-10-06 06:06:24', NULL);

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
  `service_id` int(11) DEFAULT NULL,
  `vendor_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`id`, `logistic_name`, `service_id`, `vendor_email`, `vendor_phone`, `vendor_address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ALi Express', 3, 'ali@mail.com', '0312-1212212', 'Islamabad', 'active', '2022-10-06 06:01:54', '2022-10-06 06:01:54', NULL),
(2, 'ALi Express', 4, 'ali@mail.com', '0312-1212212', 'Islamabad', 'active', '2022-10-06 06:01:54', '2022-10-06 06:01:54', NULL),
(3, 'ALi Express', 5, 'ali@mail.com', '0312-1212212', 'Islamabad', 'active', '2022-10-06 06:01:54', '2022-10-06 06:01:54', NULL),
(4, 'Jamal Express', 1, 'jamal@mail.com', '0342-5656655', 'Peshawar', 'active', '2022-10-06 06:02:53', '2022-10-06 06:02:53', NULL),
(5, 'Jamal Express', 2, 'jamal@mail.com', '0342-5656655', 'Peshawar', 'active', '2022-10-06 06:02:53', '2022-10-06 06:02:53', NULL),
(6, 'Jamal Express', 3, 'jamal@mail.com', '0342-5656655', 'Peshawar', 'active', '2022-10-06 06:02:53', '2022-10-06 06:02:53', NULL),
(7, 'Khan Express', 1, 'khan@mail.com', '0312-2333646', 'Lahore', 'active', '2022-10-06 06:03:46', '2022-10-06 06:03:46', NULL),
(8, 'Khan Express', 2, 'khan@mail.com', '0312-2333646', 'Lahore', 'active', '2022-10-06 06:03:46', '2022-10-06 06:03:46', NULL),
(9, 'Khan Express', 3, 'khan@mail.com', '0312-2333646', 'Lahore', 'active', '2022-10-06 06:03:46', '2022-10-06 06:03:46', NULL),
(10, 'Khan Express', 4, 'khan@mail.com', '0312-2333646', 'Lahore', 'active', '2022-10-06 06:03:46', '2022-10-06 06:03:46', NULL),
(11, 'Khan Express', 5, 'khan@mail.com', '0312-2333646', 'Lahore', 'active', '2022-10-06 06:03:46', '2022-10-06 06:03:46', NULL),
(12, 'zahi Express', 2, 'zahid@mail.com', '0313-1334646', 'Krachi', 'active', '2022-10-06 06:05:01', '2022-10-06 06:05:01', NULL),
(13, 'zahi Express', 3, 'zahid@mail.com', '0313-1334646', 'Krachi', 'active', '2022-10-06 06:05:01', '2022-10-06 06:05:01', NULL),
(14, 'zahi Express', 4, 'zahid@mail.com', '0313-1334646', 'Krachi', 'active', '2022-10-06 06:05:01', '2022-10-06 06:05:01', NULL);

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
(7, '2022_09_22_063145_create_companies_table', 1),
(27, '2022_10_05_102639_create_vendor_tackings_table', 4),
(28, '2022_10_05_102653_create_vendor_charges_table', 4),
(33, '2022_10_05_110450_create_vendor_tackings_table', 5),
(38, '2022_09_27_081556_create_services_table', 6),
(39, '2022_09_27_112227_create_countries_table', 6),
(40, '2022_09_30_044813_create_parcels_table', 6),
(41, '2022_09_30_044906_create_parcel_shippers_table', 6),
(42, '2022_09_30_044922_create_parcel_consignees_table', 6),
(43, '2022_09_30_044942_create_parcel_notes_table', 6),
(44, '2022_10_04_122543_create_logistics_table', 6),
(45, '2022_10_04_122805_create_allocate_parcels_table', 6),
(46, '2022_10_04_123018_create_payment_methods_table', 6),
(47, '2022_10_05_110506_create_vendor_charges_table', 6),
(48, '2022_10_05_115556_create_vendor_id_trackings_table', 6);

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
  `shipper_country_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `parcels` (`id`, `pl_id`, `pl_boxes`, `pl_weight`, `service_id`, `shipper_country_id`, `payment_id`, `pl_charges`, `pl_extras`, `pl_discount`, `pl_final`, `pl_description`, `pl_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-000001', 43, 79.00, 4, 1, 3, 80.00, 56.00, 70.00, 66.00, 'Ad deserunt doloremq', 'delivered', 'active', '2022-10-07 00:01:55', '2022-10-07 00:31:30', NULL),
(2, '2022-PL-000002', 76, 83.00, 2, 2, 2, 33.00, 44.00, 61.00, 16.00, 'Quidem est quam vel', 'delivered', 'active', '2022-10-07 00:02:32', '2022-10-07 00:56:15', NULL),
(3, '2022-PL-000003', 98, 29.00, 1, 6, 3, 76.00, 95.00, 91.00, 80.00, 'Minima id eveniet q', 'processed', 'active', '2022-10-07 00:57:52', '2022-10-07 00:57:52', NULL),
(4, '2022-PL-000004', 62, 5.00, 5, 5, 1, 66.00, 48.00, 30.00, 84.00, 'Facilis quisquam non', 'processed', 'active', '2022-10-07 00:58:13', '2022-10-07 00:58:13', NULL),
(5, '2022-PL-000005', 92, 23.00, 2, 3, 3, 79.00, 42.00, 50.00, 71.00, 'Minima ut maxime id', 'processed', 'active', '2022-10-07 00:58:54', '2022-10-07 00:58:54', NULL),
(6, '2022-PL-000006', 71, 3.00, 3, 4, 1, 30.00, 27.00, 54.00, 3.00, 'Excepteur mollitia v', 'processed', 'active', '2022-10-07 00:59:14', '2022-10-07 00:59:14', NULL);

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

INSERT INTO `parcel_consignees` (`id`, `pl_id`, `consignee_name`, `consignee_phone`, `consignee_business`, `consignee_country_id`, `consignee_state`, `consignee_city`, `consignee_zip`, `consignee_address1`, `consignee_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-000001', 'Tad Obrien', '0317-3914691', NULL, 3, 'Ex a minima sit eni', 'Architecto mollit co', '15930', 'Et debitis in ut ame', 'Facilis voluptate po', 'active', '2022-10-07 00:01:55', '2022-10-07 00:01:55', NULL),
(2, '2022-PL-000002', 'Desiree Fry', '0314-8384390', NULL, 1, 'Impedit rem qui lab', 'Culpa delectus do', '23497', 'Perferendis vel quid', 'Omnis ut unde volupt', 'active', '2022-10-07 00:02:32', '2022-10-07 00:02:32', NULL),
(3, '2022-PL-000004', 'Omar Tucker', '0314-5149688', 'Necessitatibus vel v', 3, 'Elit accusamus est', 'Veritatis velit fugi', '69090', 'Do voluptatem Qui q', 'Ea amet repellendus', 'active', '2022-10-07 00:58:13', '2022-10-07 00:58:13', NULL),
(4, '2022-PL-000005', 'Sheila Hall', '0318-8182654', 'Harum quos qui offic', 5, 'Laboris omnis quo pa', 'Aut sed possimus no', '62187', 'Ad et pariatur Hic', 'Id officiis ut sequ', 'active', '2022-10-07 00:58:54', '2022-10-07 00:58:54', NULL),
(5, '2022-PL-000006', 'Lane Sanchez', '0317-4331156', 'Commodo praesentium', 1, 'Pariatur Est sit qu', 'Neque in velit eos', '89735', 'Sequi sed consequat', 'Obcaecati blanditiis', 'active', '2022-10-07 00:59:14', '2022-10-07 00:59:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notes`
--

CREATE TABLE `parcel_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, '2022-PL-000001', 'Sit qui ut aperiam', 'new', '0', 944.00, 705, 76.00, 'active', '2022-10-07 00:01:55', '2022-10-07 00:01:55', NULL),
(2, '2022-PL-000002', 'Laborum Quo eveniet', 'new', '1', 377.00, 337, 0.00, 'active', '2022-10-07 00:02:32', '2022-10-07 00:02:32', NULL),
(3, '2022-PL-000002', 'Facilis officia in t', 'used', '1', 788.00, 272, 83.00, 'active', '2022-10-07 00:02:32', '2022-10-07 00:02:32', NULL),
(4, '2022-PL-000002', 'Vero velit velit es', 'used', '0', 953.00, 392, 73.00, 'active', '2022-10-07 00:02:32', '2022-10-07 00:02:32', NULL),
(5, '2022-PL-000004', 'Corrupti aut lorem', 'used', '1', 753.00, 609, 68.00, 'active', '2022-10-07 00:58:13', '2022-10-07 00:58:13', NULL),
(6, '2022-PL-000005', 'Aut cupidatat eos en', 'new', '2', 320.00, 58, 54.00, 'active', '2022-10-07 00:58:54', '2022-10-07 00:58:54', NULL),
(7, '2022-PL-000006', 'Rerum tempore place', 'new', '1', 187.00, 59, 27.00, 'active', '2022-10-07 00:59:14', '2022-10-07 00:59:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_shippers`
--

CREATE TABLE `parcel_shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_date` date DEFAULT NULL,
  `pl_phone_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `parcel_shippers` (`id`, `pl_id`, `pl_date`, `pl_phone_id`, `company_name`, `shipper_phone`, `shipper_country_id`, `shipper_state`, `shipper_city`, `shipper_zip`, `shipper_address1`, `shipper_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-000001', '2003-05-08', '123', 'Mcbride and Banks Traders', '0313-7562789', 6, 'Eum esse aperiam fu', 'Fugiat nisi volupta', '45331', 'Aliquam eligendi par', 'Adipisicing aperiam', 'active', '2022-10-07 00:01:55', '2022-10-07 00:01:55', NULL),
(2, '2022-PL-000002', '1977-09-09', '123', 'Poole Bush Inc', '0315-7199917', 1, 'Consequat Molestias', 'Aut nostrum consequa', '54609', 'Reprehenderit ex an', 'Dolorem perspiciatis', 'active', '2022-10-07 00:02:32', '2022-10-07 00:02:32', NULL),
(3, '2022-PL-000004', '1986-05-14', '123', 'Valenzuela and Mckenzie Associates', '0317-2815137', 1, 'Quis non do non mole', 'Recusandae Ut repre', '71434', 'Aliqua Consectetur', 'Eius irure sequi mol', 'active', '2022-10-07 00:58:13', '2022-10-07 00:58:13', NULL),
(4, '2022-PL-000005', '2012-03-10', '123', 'Cherry and Rowland LLC', '0314-2717198', 3, 'Repudiandae doloremq', 'Et quibusdam a odit', '10391', 'Cupiditate aliquam d', 'Quis ex dolores Nam', 'active', '2022-10-07 00:58:54', '2022-10-07 00:58:54', NULL),
(5, '2022-PL-000006', '1981-02-03', '123', 'Mcintyre and Jenkins Plc', '0317-3922356', 4, 'Eiusmod incidunt en', 'Reiciendis voluptati', '84214', 'Quaerat adipisci ea', 'Et eveniet adipisic', 'active', '2022-10-07 00:59:14', '2022-10-07 00:59:14', NULL);

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
(1, 'Bank Transfer', 'active', '2022-10-06 06:06:50', '2022-10-06 06:06:50', NULL),
(2, 'Easypaisa', 'active', '2022-10-06 06:06:55', '2022-10-06 06:06:55', NULL),
(3, 'JazzCash', 'active', '2022-10-06 06:07:04', '2022-10-06 06:07:04', NULL);

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
(1, 'Asia', 'active', '2022-10-04 07:37:19', '2022-10-04 07:37:19', NULL),
(2, 'Europe', 'active', '2022-10-04 07:42:13', '2022-10-04 07:42:13', NULL);

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
(1, 'DHL via Dubai', 'active', '2022-10-06 06:00:34', '2022-10-06 06:00:34', NULL),
(2, 'Leopards Express', 'active', '2022-10-06 06:00:42', '2022-10-06 06:00:42', NULL),
(3, 'DHL via UK', 'active', '2022-10-06 06:00:51', '2022-10-06 06:00:51', NULL),
(4, 'UPS via Dubai', 'active', '2022-10-06 06:00:57', '2022-10-06 06:00:57', NULL),
(5, 'UPS via UK', 'active', '2022-10-06 06:01:04', '2022-10-06 06:01:04', NULL);

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
(1, 'admin@gmail.com', 'admin@gmail.com', NULL, '$2y$10$R8vhA2bhJECcZRbUo1K1.u4sG9SUCVwUXAqetb4xnkRueJWrs6qV2', NULL, '2022-10-04 07:32:41', '2022-10-04 07:32:41'),
(2, 'user', 'user@gmail.com', NULL, 'user1234', NULL, '2022-10-04 07:34:02', '2022-10-04 07:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_charges`
--

CREATE TABLE `vendor_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_tracking_charges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_charges`
--

INSERT INTO `vendor_charges` (`id`, `pl_id`, `vendor_tracking_charges`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-000001', 'c123', 'active', '2022-10-07 00:31:04', '2022-10-07 00:31:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_id_trackings`
--

CREATE TABLE `vendor_id_trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_tracking_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_id_trackings`
--

INSERT INTO `vendor_id_trackings` (`id`, `pl_id`, `vendor_tracking_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-PL-000001', 't123', 'active', '2022-10-07 00:30:51', '2022-10-07 00:30:51', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_charges`
--
ALTER TABLE `vendor_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
