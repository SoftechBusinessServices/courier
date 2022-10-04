-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:27 PM
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
(1, 1, 'Pakistan', 'active', '2022-10-04 07:41:54', '2022-10-04 07:41:54', NULL),
(2, 1, 'India', 'active', '2022-10-04 07:41:54', '2022-10-04 07:41:54', NULL),
(3, 1, 'Saudi Arabia', 'active', '2022-10-04 07:41:54', '2022-10-04 07:41:54', NULL),
(4, 2, 'United Kingdom', 'active', '2022-10-04 07:42:38', '2022-10-04 07:42:38', NULL),
(5, 2, 'United State', 'active', '2022-10-04 07:42:38', '2022-10-04 07:42:38', NULL);

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
  `services` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `logistics` (`id`, `logistic_name`, `services`, `vendor_email`, `vendor_phone`, `vendor_address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TCS Services', '[\"1\",\"4\"]', 'tcs@mail.com', '0312-3122323', 'Peshawar', 'active', '2022-10-04 08:09:57', '2022-10-04 08:09:57', NULL),
(2, 'Lepard Services', '[\"1\",\"2\",\"3\",\"4\"]', 'leopard@mail.com', '0345-1212121', 'Islamabad', 'active', '2022-10-04 08:12:10', '2022-10-04 08:12:10', NULL);

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
(8, '2022_09_27_081556_create_services_table', 1),
(9, '2022_09_27_112227_create_countries_table', 1),
(10, '2022_09_30_044813_create_parcels_table', 1),
(11, '2022_09_30_044906_create_parcel_shippers_table', 1),
(12, '2022_09_30_044922_create_parcel_consignees_table', 1),
(13, '2022_09_30_044942_create_parcel_notes_table', 1),
(14, '2022_10_04_122543_create_logistics_table', 1),
(15, '2022_10_04_122805_create_allocate_parcels_table', 1),
(16, '2022_10_04_123018_create_payment_methods_table', 1);

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
(1, 'Bank Transfer', 'active', '2022-10-04 07:49:04', '2022-10-04 07:49:04', NULL);

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
(1, 'DHL via Dubai', 'active', '2022-10-04 07:34:38', '2022-10-04 07:34:38', NULL),
(2, 'Leopards Express', 'active', '2022-10-04 08:01:35', '2022-10-04 08:01:35', NULL),
(3, 'UPS via Dubai', 'active', '2022-10-04 08:01:45', '2022-10-04 08:01:45', NULL),
(4, 'DHL via UK', 'active', '2022-10-04 08:01:58', '2022-10-04 08:01:58', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parcel_consignees`
--
ALTER TABLE `parcel_consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parcel_notes`
--
ALTER TABLE `parcel_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parcel_shippers`
--
ALTER TABLE `parcel_shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
