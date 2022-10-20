-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 08:43 PM
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
(1, 1, 1, 2, 'active', '2022-10-20 12:25:48', '2022-10-20 12:25:48', NULL),
(2, 2, 2, 3, 'active', '2022-10-20 12:30:30', '2022-10-20 12:30:30', NULL),
(3, 3, 3, 1, 'active', '2022-10-20 12:35:46', '2022-10-20 12:35:46', NULL),
(4, 4, 3, 1, 'active', '2022-10-20 12:42:41', '2022-10-20 12:42:41', NULL);

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
(1, 'Ali Logistics', 'active', '2022-10-14 02:44:42', '2022-10-14 02:44:42', NULL),
(2, 'Kamran Logistics', 'active', '2022-10-14 02:45:35', '2022-10-14 02:45:35', NULL),
(3, 'Salman Logistics', 'active', '2022-10-14 02:46:15', '2022-10-14 02:46:15', NULL),
(4, 'Zahid Logistic', 'active', '2022-10-14 02:46:52', '2022-10-14 02:46:52', NULL);

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
(1, 1, 'Pakistan', 'active', '2022-10-10 09:12:57', '2022-10-10 09:12:57', NULL),
(2, 1, 'India', 'active', '2022-10-10 09:12:57', '2022-10-10 09:12:57', NULL),
(3, 1, 'Srilanka', 'active', '2022-10-10 09:12:57', '2022-10-10 09:12:57', NULL),
(4, 2, 'Australia', 'active', '2022-10-10 09:13:26', '2022-10-10 09:13:26', NULL),
(5, 2, 'England', 'active', '2022-10-10 09:13:26', '2022-10-10 09:13:26', NULL),
(6, 2, 'Newzealand', 'active', '2022-10-10 09:13:26', '2022-10-10 09:13:26', NULL);

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
(1, 'PKR', 'Rs', 'active', '2022-10-12 15:35:39', '2022-10-10 15:35:39', NULL),
(2, 'USD', '$', 'active', '2022-10-12 15:35:39', '2022-10-10 15:35:39', NULL),
(3, 'EUR', '€', 'active', '2022-10-12 15:35:39', '2022-10-10 15:35:39', NULL);

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
(1, 1, 'ali@mail.com', '0321-3123132', 'peshawar', 3, 'active', '2022-10-14 02:44:42', '2022-10-14 02:44:42', NULL),
(2, 1, 'ali@mail.com', '0321-3123132', 'peshawar', 4, 'active', '2022-10-14 02:44:42', '2022-10-14 02:44:42', NULL),
(3, 2, 'kamran@mail.com', '0345-6346363', 'islamabad1', 1, 'active', '2022-10-14 02:45:35', '2022-10-14 02:45:35', NULL),
(4, 2, 'kamran@mail.com', '0345-6346363', 'islamabad1', 2, 'active', '2022-10-14 02:45:35', '2022-10-14 02:45:35', NULL),
(5, 3, 'salman@mail.com', '0323-1313212', 'hayatabad', 1, 'active', '2022-10-14 02:46:15', '2022-10-14 02:46:15', NULL),
(6, 3, 'salman@mail.com', '0323-1313212', 'hayatabad', 2, 'active', '2022-10-14 02:46:15', '2022-10-14 02:46:15', NULL),
(7, 3, 'salman@mail.com', '0323-1313212', 'hayatabad', 3, 'active', '2022-10-14 02:46:15', '2022-10-14 02:46:15', NULL),
(8, 4, 'zahid@mail.com', '0332-1124363', 'Peshawar', 1, 'active', '2022-10-14 02:46:52', '2022-10-14 02:46:52', NULL),
(9, 4, 'zahid@mail.com', '0332-1124363', 'Peshawar', 2, 'active', '2022-10-14 02:46:52', '2022-10-14 02:46:52', NULL),
(10, 4, 'zahid@mail.com', '0332-1124363', 'Peshawar', 3, 'active', '2022-10-14 02:46:52', '2022-10-14 02:46:52', NULL),
(11, 4, 'zahid@mail.com', '0332-1124363', 'Peshawar', 4, 'active', '2022-10-14 02:46:52', '2022-10-14 02:46:52', NULL);

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
(27, '2022_10_05_102639_create_vendor_tackings_table', 4),
(28, '2022_10_05_102653_create_vendor_charges_table', 4),
(33, '2022_10_05_110450_create_vendor_tackings_table', 5),
(40, '2022_09_30_044813_create_parcels_table', 6),
(50, '2022_09_22_063145_create_companies_table', 7),
(51, '2022_09_27_081556_create_services_table', 7),
(52, '2022_09_27_112227_create_countries_table', 7),
(53, '2022_09_30_044906_create_parcel_shippers_table', 7),
(54, '2022_09_30_044922_create_parcel_consignees_table', 7),
(55, '2022_09_30_044942_create_parcel_notes_table', 7),
(56, '2022_10_04_122543_create_logistics_table', 7),
(57, '2022_10_04_122805_create_allocate_parcels_table', 7),
(58, '2022_10_04_123018_create_payment_methods_table', 7),
(59, '2022_10_05_110506_create_vendor_charges_table', 7),
(60, '2022_10_05_115556_create_vendor_id_trackings_table', 7),
(61, '2022_10_07_122734_create_parcels_table', 7),
(64, '2022_10_14_061941_create_companies_table', 8),
(65, '2022_10_14_065703_create_logistics_table', 8),
(66, '2022_10_17_130047_create_payment_logs_table', 9),
(67, '2022_10_18_032422_create_contact_us_table', 10),
(68, '2022_10_19_054420_create_parcels_table', 11),
(69, '2022_10_19_054441_create_contact_us_table', 11),
(70, '2022_10_19_054512_create_parcel_shippers_table', 11),
(71, '2022_10_19_054523_create_parcel_consignees_table', 11),
(72, '2022_10_19_054601_create_vendor_charges_table', 11),
(73, '2022_10_19_054627_create_vendor_id_trackings_table', 11),
(74, '2022_10_19_173022_create_payment_logs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `parcels` (`id`, `pl_id`, `shipper_id`, `consignee_id`, `pl_boxes`, `pl_weight`, `service_id`, `payment_id`, `pl_charges`, `pl_extras`, `pl_discount`, `pl_final`, `pl_description`, `pl_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PL000001', 1, 1, 85, 58.00, 1, 1, 510.00, 60.00, 20.00, 550.00, 'Quam rerum sint mod', 'delivered', 'active', '2022-10-20 12:09:38', '2022-10-20 12:32:56', NULL),
(2, 'PL000002', 2, 2, 10, 49.00, 2, 3, 990.00, 90.00, 80.00, 1000.00, 'Vero ullamco quisqua', 'delivered', 'active', '2022-10-20 12:12:40', '2022-10-20 12:33:06', NULL),
(3, 'PL000003', 1, 3, 14, 54.00, 3, 3, 710.00, 85.00, 45.00, 750.00, 'Doloremque rerum est', 'allocated', 'active', '2022-10-20 12:14:44', '2022-10-20 12:35:46', NULL),
(4, 'PL000004', 2, 4, 65, 100.00, 3, 4, 900.00, 160.00, 320.00, 740.00, 'Ex id laborum enim p', 'allocated', 'active', '2022-10-20 12:16:50', '2022-10-20 12:42:41', NULL),
(5, 'PL000005', 2, 5, 64, 1.00, 4, 2, 880.00, 130.00, 40.00, 970.00, 'Ea optio officia vo', 'processed', 'active', '2022-10-20 12:18:15', '2022-10-20 12:18:15', NULL),
(6, 'PL000006', 1, 6, 16, 3.00, 4, 3, 930.00, 80.00, 90.00, 920.00, 'Harum dicta ea ut al', 'processed', 'active', '2022-10-20 12:19:26', '2022-10-20 12:19:26', NULL),
(7, 'PL000007', 1, 7, 32, 87.00, 1, 2, 300.00, 80.00, 50.00, 330.00, 'Ea magnam consequatu', 'processed', 'active', '2022-10-20 12:20:16', '2022-10-20 12:20:16', NULL),
(8, 'PL000008', 3, 8, 49, 18.00, 4, 1, 770.00, 340.00, 40.00, 1070.00, 'Voluptatem aut eaqu', 'processed', 'active', '2022-10-20 12:21:46', '2022-10-20 12:21:46', NULL),
(9, 'PL000009', 4, 9, 85, 22.00, 1, 2, 820.00, 50.00, 240.00, 630.00, 'Explicabo Nam quasi', 'processed', 'active', '2022-10-20 12:23:07', '2022-10-20 12:23:07', NULL),
(10, 'PL0000010', 4, 10, 20, 28.00, 1, 3, 730.00, 30.00, 60.00, 700.00, 'Earum cumque et iure', 'processed', 'active', '2022-10-20 12:23:57', '2022-10-20 12:23:57', NULL),
(11, 'PL0000011', 3, 11, 90, 44.00, 2, 4, 400.00, 90.00, 40.00, 450.00, 'Quasi deleniti dolor', 'processed', 'active', '2022-10-20 12:24:51', '2022-10-20 12:24:51', NULL);

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
(1, 'Zahid Khan', '0311-9037942', 'Brothers Computers', 2, 'fsdfd', 'sdf', 'sdfsd', 'sdfdsf', 'sdfsd', 'active', '2022-10-20 12:09:38', '2022-10-20 12:09:38', NULL),
(2, 'Asad Rahim', '0315-2200834', 'Almadin Computers', 3, 'sdfsd', 'sdfsdf', 'sdfsd', 'sdfsd', 'sdfsd', 'active', '2022-10-20 12:12:40', '2022-10-20 12:12:40', NULL),
(3, 'Hameed Khan', '0312-9195566', 'jehangira computers', 4, 'sdf', 'sdfsdfs', 'sdfs', 'fsdf', 'sdfsd', 'active', '2022-10-20 12:14:44', '2022-10-20 12:14:44', NULL),
(4, 'Waheed', '0314-9179689', 'Waheed computers', 4, 'gsfdg', 'hfghfg', 'fghfgh', 'trytry', 'ghfghfg', 'active', '2022-10-20 12:16:50', '2022-10-20 12:16:50', NULL),
(5, 'Wajid', '0342-5611232', 'Wajid Computers', 5, 'dtr', 'dfgfd', 'ereter', 'fdgfdg', 'fdgfd', 'active', '2022-10-20 12:18:15', '2022-10-20 12:18:15', NULL),
(6, 'waleed', '0301-2424524', 'Waleed Computers', 6, 'fsdfd', 'fsdf', 'sdfsd', 'sdf', 'sdfsdf', 'active', '2022-10-20 12:19:26', '2022-10-20 12:19:26', NULL),
(7, 'Sopoline Tucker', '0315-8724422', 'Quo voluptatem moles', 5, 'Dignissimos quis ut', 'Possimus odit esse', '14652', 'A ex soluta omnis et', 'Obcaecati autem est', 'active', '2022-10-20 12:20:16', '2022-10-20 12:20:16', NULL),
(8, 'waqas', '0319-7498464', 'Waqas Computers', 6, 'Dolorem commodo volu', 'Qui ipsum ea ex dolo', '29104', 'Quo laudantium erro', 'Repudiandae anim asp', 'active', '2022-10-20 12:21:46', '2022-10-20 12:21:46', NULL),
(9, 'Nomlanga Powell', '0315-4376620', 'Vero eaque natus qui', 1, 'Aliquam irure quo oc', 'Corrupti aut sit qu', '24155', 'Ipsa necessitatibus', 'Doloribus excepteur', 'active', '2022-10-20 12:23:07', '2022-10-20 12:23:07', NULL),
(10, 'Alan Hampton', '0312-9887678', 'harum', 1, 'Id voluptatem laboru', 'Rerum ducimus unde', '42806', 'Illum a ut explicab', 'Amet nostrum quasi', 'active', '2022-10-20 12:23:57', '2022-10-20 12:23:57', NULL),
(11, 'Francis Dotson', '0313-3540320', 'Francis Dotsonli', 6, 'Quia ut accusantium', 'Impedit nulla Nam o', '90322', 'In quibusdam harum s', 'Et et ipsa aut est', 'active', '2022-10-20 12:24:51', '2022-10-20 12:24:51', NULL);

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
(1, 1, 'dfsdfs', 'new', '1', 55.00, 10, 550.00, 'active', '2022-10-20 12:09:38', '2022-10-20 12:09:38', NULL),
(2, 2, 'fgfd', 'used', '2', 100.00, 10, 1000.00, 'active', '2022-10-20 12:12:40', '2022-10-20 12:12:40', NULL),
(3, 3, 'sdfsd', 'used', '1', 75.00, 10, 750.00, 'active', '2022-10-20 12:14:44', '2022-10-20 12:14:44', NULL),
(4, 4, 'dfsd', 'new', '1', 74.00, 10, 740.00, 'active', '2022-10-20 12:16:50', '2022-10-20 12:16:50', NULL),
(5, 5, 'tryrt', 'new', '1', 97.00, 10, 970.00, 'active', '2022-10-20 12:18:15', '2022-10-20 12:18:15', NULL),
(6, 6, 'fgfdg', 'used', '1', 92.00, 10, 920.00, 'active', '2022-10-20 12:19:26', '2022-10-20 12:19:26', NULL),
(7, 7, 'sdf', 'new', '1', 33.00, 10, 330.00, 'active', '2022-10-20 12:20:16', '2022-10-20 12:20:16', NULL),
(8, 8, 'dfsdf', 'new', '1', 107.00, 10, 1070.00, 'active', '2022-10-20 12:21:46', '2022-10-20 12:21:46', NULL),
(9, 9, 'Dolorem dignissimos', 'new', '1', 266.00, 353, 17.00, 'active', '2022-10-20 12:23:07', '2022-10-20 12:23:07', NULL),
(10, 10, 'fsdfs', 'new', '2', 70.00, 10, 700.00, 'active', '2022-10-20 12:23:57', '2022-10-20 12:23:57', NULL),
(11, 11, 'hjhjg', 'new', '3', 45.00, 10, 450.00, 'active', '2022-10-20 12:24:51', '2022-10-20 12:24:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_shippers`
--

CREATE TABLE `parcel_shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `parcel_shippers` (`id`, `company_name`, `shipper_phone`, `shipper_country_id`, `shipper_state`, `shipper_city`, `shipper_zip`, `shipper_address1`, `shipper_address2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Softech sbs', '0310-9488696', 1, 'sdfdsf', 'sdfsd', 'sdfsd', 'sdfs', 'sdfs', 'active', '2022-10-20 12:09:38', '2022-10-20 12:09:38', NULL),
(2, 'isfoftech', '0342-5652313', 2, 'fsdf', 'sdfsd', 'sdfsd', 'sdf', 'sdfs', 'active', '2022-10-20 12:12:40', '2022-10-20 12:12:40', NULL),
(3, 'Salman Carporate', '0312-1212121', 2, 'fsdf', 'fddssd', 'sdfsd', 'sdfsd', 'sdfsd', 'active', '2022-10-20 12:21:46', '2022-10-20 12:21:46', NULL),
(4, 'Raza Associates', '0313-0627888', 1, 'Sapiente sunt aut su', 'Qui pariatur Dolor', '68159', 'Ex aut amet ducimus', 'Suscipit et vel qui', 'active', '2022-10-20 12:23:07', '2022-10-20 12:23:07', NULL);

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
(1, '2', 2, 1, 0, 50.00, 50.00, NULL, '2022-10-20 12:57:52', '2022-10-20 12:57:52'),
(4, '2', 1, 1, 0, 100.00, 500.00, NULL, '2022-10-20 13:27:52', '2022-10-20 13:27:52'),
(5, '2', 1, 3, 0, 100.00, 400.00, NULL, '2022-10-20 13:28:08', '2022-10-20 13:28:08');

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
(1, 'Cash Payment', 'active', '2022-10-10 09:19:07', '2022-10-10 09:19:07', NULL),
(2, 'Easy Paisa', 'active', '2022-10-10 09:19:21', '2022-10-10 09:19:21', NULL),
(3, 'Jazz Cash', 'active', '2022-10-10 09:19:28', '2022-10-10 09:19:28', NULL),
(4, 'Bank Transfer', 'active', '2022-10-10 09:19:40', '2022-10-10 09:19:40', NULL);

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
(1, 'Normal Service', 'active', '2022-10-10 09:14:35', '2022-10-10 09:14:35', NULL),
(2, 'Medium Service', 'active', '2022-10-10 09:14:51', '2022-10-10 09:14:51', NULL),
(3, 'Fast Service', 'active', '2022-10-10 09:15:29', '2022-10-10 09:15:29', NULL),
(4, 'Express Service', 'active', '2022-10-10 09:15:46', '2022-10-10 09:15:46', NULL);

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
(2, 'user', 'user@gmail.com', NULL, 'user1234', NULL, '2022-10-04 07:34:02', '2022-10-04 07:34:02'),
(3, 'khan', 'khan@mailinator.com', NULL, 'khan1234', NULL, '2022-10-10 07:46:54', '2022-10-10 07:46:54');

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
(1, 1, 2, '100', 'active', '2022-10-20 12:29:17', '2022-10-20 12:29:17', NULL),
(2, 2, 3, '200', 'active', '2022-10-20 12:32:41', '2022-10-20 12:32:41', NULL),
(3, 3, 1, '100', 'active', '2022-10-20 12:37:15', '2022-10-20 12:37:15', NULL),
(4, 4, 1, '500', 'active', '2022-10-20 12:48:00', '2022-10-20 12:48:00', NULL);

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
(1, 1, 2, 't1', 'active', '2022-10-20 12:28:05', '2022-10-20 12:28:05', NULL),
(2, 2, 3, 't2', 'active', '2022-10-20 12:32:32', '2022-10-20 12:32:32', NULL),
(3, 3, 1, 'v232323', 'active', '2022-10-20 12:36:01', '2022-10-20 12:36:01', NULL),
(4, 4, 1, 'v232323', 'active', '2022-10-20 12:42:50', '2022-10-20 12:42:50', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_charges`
--
ALTER TABLE `vendor_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
