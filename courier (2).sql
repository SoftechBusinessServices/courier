-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 12:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
(5, 1, 3, 10, 'active', '2022-10-14 06:49:43', '2022-10-14 06:49:43', NULL),
(6, 3, 2, 4, 'active', '2022-10-14 07:23:24', '2022-10-14 07:23:24', NULL),
(7, 2, 1, 5, 'active', '2022-10-14 09:15:37', '2022-10-14 09:15:37', NULL),
(8, 4, 3, 1, 'active', '2022-10-14 09:15:57', '2022-10-14 09:15:57', NULL);

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
(1, 'PL-000001', 24, 33.00, 3, 1, 4, 1, 430.00, 260.00, 60.00, 630.00, '24boxes', 'allocated', 'active', '2022-10-14 05:09:05', '2022-10-14 06:49:43', NULL),
(2, 'PL-000002', 85, 30.00, 1, 2, 5, 4, 76.00, 24.00, 47.00, 53.00, 'Dolorem aliquip cupi', 'allocated', 'active', '2022-10-14 05:18:10', '2022-10-14 09:15:37', NULL),
(3, 'PL-000003', 45, 47.00, 2, 3, 2, 2, 84.00, 2.00, 96.00, -10.00, 'Est id cillum id exp', 'allocated', 'active', '2022-10-14 05:24:25', '2022-10-14 07:23:24', NULL),
(4, 'PL-000004', 33, 59.00, 3, 4, 6, 2, 80.00, 100.00, 19.00, 161.00, 'Aut laudantium modi', 'allocated', 'active', '2022-10-14 05:25:58', '2022-10-14 09:15:57', NULL),
(5, 'PL-000005', 74, 53.00, 4, 5, 4, 4, 76.00, 59.00, 74.00, 61.00, 'Enim quis consequatu', 'processed', 'active', '2022-10-14 05:27:39', '2022-10-14 05:27:39', NULL),
(6, 'PL-000006', 6, 75.00, 2, 3, 1, 4, 15.00, 75.00, 33.00, 57.00, 'Facilis omnis dolor', 'processed', 'active', '2022-10-14 06:09:30', '2022-10-14 06:09:30', NULL),
(7, 'PL-000007', 22, 43.00, 1, 6, 5, 4, 5.00, 27.00, 7.00, 25.00, 'Labore incididunt od', 'processed', 'active', '2022-10-14 08:15:40', '2022-10-14 08:15:40', NULL),
(8, 'PL-000008', 43, 66.00, 4, 6, 6, 4, 63.00, 27.00, 8.00, 82.00, 'Suscipit saepe offic', 'processed', 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(9, 'PL-000009', 18, 8.00, 3, 4, 3, 1, 25.00, 58.00, 76.00, 7.00, 'Repellendus Odio iu', 'processed', 'active', '2022-10-14 09:13:01', '2022-10-14 09:13:01', NULL),
(10, 'PL-0000010', 31, 67.00, 3, 2, 4, 2, 99.00, 77.00, 80.00, 96.00, 'Ut eius dolorem dele', 'processed', 'active', '2022-10-14 09:14:01', '2022-10-14 09:14:01', NULL),
(11, 'PL-0000011', 97, 7.00, 1, 1, 4, 2, 55.00, 13.00, 29.00, 39.00, 'Alias illum rerum e', 'processed', 'active', '2022-10-14 09:15:15', '2022-10-14 09:15:15', NULL);

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
(1, 1, 'Leigh Marshall', '0318-4756379', 'Perferendis natus es', 4, 'Ea fugiat nisi tempo', 'Quia error at enim n', '44168', 'Odio suscipit eaque', 'Omnis illo vel amet', 'active', '2022-10-14 05:09:05', '2022-10-14 05:09:05', NULL),
(2, 2, 'Gary Thornton', '0317-2779595', 'Voluptates voluptate', 6, 'Illo culpa et incidi', 'In cupiditate labore', '84024', 'Voluptas praesentium', 'Consequatur Dolores', 'active', '2022-10-14 05:18:10', '2022-10-14 05:18:10', NULL),
(3, 3, 'Jonah Becker', '0311-9655979', 'Reprehenderit qui pr', 2, 'Qui similique nostru', 'Magni veniam commod', '42491', 'Non atque nemo sint', 'Vero dolore esse co', 'active', '2022-10-14 05:24:25', '2022-10-14 05:24:25', NULL),
(4, 4, 'Carly Vega', '0313-5993258', 'Adipisci qui enim es', 6, 'Consequatur excepteu', 'Sapiente labore dict', '53476', 'Ipsa assumenda duis', 'Exercitation iure ad', 'active', '2022-10-14 05:25:58', '2022-10-14 05:25:58', NULL),
(5, 5, 'Dennis Bernard', '0311-3975120', 'Perspiciatis nobis', 4, 'Quos delectus repud', 'Iure deserunt lorem', '74195', 'Ipsum placeat enim', 'Ab quos dolore obcae', 'active', '2022-10-14 05:27:39', '2022-10-14 05:27:39', NULL),
(6, 6, 'Risa Holcomb', '0316-1988792', 'Voluptates voluptate', 1, 'Quia qui culpa non d', 'Delectus officia do', '55723', 'Odio sunt sunt et a', 'Quisquam molestiae u', 'active', '2022-10-14 06:09:30', '2022-10-14 06:09:30', NULL),
(7, 7, 'Aspen Solis', '0312-2982375', 'Veniam enim eligend', 5, 'Quia error quis atqu', 'Voluptatem voluptat', '76682', 'Neque quisquam qui a', 'Sint explicabo Cons', 'active', '2022-10-14 08:15:40', '2022-10-14 08:15:40', NULL),
(8, 8, 'Hayes Mosley', '0316-7990566', 'Voluptates voluptate', 6, 'Modi irure et sunt e', 'Aut inventore assume', '40439', 'Architecto voluptate', 'Quod eum eum ea dolo', 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(9, 9, 'Zenia Simmons', '0317-6180540', 'asa', 3, 'Et incidunt excepte', 'Expedita culpa volu', '16844', 'Eum inventore sed to', 'Aliqua Velit et est', 'active', '2022-10-14 09:13:01', '2022-10-14 09:13:01', NULL),
(10, 10, 'Cailin Oliver', '0317-0647875', 'Ipsum est fuga Sint', 4, 'Commodi dolor quasi', 'Aut vel voluptatibus', '37665', 'Sint voluptas quasi', 'Sunt sed sit offici', 'active', '2022-10-14 09:14:01', '2022-10-14 09:14:01', NULL),
(11, 11, 'Hayley Townsend', '0314-7334161', 'drgtsfd', 4, 'Cum aliquam aperiam', 'Id hic nostrud nulla', '55959', 'Omnis molestiae cons', 'Occaecat itaque mole', 'active', '2022-10-14 09:15:15', '2022-10-14 09:15:15', NULL);

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
(1, 1, 'this is parcel1', 'used', '0', 10.00, 20, 200.00, 'active', '2022-10-14 05:09:05', '2022-10-14 05:09:05', NULL),
(2, 2, 'Vel incididunt et vo', 'used', '1', 10.00, 12, 120.00, 'active', '2022-10-14 05:18:10', '2022-10-14 05:18:10', NULL),
(3, 3, 'Voluptatem soluta qu', 'new', '0', 12.00, 3, 36.00, 'active', '2022-10-14 05:24:25', '2022-10-14 05:24:25', NULL),
(4, 4, 'Praesentium est anim', 'used', '1', 438.00, 552, 241776.00, 'active', '2022-10-14 05:25:58', '2022-10-14 05:25:58', NULL),
(5, 5, 'Eius expedita iusto', 'new', '0', 93.00, 369, 34317.00, 'active', '2022-10-14 05:27:39', '2022-10-14 05:27:39', NULL),
(6, 6, 'Consequuntur quibusd', 'new', '2', 727.00, 83, 12.00, 'active', '2022-10-14 06:09:30', '2022-10-14 06:09:30', NULL),
(7, 7, 'Velit aperiam et dol', 'used', '0', 531.00, 472, 23.00, 'active', '2022-10-14 08:15:40', '2022-10-14 08:15:40', NULL),
(8, 7, 'Quis velit placeat', 'new', '2', 499.00, 967, 96.00, 'active', '2022-10-14 08:15:40', '2022-10-14 08:15:40', NULL),
(9, 8, 'Est non consequuntur', 'new', '0', 581.00, 806, 23.00, 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(10, 8, 'Aliqua Quo consecte', 'new', '2', 241.00, 803, 83.00, 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(11, 8, 'Dolore maxime id cup', 'new', '1', 887.00, 629, 84.00, 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(12, 8, 'Consectetur quidem', 'new', '2', 868.00, 221, 32.00, 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(13, 9, 'Saepe non nobis omni', 'used', '2', 331.00, 994, 63.00, 'active', '2022-10-14 09:13:01', '2022-10-14 09:13:01', NULL),
(14, 9, 'Nihil sed dolorem do', 'used', '0', 18.00, 889, 81.00, 'active', '2022-10-14 09:13:01', '2022-10-14 09:13:01', NULL),
(15, 9, 'Iure eligendi natus', 'used', '2', 214.00, 88, 40.00, 'active', '2022-10-14 09:13:01', '2022-10-14 09:13:01', NULL),
(16, 10, 'Dolor non ipsam sint', 'new', '2', 891.00, 56, 38.00, 'active', '2022-10-14 09:14:01', '2022-10-14 09:14:01', NULL),
(17, 10, 'Aliquip tempora aute', 'new', '1', 902.00, 587, 51.00, 'active', '2022-10-14 09:14:01', '2022-10-14 09:14:01', NULL),
(18, 11, 'Dolor qui eos dolori', 'new', '2', 719.00, 284, 81.00, 'active', '2022-10-14 09:15:15', '2022-10-14 09:15:15', NULL),
(19, 11, 'Sint veniam debitis', 'used', '2', 258.00, 443, 47.00, 'active', '2022-10-14 09:15:15', '2022-10-14 09:15:15', NULL),
(20, 11, 'Deserunt fuga Est', 'used', '0', 250.00, 852, 71.00, 'active', '2022-10-14 09:15:15', '2022-10-14 09:15:15', NULL);

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
(1, 1, '2008-01-13', '123', 'Customer1', '0312-2211123', 1, 'kpk', 'peshawar', '44110', 'hayatabad', 'hayatabad', 'active', '2022-10-14 05:09:05', '2022-10-14 05:09:05', NULL),
(2, 2, '1988-06-27', '123', 'Customer2', '0315-2812991', 6, 'Ut quasi eaque facer', 'Voluptates nulla exc', '44211', 'Aut architecto duis', 'Labore amet provide', 'active', '2022-10-14 05:18:10', '2022-10-14 05:18:10', NULL),
(3, 3, '2019-10-29', '123', 'Customer3', '0314-1555116', 3, 'Deleniti consectetur', 'Dolore officiis quas', '99353', 'Iure illum et tempo', 'Ut aliquip do nesciu', 'active', '2022-10-14 05:24:25', '2022-10-14 05:24:25', NULL),
(4, 4, '2009-03-07', '123', 'Customer4', '0315-9362763', 4, 'Aut et officia hic e', 'Ex facere vero rerum', '80669', 'Voluptatem Voluptat', 'Perferendis ex molli', 'active', '2022-10-14 05:25:58', '2022-10-14 05:25:58', NULL),
(5, 5, '2012-08-23', '123', 'Customer5', '0311-6167825', 3, 'Rerum aliquam est se', 'Optio adipisicing a', '98431', 'Soluta repellendus', 'Ut veniam et volupt', 'active', '2022-10-14 05:27:39', '2022-10-14 05:27:39', NULL),
(6, 6, '2015-08-08', '123', 'Customer6', '0316-7360541', 3, 'Delectus molestias', 'Nisi error maxime au', '65533', 'Quis reprehenderit', 'Reiciendis hic archi', 'active', '2022-10-14 06:09:30', '2022-10-14 06:09:30', NULL),
(7, 7, '1981-06-25', '123', 'Becker Freeman Plc', '0317-9374592', 6, 'Ut voluptatibus fugi', 'Asperiores animi do', '28352', 'Aliqua Nisi amet c', 'Magnam est quisquam', 'active', '2022-10-14 08:15:40', '2022-10-14 08:15:40', NULL),
(8, 8, '2016-09-15', '123', 'Long Bridges LLC', '0319-0520590', 6, 'Sed ea aliquam ab to', 'Accusamus irure eos', '14222', 'Natus facilis dolori', 'Corrupti aute elit', 'active', '2022-10-14 09:11:15', '2022-10-14 09:11:15', NULL),
(9, 9, '2020-10-15', '123', 'Boyer Trujillo Plc', '0317-1218343', 4, 'In laboriosam eos', 'Beatae aliquid commo', '89206', 'In quibusdam minim p', 'Excepteur non fugiat', 'active', '2022-10-14 09:13:01', '2022-10-14 09:13:01', NULL),
(10, 10, '2001-09-09', '123', 'Vinson Snyder Co', '0313-5270283', 2, 'Elit et pariatur R', 'Et aspernatur velit', '13874', 'Quibusdam ut quaerat', 'Aute iure enim quam', 'active', '2022-10-14 09:14:01', '2022-10-14 09:14:01', NULL),
(11, 11, '1971-08-10', '123', 'Rosales and Noel Traders', '0315-9219822', 1, 'Maxime omnis nisi es', 'Ullam quia reprehend', '90909', 'Aliqua Atque maiore', 'Veritatis in minim o', 'active', '2022-10-14 09:15:15', '2022-10-14 09:15:15', NULL);

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
(1, 1, '100', 'active', '2022-10-14 07:19:46', '2022-10-14 07:19:46', NULL);

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
(1, 1, '123', 'active', '2022-10-14 07:19:37', '2022-10-14 07:19:37', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
