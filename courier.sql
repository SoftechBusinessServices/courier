-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 03:23 PM
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

INSERT INTO `companies` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `country_id`, `address`, `phone`, `ntn_no`, `web_url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vivo', 'Tech', 'vivotech@gmail.com', NULL, 1, 'Mumbai', '0323-1645645', '3132132', 'http://www.vivotech.com', 'active', '2022-09-22 02:08:00', '2022-09-22 05:13:42', NULL),
(2, 'Oppo', 'Tech', 'oppo@mailinator.com', NULL, 3, 'Molestias amet magn', '0317-2455117', '100', 'https://www.fimusy.me', 'active', '2022-09-22 02:10:12', '2022-09-22 05:12:58', NULL),
(3, 'Samsung', 'Tech', 'samsung@mail.com', NULL, 4, 'Eum vel et sed est d', '0319-0549860', '81', 'https://www.gipyjecij.biz', 'active', '2022-09-22 02:10:49', '2022-09-22 05:14:47', NULL),
(4, 'Apple', 'Iphone', 'apple@mailinator.com', NULL, 2, 'Ex a magnam sint adi', '0312-8324459', '85', 'https://www.lunujibaz.me', 'active', '2022-09-22 02:11:05', '2022-09-22 05:13:27', NULL),
(5, 'Infinix', 'Smart', 'infinix@gmail.com', NULL, 4, 'Optio mollit id et', '0314-8114923', '41', 'https://www.codi.org', 'active', '2022-09-22 02:11:44', '2022-09-22 05:14:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_representatives`
--

CREATE TABLE `company_representatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `represent_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `represent_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `represent_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `represent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_representatives`
--

INSERT INTO `company_representatives` (`id`, `company_id`, `represent_name`, `represent_email`, `represent_phone`, `represent_address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Asad Khan', 'asad@gmail.com', '0312-1245645', 'GT road', 'active', '2022-09-22 02:08:00', '2022-09-22 06:42:08', '2022-09-22 06:42:08'),
(2, 2, 'pememiraw', 'tebi@mailinator.com', '0311-5210560', 'Commodi fugiat ducim', 'active', '2022-09-22 02:10:13', '2022-09-22 02:10:13', NULL),
(3, 4, 'sivohymiti', 'moje@mailinator.com', '0313-4423964', 'Natus molestiae esse', 'active', '2022-09-22 02:11:05', '2022-09-22 06:42:16', '2022-09-22 06:42:16'),
(4, 2, 'Abbas', 'abbas@gmail.com', '0323-1223221', 'Peshawar', 'active', '2022-09-22 03:16:36', '2022-09-22 03:16:36', NULL),
(5, 2, 'Abbas', 'abbas@gmail.com', '0323-1223221', 'Peshawar', 'active', '2022-09-22 03:16:51', '2022-09-22 03:16:51', NULL);

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
(1, 1, 'Pakistan', 'PK92', 'active', '2022-09-22 01:11:35', '2022-09-22 01:11:35', NULL),
(2, 2, 'United States', 'US01', 'active', '2022-09-22 01:12:03', '2022-09-22 01:12:03', NULL),
(3, 1, 'India', 'IN93', 'active', '2022-09-22 01:12:21', '2022-09-22 01:12:21', NULL),
(4, 1, 'Afghanistan', 'AF91', 'active', '2022-09-22 01:12:41', '2022-09-22 01:12:41', NULL);

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
(1, 'PKR', 'Rs', 'active', '2022-09-22 01:12:57', '2022-09-22 01:12:57', NULL),
(2, 'INR', '₹', 'active', '2022-09-22 01:14:00', '2022-09-22 01:14:00', NULL),
(3, 'AFN', '؋', 'active', '2022-09-22 01:15:32', '2022-09-22 01:15:32', NULL),
(4, 'USD', '$', 'active', '2022-09-22 01:15:48', '2022-09-22 01:15:48', NULL);

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
  `country_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `logistics` (`id`, `logistic_name`, `vendor_name`, `vendor_email`, `email_verified_at`, `country_id`, `vendor_address`, `vendor_phone`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'tylap', 'sutijovy@mailinator.com', NULL, 2, 'Anim asperiores nost', '0314-4636626', 'active', '2022-09-22 06:38:52', '2022-09-22 07:13:55', '2022-09-22 07:13:55'),
(3, NULL, 'coxiwyrib', 'dybawica@mailinator.com', NULL, 3, 'Nisi nesciunt et es', '0312-4258451', 'active', '2022-09-22 06:39:11', '2022-09-22 07:13:58', '2022-09-22 07:13:58'),
(4, 'TCS', 'Abbas Khab', 'abbas@mail.com', NULL, 1, 'Reprehenderit ullamc', '0314-1198970', 'active', '2022-09-22 06:42:49', '2022-09-22 07:26:15', NULL),
(5, 'OCS', 'Nouman KHan', 'nouman@mail.com', NULL, 3, 'Cupidatat et excepte', '0311-2773965', 'active', '2022-09-22 07:22:00', '2022-09-22 07:26:55', NULL);

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2022_09_01_075129_create_companies_table', 1),
(28, '2022_09_01_080253_create_customers_table', 1),
(29, '2022_09_02_070928_create_regions_table', 1),
(30, '2022_09_06_112849_create_currencies_table', 1),
(31, '2022_09_06_123657_create_countries_table', 1),
(32, '2022_09_07_075145_create_shipping_charges_table', 1),
(33, '2022_09_08_133017_create_parcel_registrations_table', 1),
(34, '2022_09_16_105303_create_password_resets_table', 1),
(35, '2022_09_22_052716_create_company_representative_table', 1),
(36, '2022_09_22_055640_create_logistics_table', 1),
(38, '2022_09_22_063145_create_companies_table', 2),
(39, '2022_09_22_070449_create_company_representatives_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_registrations`
--

CREATE TABLE `parcel_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pl_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_date` date DEFAULT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `pl_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_extras` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_final` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `represent_id` int(11) DEFAULT NULL,
  `pl_status` enum('pending','processed','unallocated','allocated','shipped','transit','dispatched','delivered','cancelled','returned') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
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
(1, 'Asia', 'active', '2022-09-22 01:10:59', '2022-09-22 01:10:59', NULL),
(2, 'Europe', 'active', '2022-09-22 01:11:08', '2022-09-22 01:11:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `region_id`, `country_id`, `currency_id`, `symbol`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Rs', 'active', NULL, '2022-09-22 07:50:03', '2022-09-22 07:50:03'),
(2, 2, 2, 4, '$', 'active', NULL, '2022-09-22 08:17:10', '2022-09-22 08:17:10');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$PiBOU.I/pWVJ.19bjABJkeFMEPFTXysiKKxR4KxGmCoj4yQdhqAZe', NULL, '2022-09-22 01:10:43', '2022-09-22 01:10:43');

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
-- Indexes for table `company_representatives`
--
ALTER TABLE `company_representatives`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `logistics_vendor_email_unique` (`vendor_email`);

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
-- AUTO_INCREMENT for table `company_representatives`
--
ALTER TABLE `company_representatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `parcel_registrations`
--
ALTER TABLE `parcel_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
