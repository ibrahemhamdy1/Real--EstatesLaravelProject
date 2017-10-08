-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 02:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestatesproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(10) UNSIGNED NOT NULL,
  `bu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_rent` smallint(6) NOT NULL,
  `bu_square` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_type` smallint(6) NOT NULL,
  `bu_small_dis` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_meta` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_longitude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_latitude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_large_dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bu_status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `rooms` int(11) NOT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_05_142342_create_buildings_table', 2);

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
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `namesetting` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `slug`, `namesetting`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'اسم  الموقع', 'Sitename', 'موقع العقارات', 0, '2017-10-05 12:25:22', '2017-10-05 10:25:22'),
(2, 'المويبل  ', 'mobile', '01201020120', 0, '2017-10-03 15:49:41', '0000-00-00 00:00:00'),
(3, 'الفيس  بوك ', 'Facebook', 'www.facebook.com', 0, '2017-10-05 12:32:48', '2017-10-05 10:32:48'),
(4, 'تويتر', 'twitter', '', 0, '2017-10-03 16:07:03', '0000-00-00 00:00:00'),
(5, 'اليوتيوب', 'Youtube', '', 0, '2017-10-03 16:08:08', '0000-00-00 00:00:00'),
(6, 'العنوان', 'addres', '', 1, '2017-10-03 16:08:08', '0000-00-00 00:00:00'),
(7, 'الكلمات  الدلالية  ', 'Keyword', '', 1, '2017-10-03 16:09:11', '0000-00-00 00:00:00'),
(8, 'وصف الموقع', 'dis', '', 1, '2017-10-03 16:09:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'hema', 'mslm356@gmail.com', '$2y$10$8iCzckMiP6NFWVw.PddByOKF6k0z5Lvr/7dbl4mTfaXz.QsUliklK', 'detjTVk3GLMLhcCCOEvSmlBhgWDa35CplTPVED0oAQuREm44GAeEszcaiVfm', '2017-09-23 09:15:01', '2017-09-23 09:15:01', 1),
(8, 'dfdf', 'mslm3443@dfdf.com', '$2y$10$gWcFrn.t8TW8h0Grj1wSa.ehl4xNJHVjQ.tkke8JvHK3OuXRVWuEO', NULL, '2017-10-03 12:46:51', '2017-10-03 12:46:51', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
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
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
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
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
