-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 08:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought_tickets`
--

CREATE TABLE `bought_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airlines_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_quantity` int(10) NOT NULL,
  `ticket_price` bigint(255) NOT NULL,
  `ticket_status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bought_tickets`
--

INSERT INTO `bought_tickets` (`id`, `airlines_name`, `ticket_quantity`, `ticket_price`, `ticket_status`, `created_at`, `updated_at`) VALUES
(15, 'US Bangla Airlines', 1, 1500, 2, '2020-04-28 12:14:29', '2020-04-28 12:14:44'),
(16, 'Biman Bangladesh Airlines', 1, 2000, 2, '2020-04-28 12:15:52', '2020-04-28 12:16:05'),
(17, 'Regent Airways', 1, 1000, 2, '2020-04-28 12:17:29', '2020-04-28 12:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone` bigint(255) NOT NULL,
  `airlines_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` bigint(255) NOT NULL,
  `ticket_quantity` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `cus_name`, `cus_phone`, `airlines_name`, `ticket_price`, `ticket_quantity`, `created_at`, `updated_at`) VALUES
(2, 'shihab', 32311244, 'US Bangla Airlines', 1500, 1, '2020-04-28 12:14:44', '2020-04-28 12:14:44'),
(3, 'fahim', 122242333, 'Biman Bangladesh Airlines', 2000, 1, '2020-04-28 12:16:05', '2020-04-28 12:16:05'),
(4, 'abdul', 227443223, 'Regent Airways', 1000, 1, '2020-04-28 12:17:50', '2020-04-28 12:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_28_111156_create_bought_tickets_table', 2),
(4, '2020_04_28_111219_create_sold_tickets_table', 2),
(5, '2020_04_28_111247_create_customer_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sold_tickets`
--

CREATE TABLE `sold_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airlines_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_quantity` int(10) NOT NULL,
  `ticket_price` bigint(255) NOT NULL,
  `cus_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone` bigint(255) NOT NULL,
  `profit` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sold_tickets`
--

INSERT INTO `sold_tickets` (`id`, `airlines_name`, `ticket_quantity`, `ticket_price`, `cus_name`, `cus_phone`, `profit`, `created_at`, `updated_at`) VALUES
(9, 'US Bangla Airlines', 1, 1500, 'shihab', 32311244, 180, '2020-04-28 12:14:44', '2020-04-28 12:14:44'),
(10, 'Biman Bangladesh Airlines', 1, 2000, 'fahim', 122242333, 400, '2020-04-28 12:16:05', '2020-04-28 12:16:05'),
(11, 'Regent Airways', 1, 1000, 'abdul', 227443223, 100, '2020-04-28 12:17:50', '2020-04-28 12:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'shihab', '1234', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought_tickets`
--
ALTER TABLE `bought_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_tickets`
--
ALTER TABLE `sold_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_at` (`created_at`,`updated_at`),
  ADD KEY `created_at_2` (`created_at`,`updated_at`),
  ADD KEY `created_at_3` (`created_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bought_tickets`
--
ALTER TABLE `bought_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sold_tickets`
--
ALTER TABLE `sold_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
