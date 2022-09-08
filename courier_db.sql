-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 03:37 PM
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `companies` (`id`, `name`, `email`, `email_verified_at`, `country_id`, `address`, `phone`, `ntn_no`, `web_url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vivo', 'raheke@mailinator.com', NULL, 5, 'Eligendi sint ut mo', '0318-6312784', '72', 'https://www.vaherutese.cm', 'active', '2022-09-06 08:20:43', '2022-09-06 08:20:43', NULL),
(2, 'Oppo', 'huvybexi@mailinator.com', NULL, 4, 'Sed perferendis quod', '0311-8627671', '38', 'https://www.bitatinuhazalo.ca', 'active', '2022-09-06 08:20:53', '2022-09-06 08:20:53', NULL),
(3, 'Huwaei', 'xexyka@mailinator.com', NULL, 6, 'Nostrud ea pariatur', '0312-0846127', '50', 'https://www.jadyrogikugipi.net', 'active', '2022-09-06 08:21:05', '2022-09-06 08:21:05', NULL),
(4, 'Lenovo', 'bemabaw@mailinator.com', NULL, 1, 'Et magna rerum asper', '0316-2585814', '89', 'https://www.xihiwaputibi.me.uk', 'active', '2022-09-06 08:21:13', '2022-09-06 08:21:13', NULL),
(5, 'Fujitsu', 'kege@mailinator.com', NULL, 7, 'Iusto recusandae Ne', '0313-3474217', '28', 'https://www.wusopotyj.cm', 'active', '2022-09-06 08:21:25', '2022-09-06 08:21:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `region_id`, `name`, `code`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Pakistan', 'PK92', 'active', '2022-09-06 08:04:04', '2022-09-06 08:04:04', NULL),
(2, 2, 'United Kingdom', 'GB44', 'active', '2022-09-06 08:05:48', '2022-09-06 08:05:48', NULL),
(3, 1, 'India', 'IND91', 'active', '2022-09-06 08:07:04', '2022-09-06 08:07:04', NULL),
(4, 1, 'Srilanka', 'LKA94', 'active', '2022-09-06 08:07:56', '2022-09-06 08:07:56', NULL),
(5, 2, 'Ukraine', 'UKR380', 'active', '2022-09-06 08:08:43', '2022-09-06 08:18:32', NULL),
(6, 3, 'United States', 'USA1', 'active', '2022-09-06 08:09:17', '2022-09-06 08:09:17', NULL),
(7, 1, 'Afghanistan', 'AFG93', 'active', '2022-09-06 08:09:59', '2022-09-06 08:09:59', NULL);

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
  `cnic_scane` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company_id`, `name`, `email`, `email_verified_at`, `country_id`, `address`, `phone`, `cnic_no`, `cnic_scane`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'wazyv', 'sugy@mailinator.com', NULL, 5, 'Ex consequatur recus', '0311-4655978', '21313-1313131-3', '1662470590.png', 'active', '2022-09-06 08:23:10', '2022-09-06 08:23:10', NULL),
(2, 2, 'xibobit', 'cypatud@mailinator.com', NULL, 1, 'Alias voluptates deb', '0315-4673493', '23231-2313131-3', '1662470607.png', 'active', '2022-09-06 08:23:27', '2022-09-06 08:23:27', NULL),
(3, 5, 'kifas', 'daquvutowi@mailinator.com', NULL, 3, 'Aute maiores qui vol', '0312-1471619', '23423-4242424-2', '1662470628.jpg', 'active', '2022-09-06 08:23:48', '2022-09-06 08:23:48', NULL);

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
(39, '2022_08_31_095542_create_parcel_registrations_table', 1),
(71, '2014_10_12_000000_create_users_table', 2),
(72, '2014_10_12_100000_create_password_resets_table', 2),
(73, '2019_08_19_000000_create_failed_jobs_table', 2),
(74, '2022_09_01_075129_create_companies_table', 2),
(75, '2022_09_01_080253_create_customers_table', 2),
(76, '2022_09_02_065442_create_shipping_charges_table', 2),
(77, '2022_09_02_070928_create_regions_table', 2),
(78, '2022_09_06_061145_create_parcel_registrations_table', 2),
(79, '2022_09_06_112849_create_currencies_table', 2),
(80, '2022_09_06_123657_create_countries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_registrations`
--

CREATE TABLE `parcel_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `pl_weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chargeable_weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_extras` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_final` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_date` date DEFAULT NULL,
  `pl_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_status` enum('processing','shipped','transit','delivered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'processing',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Asia', 'active', '2022-09-06 07:41:43', '2022-09-06 07:41:43', NULL),
(2, 'Europe', 'active', '2022-09-06 07:41:49', '2022-09-06 07:41:49', NULL),
(3, 'America', 'active', '2022-09-06 07:41:56', '2022-09-06 07:41:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm0_500` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm501_1000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm1001_1500` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm1501_2000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm2001_5000` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gm5000_above` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_registrations`
--
ALTER TABLE `parcel_registrations`
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
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `parcel_registrations`
--
ALTER TABLE `parcel_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
