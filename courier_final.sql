-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 09:47 AM
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
(1, 1, 4, 4, 'active', '2022-10-11 08:16:11', '2022-10-11 08:16:11', NULL),
(2, 2, 1, 8, 'active', '2022-10-11 08:16:29', '2022-10-11 08:16:29', NULL),
(3, 3, 3, 7, 'active', '2022-10-11 08:16:44', '2022-10-11 08:16:44', NULL),
(4, 4, 4, 4, 'active', '2022-10-12 01:30:44', '2022-10-12 01:30:44', NULL),
(5, 5, 4, 4, 'active', '2022-10-12 01:32:11', '2022-10-12 01:32:11', NULL),
(6, 6, 3, 7, 'active', '2022-10-12 04:51:52', '2022-10-12 04:51:52', NULL);

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
(65, '2022_10_14_065703_create_logistics_table', 8);

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
  `consignee_country_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `parcels` (`id`, `pl_id`, `pl_boxes`, `pl_weight`, `service_id`, `shipper_country_id`, `consignee_country_id`, `payment_id`, `pl_charges`, `pl_extras`, `pl_discount`, `pl_final`, `pl_description`, `pl_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PL-000001', 44, 25.00, 4, 2, 5, 1, 66.00, 76.00, 39.00, 203.00, 'Sint aliquam amet', 'delivered', 'active', '2022-10-10 11:54:27', '2022-10-11 10:16:23', NULL),
