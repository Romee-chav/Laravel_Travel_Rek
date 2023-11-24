-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 12:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_rek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangkok_basics`
--

CREATE TABLE `bangkok_basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_flight` time DEFAULT NULL,
  `dept_flight` time DEFAULT NULL,
  `check-in` date DEFAULT NULL,
  `room` bigint(20) UNSIGNED DEFAULT NULL,
  `adults` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dinners`
--

CREATE TABLE `dinners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dinner_id` bigint(20) DEFAULT NULL,
  `dinner_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinners`
--

INSERT INTO `dinners` (`id`, `dinner_id`, `dinner_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dinner 1', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(2, 2, 'Dinner 2', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(3, 3, 'Dinner 3', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(4, 4, 'Dinner 4', '2023-04-24 03:37:23', '2023-04-24 03:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `dubais`
--

CREATE TABLE `dubais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meals_id` bigint(20) DEFAULT NULL,
  `meals_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `meals_id`, `meals_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lunch 1', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(2, 2, 'Lunch 2', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(3, 3, 'Lunch 3', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(4, 4, 'Lunch 4', '2023-04-24 03:37:23', '2023-04-24 03:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_21_060333_create_dubais_table', 1),
(6, '2023_04_23_104505_create_bangkok_basics_table', 1),
(7, '2023_04_23_104756_create_pattaya_basics_table', 1),
(8, '2023_04_23_104821_create_phuket_basics_table', 1),
(9, '2023_04_23_113354_create_rooms_table', 1),
(10, '2023_04_23_122111_create_dinners_table', 1),
(11, '2023_04_23_122355_create_meals_table', 1),
(12, '2023_04_23_161801_create_thailand_bangkoks_table', 1),
(13, '2023_04_23_161842_create_thailand_pattayas_table', 1),
(14, '2023_04_23_161916_create_thailand_phukets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pattaya_basics`
--

CREATE TABLE `pattaya_basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_flight` time DEFAULT NULL,
  `dept_flight` time DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `room` bigint(20) UNSIGNED DEFAULT NULL,
  `adults` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phuket_basics`
--

CREATE TABLE `phuket_basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_flight` time DEFAULT NULL,
  `dept_flight` time DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `room` bigint(20) UNSIGNED DEFAULT NULL,
  `adults` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) DEFAULT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Room 1', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(2, 2, 'Room 2', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(3, 3, 'Room 3', '2023-04-24 03:37:23', '2023-04-24 03:37:23'),
(4, 4, 'Room 4', '2023-04-24 03:37:23', '2023-04-24 03:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `thailand_bangkoks`
--

CREATE TABLE `thailand_bangkoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_season_siam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecotel_bangkok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibis_bangkok_sukhumvit_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meals` bigint(20) UNSIGNED DEFAULT NULL,
  `dinner` bigint(20) UNSIGNED DEFAULT NULL,
  `bkk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thailand_pattayas`
--

CREATE TABLE `thailand_pattayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golden_beach_hotel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baron_beach_hotel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `the_beverly_hotel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meals` bigint(20) UNSIGNED DEFAULT NULL,
  `dinner` bigint(20) UNSIGNED DEFAULT NULL,
  `hkt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thailand_phukets`
--

CREATE TABLE `thailand_phukets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wakeup_aonang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ashlee_plaza_patong_hotel_&_spa_Phuket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meals` bigint(20) UNSIGNED DEFAULT NULL,
  `dinner` bigint(20) UNSIGNED DEFAULT NULL,
  `kbv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', '0123456789', NULL, '$2y$10$lbSbBWJzdxrcuJj/31SLDeIEWu6Rga6W/H7ylGCbQY1QM/6hiFGfe', NULL, '2023-04-24 03:37:23', '2023-04-24 03:37:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangkok_basics`
--
ALTER TABLE `bangkok_basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinners`
--
ALTER TABLE `dinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dubais`
--
ALTER TABLE `dubais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pattaya_basics`
--
ALTER TABLE `pattaya_basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phuket_basics`
--
ALTER TABLE `phuket_basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thailand_bangkoks`
--
ALTER TABLE `thailand_bangkoks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thailand_pattayas`
--
ALTER TABLE `thailand_pattayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thailand_phukets`
--
ALTER TABLE `thailand_phukets`
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
-- AUTO_INCREMENT for table `bangkok_basics`
--
ALTER TABLE `bangkok_basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dinners`
--
ALTER TABLE `dinners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dubais`
--
ALTER TABLE `dubais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pattaya_basics`
--
ALTER TABLE `pattaya_basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phuket_basics`
--
ALTER TABLE `phuket_basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thailand_bangkoks`
--
ALTER TABLE `thailand_bangkoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thailand_pattayas`
--
ALTER TABLE `thailand_pattayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thailand_phukets`
--
ALTER TABLE `thailand_phukets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