(2, 'PL-000002', 29, 87.00, 1, 4, 4, 4, 72.00, 67.00, 98.00, 410.00, 'Sint dolores sit mi', 'delivered', 'active', '2022-10-10 11:54:42', '2022-10-11 11:57:27', NULL),
(3, 'PL-000003', 92, 5.00, 3, 2, 6, 2, 14.00, 7.00, 99.00, 780.00, 'Omnis enim excepturi', 'delivered', 'active', '2022-10-10 11:54:56', '2022-10-12 01:33:02', NULL),
(4, 'PL-000004', 99, 93.00, 4, 3, 2, 2, 88.00, 64.00, 87.00, 65.00, 'Et ipsum eligendi N', 'allocated', 'active', '2022-10-11 05:02:39', '2022-10-12 05:06:57', NULL),
(5, 'PL-000005', 6, 2.00, 4, 1, 3, 4, 90.00, 62.00, 76.00, 76.00, 'Sunt saepe nobis des', 'allocated', 'active', '2022-10-11 05:03:05', '2022-10-12 01:32:11', NULL),
(6, 'PL-000006', 94, 50.00, 3, 4, 6, 1, 69.00, 57.00, 36.00, 190.00, 'Culpa dolore quam s', 'delivered', 'active', '2022-10-11 05:03:27', '2022-10-12 04:52:38', NULL),
(7, 'PL-000007', 9, 24.00, 1, 6, 2, 2, 610.00, 13.00, 82.00, 541.00, 'Enim dolor libero no', 'processed', 'active', '2022-10-11 05:14:48', '2022-10-11 05:18:16', NULL),
(8, 'PL-000008', 32, 100.00, 1, 2, 1, 3, 58.00, 20.00, 33.00, 45.00, 'Tempora voluptatem a', 'processed', 'active', '2022-10-11 05:15:06', '2022-10-11 05:21:38', NULL),
(9, 'PL-000009', 60, 36.00, 4, NULL, 4, 3, 79.00, 95.00, 52.00, 122.00, 'Minus perferendis Na', 'processed', 'active', '2022-10-12 09:50:54', '2022-10-12 09:50:54', NULL),
(10, 'PL-0000010', 47, 42.00, 3, NULL, 1, 1, 16.00, 48.00, 26.00, 38.00, 'Culpa eos placeat', 'processed', 'active', '2022-10-12 09:53:50', '2022-10-12 09:53:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_consignees`
--

CREATE TABLE `parcel_consignees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
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
(1, 1, 'Mara Cross', '0312-6718659', 'Laboriosam qui beat', 5, 'Voluptate minus null', 'Vel deserunt in even', '54656', 'Duis inventore duis', 'Qui ducimus nihil n', 'active', '2022-10-10 11:54:27', '2022-10-10 11:54:27', NULL),
(2, 2, 'Odessa Goff', '0319-4193243', 'Ut officia adipisici', 4, 'Modi cum dolor tempo', 'Quia sit officia es', '56906', 'Nesciunt exercitati', 'Minim eos aspernatur', 'active', '2022-10-10 11:54:42', '2022-10-10 11:54:42', NULL),
(3, 3, 'Xavier Shields', '0316-9782198', NULL, 6, 'Vel voluptate nisi r', 'Nulla ducimus modi', '45036', 'Sunt tenetur quia vo', 'Odio tempore accusa', 'active', '2022-10-10 11:54:56', '2022-10-10 11:54:56', NULL),
(4, 4, 'Lewis Stafford', '0311-7163879', 'Enim dolores modi iu', 2, 'Et ab sed in quis', 'Deserunt qui consequ', '60144', 'Ab sint magna sint r', 'Eos in lorem ab in', 'active', '2022-10-11 05:02:39', '2022-10-11 05:02:39', NULL),
(5, 5, 'Lawrence Beard', '0317-4316258', 'Sint elit est dist', 3, 'Ullamco eum et rem r', 'In et tenetur eum ni', '51412', 'Omnis ut rerum eius', 'Debitis iure nostrud', 'active', '2022-10-11 05:03:05', '2022-10-11 05:03:05', NULL),
(6, 6, 'Jessamine Banks', '0313-5665191', 'Nihil minus laborios', 6, 'Laborum quod sit con', 'Vitae nostrud irure', '26499', 'Dolore consequatur', 'Tempora quos et assu', 'active', '2022-10-11 05:03:27', '2022-10-11 05:03:27', NULL),
(7, 7, 'Kieran Contreras', '0311-2392751', NULL, 2, 'Fugiat assumenda sed', 'Sint non ducimus do', '28807', 'Explicabo Suscipit', 'Est in aliquam odio', 'active', '2022-10-11 05:14:48', '2022-10-11 05:14:48', NULL),
(8, 8, 'Cole Solis', '0314-2554261', 'dsfdsfsdfs', 1, 'Hic incididunt saepe', 'Nihil fugiat consect', '68234', 'Sed deleniti omnis i', 'Ipsum minim dolores', 'active', '2022-10-11 05:15:06', '2022-10-11 05:15:06', NULL),
(9, 9, 'Rama Mcdaniel', '0316-9261515', 'Voluptates voluptate', 4, 'Commodo dolor dolore', 'Quam obcaecati sit v', '98286', 'Omnis maiores eaque', 'Pariatur Exercitati', 'active', '2022-10-12 09:50:54', '2022-10-12 09:50:54', NULL),
(10, 10, 'Denton Britt', '0312-9111923', 'Voluptates voluptate', 1, 'Deleniti nisi dolor', 'Ut accusantium ut la', '45352', 'Dolorem esse natus p', 'In quas asperiores i', 'active', '2022-10-12 09:53:50', '2022-10-12 09:53:50', NULL);

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
(1, 1, 'Et eum at sunt cupid', 'used', '2', 976.00, 96, 9.00, 'active', '2022-10-10 11:54:27', '2022-10-10 11:54:27', NULL),
(2, 1, 'Rem sunt modi labori', 'new', '1', 92.00, 753, 10.00, 'active', '2022-10-10 11:54:27', '2022-10-10 11:54:27', NULL),
(3, 1, 'Sit deserunt laudant', 'used', '3', 211.00, 341, 47.00, 'active', '2022-10-10 11:54:27', '2022-10-10 11:54:27', NULL),
(4, 2, 'Consectetur quia su', 'new', '1', 892.00, 266, 94.00, 'active', '2022-10-10 11:54:42', '2022-10-10 11:54:42', NULL),
(5, 3, 'Ex vero dolorem est', 'new', '2', 457.00, 684, 66.00, 'active', '2022-10-10 11:54:56', '2022-10-10 11:54:56', NULL),
(6, 4, 'Iure aliquip deserun', 'used', '3', 351.00, 917, 44.00, 'active', '2022-10-11 05:02:39', '2022-10-11 05:02:39', NULL),
(7, 5, 'Id nulla nulla amet', 'used', '2', 895.00, 458, 56.00, 'active', '2022-10-11 05:03:05', '2022-10-11 05:03:05', NULL),
(8, 5, 'Voluptatem Aute ess', 'new', '3', 532.00, 565, 50.00, 'active', '2022-10-11 05:03:05', '2022-10-11 05:03:05', NULL),
(9, 5, 'Earum neque fugiat', 'used', '1', 574.00, 670, 1.00, 'active', '2022-10-11 05:03:05', '2022-10-11 05:03:05', NULL),
(10, 6, 'Nisi nulla anim ulla', 'new', '3', 5.00, 179, 19.00, 'active', '2022-10-11 05:03:27', '2022-10-11 05:03:27', NULL),
(11, 6, 'Earum ut enim harum', 'new', '2', 111.00, 432, 84.00, 'active', '2022-10-11 05:03:27', '2022-10-11 05:03:27', NULL),
(12, 6, 'Reprehenderit pariat', 'used', '2', 387.00, 692, 53.00, 'active', '2022-10-11 05:03:27', '2022-10-11 05:03:27', NULL),
(13, 7, 'Quia molestiae incid', 'used', '1', 679.00, 671, 37.00, 'active', '2022-10-11 05:14:48', '2022-10-11 05:14:48', NULL),
(14, 8, 'Sint dolore aut odio', 'new', '3', 664.00, 446, 1.00, 'active', '2022-10-11 05:15:06', '2022-10-11 05:15:06', NULL),
(15, 9, 'Voluptas qui aut nem', 'used', '2', 824.00, 876, 88.00, 'active', '2022-10-12 09:50:54', '2022-10-12 09:50:54', NULL),
(16, 10, 'Culpa aliquam qui i', 'new', '0', 455.00, 890, 0.00, 'active', '2022-10-12 09:53:50', '2022-10-12 09:53:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_shippers`
--

CREATE TABLE `parcel_shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
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
(1, 1, '1971-11-17', '123', 'Cox and House Trading', '0319-5391863', 2, 'Ex deserunt ex qui c', 'Molestias itaque nul', '83208', 'Sint excepteur id', 'Quod ipsum corporis', 'active', '2022-10-10 11:54:27', '2022-10-10 11:54:27', NULL),
(2, 2, '1989-04-30', '123', 'Elliott Rivera LLC', '0315-1817250', 4, 'Nam deserunt volupta', 'Possimus consectetu', '31210', 'Et cum recusandae D', 'Possimus dolores el', 'active', '2022-10-10 11:54:42', '2022-10-10 11:54:42', NULL),
(3, 3, '2001-03-22', '123', 'Dunlap Barber LLC', '0311-8812435', 2, 'Ipsum incididunt dis', 'In cum exercitation', '37374', 'Officia eos sed ipsa', 'Reprehenderit inven', 'active', '2022-10-10 11:54:56', '2022-10-10 11:54:56', NULL),
(4, 4, '1982-03-26', '123', 'Mccray Emerson Inc', '0313-0181673', 3, 'Voluptatem sunt est', 'Fuga Ullamco sunt v', '30040', 'Inventore consectetu', 'Minim saepe velit do', 'active', '2022-10-11 05:02:39', '2022-10-11 05:02:39', NULL),
(5, 5, '2012-08-01', '123', 'Vaughan Bruce Plc', '0319-4644822', 1, 'Placeat natus non q', 'Quidem fugit sunt', '65707', 'Sunt cum nostrum dig', 'Voluptatem in incid', 'active', '2022-10-11 05:03:05', '2022-10-11 05:03:05', NULL),
(6, 6, '1976-06-18', '123', 'Arnold Carlson Inc', '0311-5640853', 4, 'Quis adipisci sequi', 'Nemo sunt soluta qua', '84526', 'Omnis ea nihil enim', 'Pariatur Mollit aut', 'active', '2022-10-11 05:03:27', '2022-10-11 05:03:27', NULL),
(7, 7, '1971-07-24', '123', 'Contreras Bean Traders', '0311-1336626', 6, 'Dolore non qui sint', 'Laborum maiores aute', '61527', 'Officiis distinctio', 'Quia iure fugit vol', 'active', '2022-10-11 05:14:48', '2022-10-11 05:14:48', NULL),
(8, 8, '2015-05-20', '123', 'Noble Levy Plc', '0315-4266516', 2, 'Harum distinctio Si', 'Quibusdam velit off', '16265', 'Aut suscipit facilis', 'Est sit autem volupt', 'active', '2022-10-11 05:15:06', '2022-10-11 05:15:06', NULL),
(9, 9, '1971-05-09', '123', 'Jacobs Pitts Plc', '0314-2142918', 2, 'Suscipit non accusam', 'Cumque ipsum tempori', '47116', 'Mollit voluptatem u', 'Et ad voluptatum dol', 'active', '2022-10-12 09:50:54', '2022-10-12 09:50:54', NULL),
(10, 10, '2000-12-04', '123', 'Powell Puckett Associates', '0312-8861764', 1, 'Dolore reiciendis qu', 'Et temporibus non fu', '79628', 'Rerum voluptatem al', 'Illo facilis velit a', 'active', '2022-10-12 09:53:50', '2022-10-12 09:53:50', NULL);

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
(1, 'DHL via Express', 'active', '2022-10-10 09:14:35', '2022-10-10 09:14:35', NULL),
(2, 'DHL via Dubai', 'active', '2022-10-10 09:14:51', '2022-10-10 09:14:51', NULL),
(3, 'UPS via Dubai', 'active', '2022-10-10 09:15:29', '2022-10-10 09:15:29', NULL),
(4, 'UPS via UK', 'active', '2022-10-10 09:15:46', '2022-10-10 09:15:46', NULL);

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
(1, 1, '101', 'active', '2022-10-11 10:15:57', '2022-10-11 10:15:57', NULL),
(2, 2, '102', 'active', '2022-10-11 11:57:14', '2022-10-11 11:57:14', NULL),
(3, 3, '103', 'active', '2022-10-12 01:32:49', '2022-10-12 01:32:49', NULL),
(4, 6, '106', 'active', '2022-10-12 04:52:21', '2022-10-12 04:52:21', NULL),
(5, 4, 'cdwewe', 'active', '2022-10-14 00:59:33', '2022-10-14 00:59:33', NULL),
(6, 5, 'cdwewe1212', 'active', '2022-10-14 00:59:43', '2022-10-14 00:59:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_id_trackings`
--

CREATE TABLE `vendor_id_trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` int(11) DEFAULT NULL,
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
(1, 1, 't1', 'active', '2022-10-11 10:15:44', '2022-10-11 10:15:44', NULL),
(2, 2, 't2', 'active', '2022-10-11 11:57:08', '2022-10-11 11:57:08', NULL),
(3, 3, 't3', 'active', '2022-10-12 01:32:38', '2022-10-12 01:32:38', NULL),
(4, 6, 't6', 'active', '2022-10-12 04:52:13', '2022-10-12 04:52:13', NULL),
(5, 4, 'p232', 'active', '2022-10-14 00:59:27', '2022-10-14 00:59:27', NULL),
(6, 5, 'p232', 'active', '2022-10-14 00:59:38', '2022-10-14 00:59:38', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_id_trackings`
--
ALTER TABLE `vendor_id_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
